<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\BookingRequest;
use App\Notifications\AppointmentRequestReceived;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/booking-request', function (Request $request) {
    $validated = $request->validate(['name'=>['required','string','max:100'],'contact'=>['required','string','max:150'],'service'=>['required','string','max:150'],'date'=>['required','date','after_or_equal:today'],'notes'=>['nullable','string','max:1000']]);
    $booking = BookingRequest::create([
        ...$validated,
        'preferred_date' => $validated['date'],
    ]);

    $recipient = config('services.salon.notification_email');
    if ($recipient) {
        try {
            Notification::route('mail', $recipient)->notify(new AppointmentRequestReceived($booking));
            $booking->update(['notification_sent_at' => now()]);
        } catch (Throwable $exception) {
            Log::error('Appointment notification email failed.', ['booking_id' => $booking->id, 'error' => $exception->getMessage()]);
        }
    }

    return back()->with('success', 'Thank you! Your appointment request has been received.');
})->middleware('throttle:5,1')->name('booking.store');
