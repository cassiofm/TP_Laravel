@extends('master')
@section('titulo','Lista de Tarefas')
@section('corpo')
<a href="/tarefa/create" class="btn btn-primary btn-sm">Novo</a>
<table class="table table-striped">
<tr>
	<th>Projeto_id</th>
	<th>Descricao</th>
	<th>Data de Inicio</th>
	<th>Data de Termino</th>
</tr>
<!-- Loop pela coleção de tarefas -->
@foreach($tarefas as $f)
<tr>
	<td>{{ $f->belongsTo('App\Projeto','projeto_id','id')->first()->nome }}</td>
	<td>{{ $f->descricao }}</td>
	<td>{{ $f->dataInicio }}</td>
	<td>{{ $f->dataTermino }}</td>
	
	
	<td>
		<a href="/tarefa/{{$f->id}}" class="btn btn-primary btn-sm">Detalhe</a>
		<a href="/tarefa/{{$f->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
	</td>
</tr> 
@endforeach
</table>
<!-- Botões de paginação -->
{{ $tarefas->links() }}
@endsection