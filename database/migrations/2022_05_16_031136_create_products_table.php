<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id');
            $table->foreign('type_id')->references('id')->on('type_products')->onDelete('cascade');
            $table->string('product_name');   
            $table->text('description');   
            $table->text('image');   
            $table->float('price');   
            $table->integer('is_featured');   
            $table->datetime('create_date');
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
        Schema::dropIfExists('products');
    }
}
