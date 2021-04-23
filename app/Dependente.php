<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependente extends Model
{
    protected $fillable = ['nome','parentesco_id','funcionario_id'];

    public function obterFuncionarios() {
    	return $this->belongsToMany('App\Funcionario')->get();
    }
}
