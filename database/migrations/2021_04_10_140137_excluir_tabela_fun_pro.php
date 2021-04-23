<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExcluirTabelaFunPro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         // Como a intenção é excluir a tabela do relacionamento, ela faz o contrário da migração cria tabela
        Schema::dropIfExists('funcionario_projeto'); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funcionario_projeto', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('funcionario_id')->unsigned();
            $table->bigInteger('projeto_id')->unsigned();
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->foreign('projeto_id')->references('id')->on('departamentos');
            $table->unique(['funcionario_id','projeto_id'],'fp_unique');
            //
        });
    }
}
