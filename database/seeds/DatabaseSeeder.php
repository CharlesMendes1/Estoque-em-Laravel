<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use estoque\Categoria;

class DatabaseSeeder extends Seeder {
	//esse arquivo faz os inserts no bando de dados
	//Run the database seeds.

	public function run(){
		Model::unguard();

		$this->call('CategoriaTableSeeder');
	}


}

class CategoriaTableSeeder extends Seeder{
	public function run(){
		Categoria::create(['nome' => 'BRINQUEDO']);
		Categoria::create(['nome' => 'ESPORTES']);
	}
}