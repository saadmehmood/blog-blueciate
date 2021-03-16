<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BpmsWebinar extends Mailable
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
    public function build(): BpmsWebinar
    {
        return $this->from('info@blueciate.com', 'Blueciate Inc')
                    ->subject(__('BPMS Webinar'))
                    ->view('emails.bpms-webinar')
                    ->with([
                        'data' => $this->data
                    ]);
    }
}
