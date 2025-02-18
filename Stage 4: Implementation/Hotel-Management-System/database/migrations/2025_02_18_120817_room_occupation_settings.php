<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomOccupationSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('room_occupation_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_type')->constrained('rooms')->onDelete('cascade');
            $table->integer('max_occupancy');
            $table->integer('min_occupancy');
            $table->decimal('price_per_night', 10, 2);
            $table->decimal('extra_guest_charge', 10, 2)->nullable();
            $table->time('check_in_time');
            $table->time('check_out_time');
            $table->boolean('allowed_smoking')->default(false);
            $table->boolean('pet_friendly')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('room_occupation_settings');
    }
};