<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BpmsReady extends Mailable
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
    public function build(): BpmsReady
    {
        return $this->from($this->data['emailAddress'], $this->data['firstName'] . ' ' . $this->data['lastName'])
                    ->subject(__('BPMS Query'))
                    ->view('emails.bpms-ready')
                    ->with([
                        'data' => $this->data
                    ]);
    }
}
