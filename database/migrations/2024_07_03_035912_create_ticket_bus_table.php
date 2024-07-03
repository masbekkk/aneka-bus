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
        Schema::create('ticket_bus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('route_source')->unsigned();
            $table->bigInteger('route_destination')->unsigned();
            $table->string('type_bus');
            $table->time('departure_time');
            $table->time('arrive_time');
            $table->string('boarding_location');
            $table->string('drop_location');
            $table->integer('price');
            $table->timestamps();
            $table->foreign('route_source')->references('id')->on('bus_routes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('route_destination')->references('id')->on('bus_routes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_bus');
    }
};
