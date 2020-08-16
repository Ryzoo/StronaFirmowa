<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

	public string $title;
	public string $email;
	public string $message;

	public function __construct(string $title, string $email, string $message)
	{
		$this->title = $title;
		$this->email = $email;
		$this->message = $message;
	}

    public function build()
    {
		return $this
			->to(env('MAIL_FROM_ADDRESS'))
			->subject('Nowa wiadomość z formularza!')
			->markdown('emails.contact');
    }
}
