<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('responsável');
            $table->string('cpf');
            $table->string('rg');
            $table->string('telefone');
            $table->string('celular');
            $table->string('nascimento');
            $table->string('email');
            $table->string('data_batismo');
            $table->string('endereço');
            $table->string('número');
            $table->string('bairro');
            $table->string('cep');
            $table->longText('observação');
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
        Schema::drop('membros');
    }
}
