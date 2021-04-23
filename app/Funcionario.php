<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['nome','endereco','departamento_id','dependente'];

    public function obterDepartamento() {
    	return $this->belongsTo('App\Departamento','departamento_id')->first();
    }

    public function obterProjetos() {
    	return $this->belongsToMany('App\Projeto')->get();
    }

    public function obterDependentes() {
    	return $this->belongsToMany('App\Dependente')->get();
    }

}

 
/*

  $funcionarios = Funcionario::all();

  Funcionario::create(['nome'=>'joao','endereco'=>'rua x 44']);

*/