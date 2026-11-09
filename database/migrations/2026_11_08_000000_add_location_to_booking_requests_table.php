<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('booking_requests', function (Blueprint $table) {
            $table->string('location', 30)->nullable()->after('contact');
        });
    }

    public function down(): void
    {
        Schema::table('booking_requests', function (Blueprint $table) {
            $table->dropColumn('location');
        });
    }
};
