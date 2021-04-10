@extends('master')
@section('titulo','Tarefa')
@section('corpo')
	<div class="container">
		<h3>Tarefa</h3>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					<dt>Projeto</dt>
					<dd>{{$tarefa->projeto_id}}</dd>
					<dt>Descrição</dt>
					<dd>{{$tarefa->descricao}}</dd>
					<dt>data de inicio</dt>
					<dd>{{$tarefa->dataInicio}}</dd>
					<dt>data de término</dt>
					<dd>{{$tarefa->dataTermino}}</dd>
				</dl>
				<form action="/tarefa/{{$tarefa->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
					@csrf
					@method('DELETE')
					<input type="submit" value="Excluir" class="btn btn-primary btn-sm">
					<a href="/tarefa" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection