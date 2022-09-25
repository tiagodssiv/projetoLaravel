@extends('site.tamplate')

@section('content')


<div class="container ">
<h1 div class="text-center">Editar  Contatos</h1>
  <div class="row align-items-start">
    <div class="col">
      
    </div>
    <div class="col">
    <form action="{{ route('editar_contato',['id'=>$contato->id]) }}" method="POST">
      @csrf
 
 
      <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cep</label>
    <input type="text" maxlength="8" minlength="8"value="{{$contato->cep}}"placeholder="Digite cep" name="cep"class="form-control" id="cep">
  </div>
 
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome </label>
    <input type="text" value="{{$contato->nome}}"required placeholder="Digite nome "name="nome" class="form-control" id="nome" aria-describedby="emailHelp">
   </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input value="{{$contato->email}}" placeholder="Digite e-mail " name="email" required="email"type="email" class="form-control" id="email">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telefone</label>
    <input type="text"  value="{{$contato->telefone}}"placeholder="Digite telefone" name="telefone"class="form-control" id="telefone">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Rua</label>
    <input type="text" value="{{$contato->endereco->rua}}" id="rua" name="rua"class="form-control">
 </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Bairro</label>
    <input type="text"  value="{{$contato->endereco->bairro}}"id="bairro" name="bairro"class="form-control">
 </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cidade</label>
    <input type="text" value="{{$contato->endereco->municipio}}" id="municipio" name="municipio"class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">UF</label>
    <input type="text"  value="{{$contato->endereco->uf}}"id="uf" name="uf"class="form-control">
  </div>
  <div class="mb-3">
   <input type="hidden"  value="{{$contato->id_endereco}}"placeholder="" name="id_endereco"class="form-control" id="exampleInputPassword1">


  </div>

  <button id="btn_editar"type="submit" class="btn btn-primary">Editar</button>
</form>
    </div>
    <div class="col">
      
    </div>
  </div></div>

@endsection