<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('temp_reservations', function (Blueprint $table) {
            $table->uuid();
            $table->string('reservation_data');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('hotel_id')->constrained()->onDelete('cascade');
            $table->date('expires_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temp_reservations');
    }
};
