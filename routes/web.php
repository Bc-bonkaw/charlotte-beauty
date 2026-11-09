<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\BookingRequest;
use App\Notifications\AppointmentRequestReceived;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

Route::get('/', function () {
    return view('welcome', ['city' => null]);
})->name('home');

Route::get('/hair-braiding-{city}', function (string $city) {
    return view('welcome', ['city' => $city]);
})->whereIn('city', array_keys(config('salon.locations')))->name('location');

Route::get('/sitemap.xml', function () {
    $urls = [route('home'), ...array_map(fn ($city) => route('location', $city), array_keys(config('salon.locations')))];
    $entries = implode('', array_map(fn ($url) => '<url><loc>'.e($url).'</loc></url>', $urls));

    return response('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'.$entries.'</urlset>')
        ->header('Content-Type', 'application/xml');
});


Route::post('/booking-request', function (Request $request) {
    $validated = $request->validate(['name'=>['required','string','max:100'],'contact'=>['required','string','max:150'],'location'=>['required',Rule::in(array_keys(config('salon.locations')))],'service'=>['required','string','max:150'],'date'=>['required','date','after_or_equal:today'],'notes'=>['nullable','string','max:1000']], ['location.required'=>'Please choose a location.','location.in'=>'Please choose a location.']);
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
