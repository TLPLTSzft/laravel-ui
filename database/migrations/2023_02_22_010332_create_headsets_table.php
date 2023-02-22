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
        // $table->string('connection', ['Jack', 'USB', 'Wireless'])->default('Jack');

        Schema::create('headsets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('connection', 50);
            $table->string('channel', 10);
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headsets');
    }
};
