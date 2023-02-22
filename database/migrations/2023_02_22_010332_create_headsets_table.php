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

        Schema::create('headsets', function (Blueprint $table) {
            $connection = ['Jack', 'USB', 'Wireless', 'Jack / USB', 'Jack / Wireless', 'USB / Wireless', 'Jack / USB / Wireless'];

            $table->id();
            $table->string('brand', 50);
            $table->enum('connection', $connection);
            $table->integer('priceUSD');
            $table->date('making');
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
