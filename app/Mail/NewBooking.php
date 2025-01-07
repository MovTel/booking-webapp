<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class NewBooking extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $contact;
    public $email;
    public $unit;
    public $checkin;
    public $checkout;
    public $guests;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data->user->first_name . " " . $data->user->last_name;
        $this->contact = $data->user->contact_no;
        $this->email = $data->user->email;
        $this->unit = $data->unit->property_name;
        $this->checkin = $data->checkout_formatted;
        $this->checkout = $data->checkout_formatted;
        $this->guests = $data->guests;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('movietelletechnology@gmail.com', 'Movietelle'),
            subject: 'New Booking | Movietelle.com',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'mail.new_booking',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
