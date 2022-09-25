@extends('site.tamplate')

@section('content')


<div class="container ">
  <h1 div class="text-center">Cadastro de Contatos</h1>
  <div class="row align-items-start">
    <div class="col">
      
    </div>
    <div class="col">
    <form action="cadastrar" method="POST">
      @csrf

      <div class="mb-3">
      <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cep</label>
    <input type="text"  maxlength="8" id="cep"placeholder="Digite preço de venda" name="cep"class="form-control">
  </div>

    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" placeholder="Digite nome do produto"name="nome" class="form-control" id="nome" required>
   </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefone</label>
    <input id="telefone"type="text" placeholder="Digite nome do produto"name="telefone" class="form-control" required>
   </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input  id="email" placeholder="Digite custo do produto" name="email" type="email" class="form-control"  aria-describedby="emailHelp"required>
  </div>

  <div class="mb-3">
  
  <input type="hidden"  id="rua" name="rua"class="form-control">
  <input type="hidden"  id="bairro" name="bairro"class="form-control">
  <input type="hidden"  id="municipio" name="municipio"class="form-control">
  <input type="hidden" id="uf" name="uf"class="form-control">
</div>
 

  
  <button id="btn_salvar" type="submit" class="btn btn-primary">Salvar</button>
</form>
    </div>
    <div class="col">
      
    </div>
  </div></div>

@endsection