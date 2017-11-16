<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

	public function produtos(){
		//has many = tem muitos
		// uma categoria tem muitos produtos
    	return $this->hasMany('estoque\Produto');
	}
	

}
