<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('title' , 100);
            $table->text('description')->nullable();
            $table->decimal('price');
            $table->enum('size' , array('XS', 'S', 'M', 'L', 'XL'));
            $table->string('url_image');
            $table->enum('status' , array('publié', 'brouillon'));
            $table->enum('code' , array('solde', 'new'));
            $table->string('reference');
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
