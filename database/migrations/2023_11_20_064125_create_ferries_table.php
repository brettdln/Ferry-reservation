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
        Schema::create('ferries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('destination_to_id');
            $table->foreign('destination_to_id')->references('id')->on('destinations');
            $table->unsignedBigInteger('destination_from_id');
            $table->foreign('destination_from_id')->references('id')->on('destinations');
            $table->enum('ferry_type', ['Regular', 'Deluxe', 'Super Deluxe']);
            $table->string('departure_time');
            $table->string('departure_date'); 
            $table->string('return_time');
            $table->string('return_date');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ferries');
    }
};
