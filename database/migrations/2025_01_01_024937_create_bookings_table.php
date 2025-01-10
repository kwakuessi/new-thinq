<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       

        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_code');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('shipping_method_id')->constrained();
            $table->foreignId('address_id')->constrained();
            $table->enum('status', ["pending", "complete", "en_route"]);
            $table->timestamps();
        });

      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
