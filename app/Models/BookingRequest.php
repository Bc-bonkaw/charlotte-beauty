<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
    protected $fillable = [
        'name',
        'contact',
        'service',
        'preferred_date',
        'notes',
        'notification_sent_at',
    ];

    protected function casts(): array
    {
        return [
            'preferred_date' => 'date',
            'notification_sent_at' => 'datetime',
        ];
    }
}
