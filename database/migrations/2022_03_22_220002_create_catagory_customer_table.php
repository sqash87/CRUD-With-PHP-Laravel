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
        Schema::create('catagory_customer', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('catagory_id')
                  ->constrained('catagories')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            
            $table->foreignId('customer_id')
                  ->constrained('catagories')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            
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
        Schema::dropIfExists('catagory_customer');
    }
};
