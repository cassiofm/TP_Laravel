<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarColDepdnId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funcionarios', function (Blueprint $table) {
           /* $table->bigInteger('dependente_id')->unsigned();
            $table->foreign('dependente_id')->references('id')->on('dependentes');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funcionarios', function (Blueprint $table) {
            /*$table->dropForeign(['dependente_id']);
            $table->dropColumn('dependente_id');
            */
        });
    }
}
