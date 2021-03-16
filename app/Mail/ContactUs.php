<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array
     */
    protected $data;

    /**
     * Create a new message instance.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build(): ContactUs
    {
        return $this->from($this->data['email'], $this->data['fullname'])
                    ->subject(__('Contact Mail'))
                    ->view('emails.contact-us')
                    ->with([
                        'data' => $this->data
                    ]);
    }
}
