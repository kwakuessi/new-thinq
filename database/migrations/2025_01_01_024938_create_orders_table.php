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
        Schema::disableForeignKeyConstraints();

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code');
            $table->foreignId('customer_id')->constrained()->nullOnDelete();
            $table->foreignId('address_id')->constrained()->nullOnDelete();
            $table->foreignId('shipping_method_id')->constrained()->nullOnDelete();
            $table->enum('status', ["pending", "complete", "en_route"]);
            $table->integer('total_price')->nullable();
            $table->enum('order_type', ["shipment", "customer_order"]);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
