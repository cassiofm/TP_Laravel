<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IncluirChaveEstrangeiraParentesco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dependentes', function (Blueprint $table) {
           //inclusão de chave estrangeira, a coluna já existe 
           // $table->bigInteger('parentesco_id')->unsigned();
          //  $table->foreign('parentesco_id')->references('id')->on('parentescos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dependentes', function (Blueprint $table) {
            // Operação reversa da criação de chave estrangeira
            //$table->dropForeign(['parentesco_id']);
           // $table->dropColumn('parentesco_id');
        });
    }
}
