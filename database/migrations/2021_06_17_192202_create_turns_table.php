<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnsTable extends Migration
{
   
    public function up()
    {
        Schema::create('turns', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->enum('status',['ausente', 'presente'])->default('ausente');

            $table->foreignId('user_id')->constrained();

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
        Schema::dropIfExists('turns');
    }
}
