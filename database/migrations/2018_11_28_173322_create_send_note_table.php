<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_note', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recv_id',100);
            $table->string('send_id',100);
            $table->string('title',100);
            $table->text('content');
            $table->integer('recv_chk');
            $table->string('file',100)->nullable();
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
        Schema::dropIfExists('send_note');
    }
}
