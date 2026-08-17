<?php

namespace App\Notifications;

use App\Models\BookingRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AppointmentRequestReceived extends Notification
{
    use Queueable;

    public function __construct(public BookingRequest $booking)
    {
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New appointment request from '.$this->booking->name)
            ->greeting('New Charlotte Beauty Braids appointment request')
            ->line('Client: '.$this->booking->name)
            ->line('Phone or email: '.$this->booking->contact)
            ->line('Requested style: '.$this->booking->service)
            ->line('Preferred date: '.$this->booking->preferred_date->format('F j, Y'))
            ->line('Notes: '.($this->booking->notes ?: 'None provided'))
            ->line('Please contact the client directly to confirm availability and deposit details.');
    }
}
