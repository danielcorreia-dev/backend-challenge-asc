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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lessor_id');
            $table->string('cep');
            $table->string('property_name');
            $table->text('description');
            $table->text('features');
            $table->decimal('daily_rate', 8, 2);
            $table->integer('max_guests');
            $table->inteter('min_rental_days');
            $table->enum('status', ['processing', 'active', 'cancelled', 'ended']);
            $table->timestamps();

            $table->foreign('lessor_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
