<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DependenteFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependente_funcionario', function(Blueprint $table){
            $table->bigincrements('id');
            $table->timestamps();
            $table->biginteger('funcionario_id')->unsigned();
            $table->biginteger('dependente_id')->unsigned();
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->foreign('dependente_id')->references('id')->on('dependentes');            
            $table->unique(['funcionario_id','dependente_id'],'df_unique');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependente_funcionario');
    }
}
