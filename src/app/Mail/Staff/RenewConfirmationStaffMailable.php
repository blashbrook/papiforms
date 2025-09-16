<?php

namespace Blashbrook\PAPIForms\App\Mail\Staff;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RenewConfirmationStaffMailable extends Mailable
{
    use Queueable, SerializesModels;

    private $attachment;

    /**
     * Create a new message instance.
     */
    public function __construct($filePath = null)
    {
        $this->attachment = $filePath;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Request to renew account',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.staff.renew-confirmation-staff',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        if($this->attachment != null)
        {
            return [
                Attachment::fromPath($this->attachment)
            ];
        }
        else
        {
            return [];
        }
    }
}
