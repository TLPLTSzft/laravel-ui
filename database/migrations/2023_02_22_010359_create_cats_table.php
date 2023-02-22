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
        Schema::create('cats', function (Blueprint $table) {
            $color = ['black', 'grey', 'brown', 'white', 'black & white', 'spotted', 'ginger'];

            $table->id();
            $table->string('name', 50);
            $table->integer('age');
            $table->boolean('tom-cat');
            $table->enum('color', $color);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cats');
    }
};
