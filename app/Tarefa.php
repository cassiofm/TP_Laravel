<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    //
    protected $fillable = ['projeto_id','descricao','dataInicio', 'dataTermino'];


 public function obterProjeto() {
    	return $this->belongsTo('App\Projeto','projeto_id')->first();
    }

 //public function obterFuncionarios() {
 //   	return $this->belongsToMany('App\Funcionario')->get();
   
}
