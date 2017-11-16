
@extends('produtos.formulario')
@section ('form')
		<div class="form-group">
	 		<label>Nome</label>
	 		<input class="form-control" type="text" name="nome" value="{{$produto->nome}}" />
 		</div>
		<div class="form-group">
	 		<label>Valor</label>
	 		<input class="form-control" type="number" name="valor" value="{{$produto->valor}}"/>
		</div>
		<div class="form-group">
	 		<label>Descrição</label>
	 		<textarea class="form-control" name="descricao">{{$produto->descricao}}</textarea>
		</div>
		<div class="form-group">
	 		<label>Tamanho</label>
	 		<input class="form-control" type="text" name="tamanho" value="{{$produto->tamanho}}"/>
		</div>
		<div class="form-group">
	 		<label>Quantidade</label>
			<input class="form-control" type="number" name="quantidade" value="{{$produto->quantidade}}"/>
		</div>
@stop