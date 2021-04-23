<?php

namespace App\Http\Controllers;

use App\Dependente;
use Illuminate\Http\Request;
use App\Parentesco;
use App\Funcionario;

class DependenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return View('dependente.show')->with('dependente',$dependentes); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dependente  $dependente
     * @return \Illuminate\Http\Response
     */
    public function show($funcionario)
    {
        //return View('funcionario.show')->with('funcionario',Funcionario::find($id));
        return View('dependente.show')->with('funcionario',Funcionario::find($funcionario));
        //->with('dependente',Dependente::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dependente  $dependente
     * @return \Illuminate\Http\Response
     */
    public function edit(Dependente $dependente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dependente  $dependente
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, Dependente $dependente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dependente  $dependente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dependente $dependente)
    {
        //
    }
}
