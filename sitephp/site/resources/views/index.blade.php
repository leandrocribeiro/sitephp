@extends('templates.template')
@section('content')

<h1 class="text-center">IFSP - Cadastro de Livros para Venda</h1>

<div class="text-center mt-3 mb-4 ">
  <a href="{{url("books/create")}}">
  
  <button class="btn btn-success">Cadastrar</button>
  
</a>
</div>


<div class="col-8 m-auto h5">
@csrf
    
<table class="table text-center">
    <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Título</th>
          <th scope="col">Autor</th>
          <th scope="col">Preço</th>
          <th scope="col">Responsável</th>
          <th scope="col">Ação</th>
        </tr>
    </thead>

<tbody>
    
  @foreach($book as $books)
    
    @php
    $user=$books->find($books->id)->relUsers;
    @endphp

    <tr>
      <th scope="row">{{$books->id}}</th>
      <td>{{$books->title}}</td>
      <td>{{$books->author}}</td>
      <td>{{$books->price}}</td>
      <td>{{$user->name}}</td>
      <td>
        <a style="text-decoration:none" href="{{url("books/$books->id")}}">
        <button class="btn btn-dark mx-auto">Visualizar</button>
        </a>

        <a style="text-decoration:none" href="{{url("books/$books->id/edit")}} ">
        <button class="btn btn-primary">Editar</button>
        </a>

        <a style="text-decoration:none" href="{{url("books/$books->id")}}" class="js-del">
        <button class="btn btn-danger">Deletar</button>
        </a>
      </td>
  
    </tr>
  @endforeach  
  
  </tbody>
</table>


{{$book->links("pagination::bootstrap-4")}}

</div>

@endsection
