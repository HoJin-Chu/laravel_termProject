<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowboards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->string('writer',100);
            $table->text('content');
            $table->integer('hits')->default(0);
            $table->integer('likes')->default(0);
            $table->string('imgPath',200);
            $table->string('BoardType');
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
        Schema::dropIfExists('boards');
    }
}
