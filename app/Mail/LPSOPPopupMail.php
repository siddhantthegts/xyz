<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

class LPSOPPopupMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data = '';

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config('app.from_mail'), 'Dream Ladder Consultancy'),
            subject: "#".$this->data['id']." New ".$this->data['type']." Enquiry | ". $this->data['name'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.enquiry-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        if($this->data['file'] == null){
            return [];
        }
        else {
            return [
                Attachment::fromPath('storage/'.json_decode($this->data['file'])[0]->download_link)
                            ->as(json_decode($this->data['file'])[0]->original_name),
            ];
        }
    }
}
