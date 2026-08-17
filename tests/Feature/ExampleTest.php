<?php

namespace Tests\Feature;

use App\Models\BookingRequest;
use App\Notifications\AppointmentRequestReceived;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_an_appointment_is_saved_and_emailed(): void
    {
        Notification::fake();
        config(['services.salon.notification_email' => 'salon@example.com']);

        $response = $this->post('/booking-request', [
            'name' => 'Test Client',
            'contact' => 'client@example.com',
            'service' => 'Box Braids · Mid Back',
            'date' => now()->addWeek()->toDateString(),
            'notes' => 'Black hair, mid-back length.',
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('booking_requests', ['name' => 'Test Client']);
        Notification::assertSentOnDemand(AppointmentRequestReceived::class);
    }
}
