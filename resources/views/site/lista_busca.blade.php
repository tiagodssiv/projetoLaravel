@extends('site.tamplate')

@section('content')
<div class="container">
<h1 div class="text-center">Lista de Contatos</h1>
<div class="row align-items-start">
    <div class="col">
     
    </div>
    <div class="col">
     
    </div>
    <div class="col">
    <form action="{{route('busca')}}" method="POST" class="d-flex" role="search">
        <input class="form-control me-2" name="pisquisa"type="search" placeholder="digite nome ou e-mail" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>




<table class="table">
  <thead>
    <tr>
      <th scope="col">#Código</th>
      <th scope="col">nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      
      <th scope="col">Cep</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>


    @foreach($teste as $item) 
    
    <tr>
    <th scope="row">{{$item->id_contatos}} </th>
      <td>{{$item->nome}} </td>
      <td>{{$item->email}} </td>
      <td>{{$item->telefone}} </td>
      
      <td>{{$item->cep}} </td>

      <td><a class="btn "href="edicao/{{$item->id}}">editar</a> <a class="btn"href="excluir/{{$item->id}}">Deletar</a> <a class="btn"href="{{$item->id}}">Visualizar</a></td>
    </tr>
@endforeach
    
    
  </tbody>
</table>
</div>
@endsection