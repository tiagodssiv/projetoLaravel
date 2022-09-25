<?php

namespace App\Http\Controllers;
use App\Models\Contatos;
use App\Models\Endereco;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class Inical extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function buscaCampo(Request $request){
    $dados = [];
       
    $dados['contatos'] = DB::select('select * from contatos as c INNER JOIN enderecos as e ON
    c.id_endereco = e.id WHERE nome LIKE %'.$request->input('pesquisar').'% OR email LIKE'.$request->input('pesquisar'). '%');
 
    
    return response()->json($dados);




}
    public function index()
    {
 

       

        $teste=Contatos::all();
        //  var_dump($teste);
            return view('site.lista',['teste'=>$teste]);
    
     
       
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.create',);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*pegar último id inserido de endereco e inserir  na tabela de contatos*/
        $id = new \App\Models\Endereco;//cria objeto da classe endereco
        $id->cep = $request->cep;
        $id->rua = $request->rua;
        $id->bairro = $request->bairro;
        $id->municipio = $request->municipio;
        $id->uf = $request->uf;
        $id->save();
        
     //-------------

        Contatos::create(['nome'=>$request->nome,
       'email'=>$request->email,
       'telefone'=>$request->telefone,
       'cep'=>$request->cep,
       'id_endereco'=>$id->id,// vem do objeto endereco
       ]
       );
       // dd($request->all());
       return view('site.saida',['id'=>$id->id]);  
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $contato=Contatos::findOrFail($id);
        $enderec=Endereco::findOrFail($contato->id_endereco);
        $contato['endereco']=$enderec;
     
        return view('site.editar',['contato'=>$contato]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        //cadastrar edicao na tabela endereco 
        $endereco=Endereco::findOrFail($request->id_endereco);
    
        $endereco->update(['cep'=>$request->cep,
        'rua'=>$request->rua,
        'bairro'=>$request->bairro,
        'municipio'=>$request->municipio,
        'uf'=>$request->uf
       
         
    ]);
        //-------------
        //edita os dados na tabela contatos
        $produto=Contatos::findOrFail($id);
    
        $produto->update(['nome'=>$request->nome,
        'email'=>$request->email,
        'telefone'=>$request->telefone,
        'cep'=>$request->cep,
        'id_endereco'=>$request->id_endereco,
       //---------
         
    ]);
        return view('site.saida');  
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    
    { 
        
       // $array= $contatos= DB::select('select * from contatos WHERE id_contatos ='.$id);
        $contato=Contatos::findOrFail($id);

        $endereco=Endereco::findOrFail($contato->id_endereco);
        $endereco->delete();//deleta linha tabela endereco
        $contato->delete();//deleta linha tabela contatos 
        return view('site.saida_excluir'); 
    }

    public function lista()
    {
        return view('site.lista'); 
    }

  public function api(){
    /*seleciona dados de duas tabelas , contatos e enderecos para mostrar na api */ 
    $contatos= DB::select('select * from contatos as c INNER JOIN enderecos as e ON
   c.id_endereco = e.id ORDER BY c.id DESC');

    return view('site.api',['contatos'=>$contatos]); 

  }

}
