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
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->nullable();
            $table->string('address', 800)->nullable();
            $table->tinyInteger('bedrooms')->nullable();
            $table->tinyInteger('bathrooms')->nullable();
            $table->tinyInteger('cleanrooms')->nullable();
            $table->tinyInteger('parkings')->nullable();
            $table->json('moodsBuy')->nullable();           
            $table->double('price', 9, 2)->nullable();           
            $table->double('discount', 9, 2)->nullable();
            $table->tinyInteger('level')->nullable();
            $table->tinyInteger('floors')->nullable(); 
            $table->enum('type', ['house', 'appartment','terrain','mansion','ranch','other'])->default('house')->nullable();
            $table->string('appliances', 800)->nullable();
            $table->json('appliancesJson')->nullable();
            $table->tinyInteger('sizeLength')->nullable();
            $table->tinyInteger('sizeWidth')->nullable();
            $table->enum('typeMode',['venta','renta'])->nullable();
            $table->enum('status', ['vendida','rentada','apartada','cancelada'])->default('disponible')->nullable();
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
        Schema::dropIfExists('properties');
    }
};
