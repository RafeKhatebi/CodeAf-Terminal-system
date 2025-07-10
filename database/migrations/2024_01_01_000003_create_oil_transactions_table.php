<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('oil_transactions', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['purchase', 'sale']);
            $table->decimal('quantity_liters', 10, 2);
            $table->decimal('price_per_liter', 10, 2);
            $table->decimal('total_amount', 10, 2);
            $table->string('party_name');
            $table->date('date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('oil_transactions');
    }
}; 