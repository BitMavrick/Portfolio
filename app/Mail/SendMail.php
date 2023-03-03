<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name = '';
    public $email = '';
    public $message = '';

    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('mail');

        return $this->from($this->email)
            ->subject('New message from ' . $this->name)
            ->view('mail')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'mess' => $this->message,
            ]);
    }
}
