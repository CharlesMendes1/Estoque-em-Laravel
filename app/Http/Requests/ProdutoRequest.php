<?php namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class ProdutoRequest extends Request {

	public function authorize(){
		return true;
	}

	
	public function rules(){
		return [
			'nome' => 'required|min:4',
			'valor'=> 'required|numeric',
			'descricao'=>'required|max:255',
			'quantidade'=>'required|numeric'
		];
	}

	public function messages(){
	  	return [
	     	'required' => 'O campo :attribute não pode estar vazio.',
	  	];
	}

}
