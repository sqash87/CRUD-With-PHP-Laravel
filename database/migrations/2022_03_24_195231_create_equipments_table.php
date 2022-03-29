<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->string('device_name')->nullable();
            $table->integer('cpu')->nullable();
            $table->integer('ram')->nullable();
            $table->integer('storage')->nullable();
            $table->string('price', $precision = 8, $scale = 2)->nullable();
            $table->integer('invoice')->nullable();
            $table->DateTime('purchaseDate')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipments');
    }
};
