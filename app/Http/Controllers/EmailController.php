<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
class EmailController extends Controller
{
    public function getEmail (Request $request) {
        $name = trim($request->name);
        $email = trim($request->email);
        $phone = trim($request->phone);
        $subject = trim($request->subject);
        $message = trim($request->message);
        if (!($name && $email && $phone && $subject && $message)) {
            return [
                'type' => 'error',
                'message' => 'Complete todos los campos por favor.'
            ];
        }
        if (!(preg_match('#^[a-zA-Z ]{1,50}$#', $name) === 1)) {
            return [
                'type' => 'error',
                'message' => 'Escriba su nombre de manera correcta.'
            ];
        }
        if (!(preg_match('#^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$#', $email) === 1)) {
            return [
                'type' => 'error',
                'message' => 'Escriba su email de manera correcta.'
            ];
        }
        if (!(preg_match('#^[0-9]{9}$#', $phone) === 1)) {
            return [
                'type' => 'error',
                'message' => 'Escriba su numero celular de manera correcta (9 digitos).'
            ];
        }
        $data = [
            'subject' => $subject,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'mess' => $message
        ];
        Mail::to('portalwebcomunidad@gmail.com')->send(new Email($subject, $data));
        return [
            'type' => 'success',
            'message' => 'Datos recibidos, en breve nos contactamos contigo.'
        ];

    }
}
