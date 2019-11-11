<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewStudyAlert extends Mailable
{
    use Queueable, SerializesModels;
        
    public $status;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($status)
    {
        //
        $this->status = $status;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.new_study_alert');
    }
}
