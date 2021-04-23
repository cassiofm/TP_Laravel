<?php

namespace App\Http\Controllers;

use App\Tarefa;
use App\Projeto;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // Lista tarefas cadastradas
    public function index()
    {
        // busca duas tarefas por vez no BD
        $tarefas = Tarefa::paginate(2);
        // Aciona View, passando a ela coleção das tarefas obtidas no BD   
        return View('tarefa.index')->with('tarefas',$tarefas); 
    }

     // Aciona a view que envia ao usuário o formulário para cadastro de uma nova tarefa
    public function create()
    {
        return View('tarefa.create')->with('cProjetos',Projeto::all());
    }

    // Valida os dados digitados pelo usuário no formulário e, se corretos, cria nova tarefa no BD
    // Dados digitados são obtidos no parâmetro objeto $request 
    public function store(Request $request)
    {
        // Valida os dados em $request
        $this->validate($request,
            [
                'projeto_id' => 'required|exists:projetos,id',
                'descricao' => 'required|max:200',    // nome obrigatório e no máximo 100 caracteres
                
                'dataInicio' => 'required', // endereço obrigatório e no máximo 100 caracteres
                'dataTermino' => 'required', // endereço obrigatório e no máximo 100 caracteres
                
            ],
            // mensagens de erro quando a validação falha.
            [
                'projeto_id.*' => 'Projeto Invalido',
                'descricao.required' => 'Descricao da tarefa é obrigatória',
                'dataInicio.required' => 'Data de inicio obrigatoria',
                'dataTermino.required' => 'Data de termino obrigatoria',
            ]
        );
        // Cria tarefa no BD
        Tarefa::create($request->all()); 
        // Redireciona para view que lista as tarefas cadastradas
        return redirect('/tarefa');
    }

    // Aciona view que apresenta os dados da tarefa conforme $id
    public function show($id)
    {
        return View('tarefa.show')->with('tarefa',Tarefa::find($id));
    }

    // Aciona view que envia ao usuário formulário preenchido com os dados da tarefa conforme $id
    public function edit($id)
    {
        return View('tarefa.edit')->with('tarefa',Tarefa::find($id));   
    }

    // Valida os dados alrerados pelo usuário (edição) e, se ok, atualiza tarefa no BD 
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'projeto_id' => 'required',
                'descricao' => 'required|max:200',
                'dataInicio' => 'required',
                'dataTermino' => 'required'
            ],
            [
                'projeto_id.*' => 'Projeto Invalido',
                'descricao.required' => 'Descricao da tarefa é obrigatória',
                'dataInicio.required' => 'Data de inicio obrigatoria',
                'dataTermino.required' => 'Data de termino obrigatoria',
            ]
        );
        $tarefa = Tarefa::find($id);  // recupera tarefa do BD
        $tarefa->update($request->all());  // atualiza (grava) novos dados da tarefa
        return redirect('/tarefa');
    }

    // Exclui tarefa conforme $id
    public function destroy($id)
    {
        Tarefa::destroy($id);
        return redirect('/tarefa');
    }
}