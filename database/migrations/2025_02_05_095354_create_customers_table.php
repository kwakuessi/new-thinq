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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('profile_image')->nullable();
            $table->date('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('fax_number')->nullable();
            $table->json('product_industry')->nullable();
            $table->string('business_number')->nullable();
            $table->unsignedBigInteger('industry_id')->constrained('industries')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
