@extends('templates.template')
@section('content')

<h1 class="text-center">
    @if(isset($book))Editar
    @else Cadastrar
    @endif
<h1>

<div class="col-8 m-auto h4">
    
    @if(isset($errors) && count($errors)>0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach($errors->all() as $erro)
            {{$erro}}<br>
            @endforeach
        </div>
    @endif
    
    @if(isset($book))
    <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
    @method('PUT')
    @else
    <form name="formCAD" id="formCAD" method="post" action="{{url('books')}}">
    @endif



    <form name="formCAD" id="formCAD" method="post" action="{{url('books')}}">
        @csrf
        <input  class="form-control mt-3 mb-3" type="text" name="title"  id="title"  placeholder="Título:"  value="{{$book->title ?? ''}}" required>
        <input  class="form-control mt-3 mb-3" type="text" name="author" id="author" placeholder="Autor:"   value="{{$book->author ?? ''}}" required>
        <input  class="form-control mt-3 mb-3" type="text" name="pages"  id="pages"  placeholder="Páginas:" value="{{$book->pages ?? ''}}" required>
        <input  class="form-control mt-3 mb-3" type="text" name="price"  id="price"  placeholder="Preço:"   value="{{$book->price ?? ''}}" required>
        <select class="form-control mt-3 mb-3" name="user_id" id="user_id" required>
            <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Responsável:' }}</option>
            @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        
        <input class="btn btn-primary mt-3 mb-3" type="submit" value="@if(isset($book)) Editar @else Cadastrar @endif">
    </form>
      



<div>
@endsection