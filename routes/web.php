<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/booking-request', function (Request $request) {
    $booking = $request->validate(['name'=>['required','string','max:100'],'contact'=>['required','string','max:150'],'service'=>['required','string','max:150'],'date'=>['required','date','after_or_equal:today'],'notes'=>['nullable','string','max:1000']]);
    $booking['received_at'] = now()->toIso8601String();
    $path = 'booking-requests.json';
    $bookings = Storage::disk('local')->exists($path) ? json_decode(Storage::disk('local')->get($path), true) ?? [] : [];
    $bookings[] = $booking;
    Storage::disk('local')->put($path, json_encode($bookings, JSON_PRETTY_PRINT));
    return back()->with('success', 'Thank you! Your appointment request has been received.');
})->name('booking.store');
