<?php 
namespace estoque\Http\Controllers;
//era para ser APP mas eu alterei o nome do para estoque
//
use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;
use estoque\Categoria;
use estoque\Http\Requests\ProdutoRequest;
class ProdutoController extends Controller{
	public function __construct(){
	    $this->middleware('auth', ['only' => ['novo','altera', 'remove']]);
	}
	public function lista(){

        //$produtos = DB::select('select * from produtos');
        $produtos = Produto::all(); //utilizando classe Produto que importa model do Framework eloquent

		return view('produtos.listagem')->with('produtos',$produtos);
	}

	public function mostra($id){
		// pega id pelo parâmetro - public function mostra($id)
		//$id = Request::input('id'); //pega id pela url
		//$id = Request::route('id'); //pega id pela rota

		//$resposta = DB::select('select * from produtos where id = ?', [$id]); //vinha como vetor
		$resposta = Produto::find($id); //é tipo o select id e vem como obj
		if(empty($resposta)) {
   			 return "Esse produto não existe";
 		}
  		return view('produtos.detalhes')->with('p', $resposta);
	}

	public function novo(){
		//$produto = new Produto();
		return view('produtos.novoformulario')->with('categorias',Categoria::all());
	}

	public function altera($id){
		$produto = Produto::find($id);
		//return redirect('produtos/novo')->with('produto',$produto);
		//return redirect()->action('ProdutoController@novo')->with('produto',$produto);
		return view('produtos.altera_produto_form')->with('produto',$produto);
	}

	public function adiciona(ProdutoRequest $request){
		//pega dados
		/*
			$nome = Request::input('nome');
			$valor = Request::input('valor');
			$descricao = Request::input('descricao');
			$quantidade = Request::input('quantidade');
		*/
			/*
			$params = Request::all();
			$produto = new Produto($params);
			$produto->save();
			*/
			//Produto::create(Request::all()); // ::factory method::
			Produto::create($request->all()); // ::factory method::
		//insere no bd
			
			//DB::insert('insert into produtos(nome,valor,descricao,quantidade) values (?,?,?,?)',array($nome,$valor,$descricao,$quantidade));

		//mostra mensagem
		//return view('produtos.listagem')->with('nome',$nome);

		//redirect redireciona para uma rota
		//withInput passa todas variaveis para rota 
		//Request::only('nome') pega atributo especifico
		return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
	}

	public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();
		
		return redirect()
        ->action('ProdutoController@lista');

	}
	public function listaJson(){
		//$produtos = DB::select('select * from produtos');
		$produtos = Produto::all();
		return response()->json($produtos);
	}



}

 ?>