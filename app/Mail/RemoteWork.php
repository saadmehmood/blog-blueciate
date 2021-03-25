<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RemoteWork extends Mailable
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
    public function build(): RemoteWork
    {
        return $this->from($this->data['email'], $this->data['full_name'])
                    ->subject(__('Remote Work Query'))
                    ->view('emails.remote-work')
                    ->with([
                        'data' => $this->data
                    ]);
    }
}
