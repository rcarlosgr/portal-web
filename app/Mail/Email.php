<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $fromEmail;
    public $title;
    public $data;
    public function __construct($fromEmail,$title, $data)
    {
        $this->fromEmail = $fromEmail;
        $this->title = $title;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->fromEmail, env('MAIL_FROM_NAME'))
                    ->view('email')
                    ->subject($this->title)
                    ->with($this->data);
    }
}
