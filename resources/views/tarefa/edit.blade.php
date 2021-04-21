@extends('master')
@section('titulo','Editar Tarefa')
@section('corpo')
	<div class="container">
		<h3>Editar Tarefa</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="/tarefa/{{$tarefa->id}}" method="post">
					@csrf  <!-- token de segurança -->
					@method('PUT') <!-- para acionar a função update do controller -->
					
					<div class="form-group">
						<label for="projeto_id">Projeto ID</label>
						<input type="text" name="projeto_id" id="projeto_id" class="form-control" value="{{empty(old('projeto_id')) ? $tarefa->projeto_id : old('projeto_id')}}"/>
						@if($errors->has('projeto_id'))
						<p class="text-danger">{{$errors->first('projeto_id')}}</p>
						@endif	
					</div>

					<div class="form-group">
						<label for="descricao">Descrição</label>
						<input type="text" name="descricao" id="descricao" class="form-control" value="{{empty(old('descricao')) ? $tarefa->descricao : old('descricao')}}"/>
						@if($errors->has('descricao'))
						<p class="text-danger">{{$errors->first('descricao')}}</p>
						@endif	
					</div>
					<div>
						<label for="endereco">Data Inicio</label>
						<input type="text" name="dataInicio" id="dataInicio" class="form-control" value="{{empty(old('dataInicio')) ? $tarefa->dataInicio : old('dataInicio')}}"/>
						@if($errors->has('dataInicio'))
						<p class="text-danger">{{$errors->first('dataInicio')}}</p>
						@endif
					</div>

					<div>
						<label for="endereco">Data Termino</label>
						<input type="text" name="dataTermino" id="dataTermino" class="form-control" value="{{empty(old('dataTermino')) ? $tarefa->dataTermino : old('dataTermino')}}"/>
						@if($errors->has('dataTermino'))
						<p class="text-danger">{{$errors->first('dataTermino')}}</p>
						@endif
					</div>
		    		<input type="submit" value="Alterar" class="btn btn-primary btn-sm"/>
		    		<a href="/tarefa" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection