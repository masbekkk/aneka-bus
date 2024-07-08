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
            $table->string('passenger_phone')->nullable();
            $table->string('departure_location')->nullable();
            $table->string('drop_location')->nullable();
            
            $table->string('no_order');
            $table->text('payment_no');
            $table->string('payment_method');
            $table->string('payment_channel');
            $table->integer('fee');
            $table->integer('total');
            $table->integer('status');
            $table->string('status_desc');
            $table->timestamp('expired_time_transaction')->useCurrent();
            $table->timestamp('success_time_transaction')->useCurrent();
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
