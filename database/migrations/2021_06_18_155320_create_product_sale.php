<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSale extends Migration
{
    
    public function up()
    {
        Schema::create('product_sale', function (Blueprint $table) {
            $table->id();

            $table->integer('quantity');
            $table->decimal('ammount', 10,2);
            $table->enum('status', ['paid','pending', 'failled']);

            $table->foreignId('sale_id')->constrained();
            $table->foreignId('product_id')->constrained();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('product_sale');
    }
}
