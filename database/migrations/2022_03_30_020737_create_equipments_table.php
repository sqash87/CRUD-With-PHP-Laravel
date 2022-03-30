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
            $table->foreignId('customer_id')->nullable()->constrained('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('manufacturer_id')->nullable()->constrained('manufacturers')->onUpdate('cascade')->onDelete('cascade');
            $table->string('invoice')->nullable();
            $table->string('equipment_name')->nullable();
            $table->DateTime('purchaseDate')->nullable();
            $table->string('cpu')->nullable();
            $table->string('price', $precision = 8, $scale = 2)->nullable();
            $table->string('ram')->nullable();
            $table->string('storage')->nullable();
            

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
