<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendReportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subjectLine;
    public $bodyMessage;
    public $filePath;
    public $fileName;

    public function __construct($subjectLine, $bodyMessage, $filePath, $fileName)
    {
        $this->subjectLine = $subjectLine;
        $this->bodyMessage = $bodyMessage;
        $this->filePath = $filePath;
        $this->fileName = $fileName;
    }

    public function build()
    {
        return $this->view('emails.report')
            ->subject($this->subjectLine)
            ->with(['bodyMessage' => $this->bodyMessage])
            ->attach($this->filePath, [
                'as' => $this->fileName,         // Custom name for the file
                'mime' => 'application/pdf',     // Adjust MIME type if needed
            ]);
    }
}
