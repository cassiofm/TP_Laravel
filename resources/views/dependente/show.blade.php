@extends('master')
@section('titulo','Dependente')
@section('corpo')

	<div class="container">
		<h2>{{'Estes são os dependentes do funcionário(a): '. $funcionario->nome}}</h2>
		<div class="row">
			<div class="col-sm-6">
				<dl>
					@foreach($funcionario->hasMany('App\Dependente','funcionario_id','id')->get() as $dp) 
	
<br/>
	<h3>{{ $dp->nome.' ('.$dp->belongsTo('App\Parentesco','parentesco_id','id')->first()->descricao.')' }}</h3>
@endforeach
				</dl>
				<a href="/funcionario" class="btn btn-primary btn-sm">Voltar</a>
			</div>
		</div>
	</div>
@endsection