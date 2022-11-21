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
        Schema::create('product_skus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('product_id');
            $table->foreignId('size_id');
            $table->foreignId('color_id');
            $table->foreignId('product_image_id');
            // $table->string('sku');
            // $table->integer('stock');
            // $table->float('price');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_skus');
    }
};
