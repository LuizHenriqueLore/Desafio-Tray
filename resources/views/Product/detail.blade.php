@extends('layout')

@section('header')
    Detalhes do Produto {{ $product->id }}
@endsection


@section('content')

<ul class="list-group mb-2">
    <li class="list-group-item">
        <b>Código do Produto:</b> {{ $product->id }}
    </li>
    <li class="list-group-item">
        <b>Nome do Produto:</b> {{ $product->name }}
    </li>
    <li class="list-group-item">
        <b>Valor do Produto:</b> {{ $product->price }}
    </li>
    <li class="list-group-item">
        <b>Quantidade em Estoque:</b> {{ $product->quantity }}
    </li>
</ul>

<a href="{{route('list_products')}}" class="btn btn-primary">Voltar</a>


@endsection