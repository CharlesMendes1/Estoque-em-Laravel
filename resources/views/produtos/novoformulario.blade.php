
@extends('produtos.formulario')
@section ('form')
		<div class="form-group">
	 		<label>Nome</label>
	 		<input class="form-control" type="text" name="nome" value="{{old('nome')}}" />
 		</div>
		<div class="form-group">
	 		<label>Valor</label>
	 		<input class="form-control" type="number" name="valor" value="{{old('valor')}}"/>
		</div>
		<div class="form-group">
	 		<label>Descrição</label>
	 		<textarea class="form-control" name="descricao">{{old('descricao')}}</textarea>
		</div>
		<div class="form-group">
	 		<label>Tamanho</label>
	 		<input class="form-control" type="text" name="tamanho" value="{{old('tamanho')}}"/>
		</div>
		<div class="form-group">
	 		<label>Quantidade</label>
			<input class="form-control" type="number" name="quantidade" value="{{old('quantidade')}}"/>
		</div>

		<div class="form-group">
   			 <label>Categoria</label>
   			 <select name="categoria_id" class="form-control">
        		@foreach($categorias as $c)
        			<option value="{{$c->id}}">{{$c->nome}}</option>
        		@endforeach
    		</select>    
		</div>
@stop