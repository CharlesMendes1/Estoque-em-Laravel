	@extends('layout/principal')
	@section('conteudo') 

	@if(empty($produtos))
		<div>
			<p>Você não tem nenhum produto cadastrado.</p>
		</div>
	@else

	<h1>Listagem de produtos com Laravel</h1>
	<table class="table">
		@foreach($produtos as $p)
			<?php // tr linha td coluna?>
			<tr class="{{$p->quantidade <= 1 ?'danger' : ''}}">
				<td>{{$p->nome}}</td>
				<td>{{$p->valor}}</td>
				<td>{{$p->descricao}}</td>
				<td>{{$p->categoria->nome }}</td>
				<td>{{$p->tamanho}}</td>
				<td>{{$p->quantidade}}</td>
				<td> 
				    <a href="/produtos/mostra/{{$p->id}}">
						<span class="glyphicon glyphicon-search"></span>
					</a>
				</td>

				<td> 
				    <a href="/produtos/altera/{{$p->id}}">
						<span class="glyphicon glyphicon-pencil"></span>
					</a>
				</td>

				<td> 
				    <a href="/produtos/remove/{{$p->id}}">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			<tr>
		@endforeach
	</table>
	@endif
	@if(old('nome'))
		<div class="alert alert-success">
			O produto {{old('nome')}} foi adicionado com sucesso
		</div>
	@endif


	<h4>
	  	<span class="label label-danger pull-right">
	    Um ou menos itens no estoque
	  	</span>
 	</h4>
	@stop
