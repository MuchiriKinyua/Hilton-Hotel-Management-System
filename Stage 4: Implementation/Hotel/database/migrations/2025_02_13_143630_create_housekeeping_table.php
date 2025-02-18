<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('housekeeping', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->enum('status', ['clean', 'dirty', 'occupied', 'out_of_service'])->default('dirty');
            $table->unsignedBigInteger('assigned_staff_id')->nullable();
            $table->dateTime('cleaning_date')->nullable();
            $table->dateTime('completion_time')->nullable();
            $table->text('supplies_used')->nullable();
            $table->enum('inspection_status', ['pending', 'passed', 'failed'])->default('pending');
            $table->text('notes')->nullable();
            $table->timestamps();
    
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->foreign('assigned_staff_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('housekeeping', function (Blueprint $table) {
            //
        });
    }
};
