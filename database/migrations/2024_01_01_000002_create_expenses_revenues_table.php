<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('expenses_revenues', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['expense', 'revenue']);
            $table->decimal('amount', 10, 2);
            $table->string('description');
            $table->date('date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('expenses_revenues');
    }
}; 