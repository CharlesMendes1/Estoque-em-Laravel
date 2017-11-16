@extends('layout.principal')

@section('conteudo')	
	<h2>Novo Produto</h2>

	@if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>
					{{$error}}
				</li>
			@endforeach
		</ul>
	</div>
	@endif
	
 	<form action="/produtos/adiciona" method="post">
 		<input  type="hidden" name="_token" value="{{ csrf_token() }}" />
 		@yield('form')
		<button type="submit" class="btn btn-primary"> Adicionar</button>	
 	</form>
@stop