<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

	protected $table = 'produtos'; //indica o nome da tabela 
	public $timestamps = false; // desabilita campos update_at e create_at da tabela do BD;
	protected $fillable = array('nome','descricao','valor','quantidade','tamanho','categoria_id');
	protected $guard = ['id'];


	public function categoria(){
		//belongs to = pertence a 
		// seria um produto pertence uma categoria
    	return $this->belongsTo('estoque\Categoria');
	}
}
