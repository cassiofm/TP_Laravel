<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IncluirChaveEstrProjeto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tarefas', function (Blueprint $table) {
            //Criando campo e chave estrangeira 
           // $table->bigInteger('projeto_id')->unsigned();
           // $table->foreign('projeto_id')->references('id')->on('projetos');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tarefas', function (Blueprint $table) {
            //
           // $table->dropForeign(['projeto_id']);
            //$table->dropColumn('projeto_id');
       
        });
    }
}
