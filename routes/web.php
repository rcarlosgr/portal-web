<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('home');
});

Route::get('/acerca-de-nosotros', function () {
    return view('about');
});
Route::get('/consultoria', function () {
    return view('consultancy');
});
Route::get('/cursos', function () {
    return view('courses');
});
Route::get('/proyectos', function () {
    return view('projects');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/responsabilidad-social', function () {
    return view('social-responsability');
});
Route::get('/contacto', function () {
    return view('contact');
});

Route::post('/enviar-email', [EmailController::class, 'getEmail']);
