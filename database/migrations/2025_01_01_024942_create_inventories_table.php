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

        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('unit');
            $table->string('slug');
            $table->string('featured_image')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('quantity')->nullable();
            $table->decimal('price')->nullable();
            $table->enum('type', ["physical", "digital"])->nullable();
            $table->enum('weight_unit', ["kg", "g"])->nullable();
            $table->decimal('height_value')->nullable();
            $table->enum('height_unit', ["cm", "m"])->nullable();
            $table->decimal('width_value')->nullable();
            $table->enum('width_unit', ["cm", "m"])->nullable();
            $table->decimal('depth_value')->nullable();
            $table->enum('depth_unit', ["cm", "m"])->nullable();
            $table->decimal('volume_value')->nullable();
            $table->string('volume_unit')->nullable();
            $table->foreignId('sub_category_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
