<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevolucoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devolucoes', function (Blueprint $table) {
            $table->increments('id');
            $table->double('valor');
            $table->string('tipo');
            $table->string('referência_mês');
            $table->string('data');
            $table->timestamps();

            $table->integer('membro_id')->unsigned();

            $table->foreign('membro_id')->references('id')->on('membros')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('devolucoes');
    }
}
