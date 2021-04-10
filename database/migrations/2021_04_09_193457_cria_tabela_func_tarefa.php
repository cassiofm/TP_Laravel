<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaFuncTarefa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario_tarefas', function (Blueprint $table) {
         $table->bigIncrements('id');
         $table->timestamps();
         $table->bigInteger('funcionario_id')->unsigned();
         $table->bigInteger('tarefa_id')->unsigned();
         $table->foreign('funcionario_id')->references('id')->on('funcionarios');
         $table->foreign('tarefa_id')->references('id')->on('tarefas');
         $table->unique(['funcionario_id','tarefa_id'],'fp_unique');
        
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionario_tarefas'); 
    }
}
