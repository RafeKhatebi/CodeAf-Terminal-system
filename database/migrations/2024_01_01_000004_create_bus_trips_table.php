<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bus_trips', function (Blueprint $table) {
            $table->id();
            $table->string('trip_name');
            $table->date('date');
            $table->integer('total_passengers');
            $table->decimal('total_fare', 10, 2);
            $table->decimal('fuel_cost', 10, 2);
            $table->decimal('assistant_cost', 10, 2);
            $table->decimal('other_expenses', 10, 2);
            $table->decimal('net_profit', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bus_trips');
    }
}; 