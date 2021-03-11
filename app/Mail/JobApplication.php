<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class JobApplication extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $fileName;

    /**
     * Create a new message instance.
     */
    public function __construct($data, $fileName)
    {
        $this->data = $data;
        $this->fileName = $fileName;
    }

    /**
     * Build the message.
     */
    public function build(): JobApplication
    {
        return $this->from('info@blueciate.com', config('app.name', 'Blueciate'))
                    ->subject(__('Job Application'))
                    ->view('emails.job_application')
                    ->attach(Storage::path('public/resumes/' . $this->fileName), ['as' => $this->fileName])
                    ->with([
                        'data' => $this->data
                    ]);
    }
}
