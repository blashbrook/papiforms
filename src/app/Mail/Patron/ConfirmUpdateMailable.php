<?php

    namespace Blashbrook\PAPIForms\App\Mail\Patron;

    use Illuminate\Bus\Queueable;
    use Illuminate\Mail\Mailable;
    use Illuminate\Mail\Mailables\{Attachment, Content, Envelope};
    use Illuminate\Queue\SerializesModels;

    class ConfirmUpdateMailable extends Mailable
    {
        use Queueable, SerializesModels;

        protected $token;
        /**
         * Create a new message instance.
         */
        public function __construct($token)
        {
            $this->token = $token;
        }

        /**
         * Get the message envelope.
         */
        public function envelope(): Envelope
        {
            return new Envelope(
                subject: 'Confirm Update Mail',
            );
        }

        /**
         * Get the message content definition.
         */
        public function content(): Content
        {
            return new Content(
                view: 'papiforms::mail.patron.confirm-update',
                with: ['token' => $this->token]
            );
        }

        /**
         * Get the attachments for the message.
         *
         * @return array<int, Attachment>
         */
        public function attachments(): array
        {
            return [];
        }
    }
