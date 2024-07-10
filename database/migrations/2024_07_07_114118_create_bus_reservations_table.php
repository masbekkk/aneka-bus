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
        Schema::create('bus_reservations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ticket_bus_id')->unsigned();
            $table->string('passenger_name');
            $table->string('passenger_gender')->nullable();
            $table->string('passenger_email')->nullable();
            $table->string('passenger_phone')->nullable();
            $table->string('departure_location')->nullable();
            $table->string('drop_location')->nullable();
            
            $table->string('no_order')->nullable();
            $table->string('type')->nullable();
            $table->uuid('uuid')->nullable();
            $table->text('payment_no')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_channel')->nullable();
            $table->integer('fee')->nullable();
            $table->integer('total')->nullable();
            $table->integer('status')->nullable();
            $table->string('status_desc')->nullable();
            $table->timestamp('expired_time_transaction')->useCurrent();
            $table->timestamp('success_time_transaction')->useCurrent();
            $table->foreign('ticket_bus_id')->references('id')->on('ticket_bus')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_reservations');
    }
};
