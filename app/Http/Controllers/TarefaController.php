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
     // Lista funcionários cadastrados
    public function index()
    {
        // busca duas tarefas por vez no BD
        $tarefas = Tarefa::paginate(2);
        // Aciona View, passando a ela coleção dos funcionários obtidos no BD   
        return View('tarefa.index')->with('tarefas',$tarefas); 
    }

     // Aciona a view que envia ao usuário o formulário para cadastro ne novo funcionário
    public function create()
    {
        return View('tarefa.create')->with('cProjetos',Projeto::all());
    }

    // Valida os dados digitados pelo usuário no formulário e, se corretos, cria novo funcionário no BD
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
        // Cria funcionário no BD
        Tarefa::create($request->all()); // ['nome'=>'Ana Lucia','endereco'=>'rua K,33', 'departamento_id'=>2]
        // Redireciona para view que lista os funcionários cadastrados
        return redirect('/tarefa');
    }

    // Aciona view que apresenta os dados do funcionário conforme $id
    public function show($id)
    {
        return View('tarefa.show')->with('tarefa',Tarefa::find($id));
    }

    // Aciona view que envia ao usuário formulário preenchido com os dados do funcionário conforme $id
    public function edit($id)
    {
        return View('tarefa.edit')->with('tarefa',Tarefa::find($id));   
    }

    // Valida os dados alrerados pelo usuário (edição) e, se ok, atualiza funcionário no BD 
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
        $tarefa = Tarefa::find($id);  // recupera funcionário do BD
        $tarefa->update($request->all());  // atualiza (grava) novos dados do funcionário
        return redirect('/tarefa');
    }

    // Exclui funcionário conforme $id
    public function destroy($id)
    {
        Tarefa::destroy($id);
        return redirect('/tarefa');
    }
}