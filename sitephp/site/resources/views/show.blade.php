@extends('templates.template')
@section('content')

<h1 class="text-center">Visualizar<h1>

<div class="col-8 m-auto h4">

@php
$user = $book->find($book->id)->relUsers;
@endphp

Título: {{$book->title}}<br>
Autor: {{$book->author}}<br>
Páginas: {{$book->pages}}<br>
Preço: R$ {{$book->price}}<br>
<div>
@endsection
