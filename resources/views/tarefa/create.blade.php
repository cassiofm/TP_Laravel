@extends('master')
@section('titulo','Criar Tarefa')
@section('corpo')
	<div class="container">
		<h3>Nova Tarefa</h3>
		<div class="row">
			<div class="col-sm-6">
				<form action="/tarefa" method="post">
					@csrf  <!-- token de segurança -->
					
					<div>
						<label for="projeto_id">Projeto</label>
						<select name="projeto_id" id="projeto_id">
							@foreach($cProjetos as $p)
								<option value="{{$p->id}}">{{$p->nome}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="descricao">Descrição</label>
						<input type="text" name="descricao" id="descricao" class="form-control" value="{{old('descricao')}}"/>
						@if($errors->has('descricao'))
						<p class="text-danger">{{$errors->first('descricao')}}</p>
						@endif
					</div>
					<div>
						<label for="dataInicio">Data de Início</label>
						<input type="text" name="dataInicio" id="dataInicio" class="form-control" value="{{old('dataInicio')}}"/>
						@if($errors->has('dataInicio'))
						<p class="text-danger">{{$errors->first('dataInicio')}}</p>
						@endif
					</div>
					
					<div>
						<label for="dataTermino">Data de Término</label>
						<input type="text" name="dataTermino" id="dataTermino" class="form-control" value="{{old('dataTermino')}}"/>
						@if($errors->has('dataTermino'))
						<p class="text-danger">{{$errors->first('dataTermino')}}</p>
						@endif
					</div>
		    		<input type="submit" value="Criar" class="btn btn-primary btn-sm"/>
		    		<a href="/funcionario" class="btn btn-primary btn-sm">Voltar</a>
				</form>
			</div>
		</div>
	</div>
@endsection