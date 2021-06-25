@extends('layout')

@section('header')
    Listagem dos Produtos
@endsection


@section('content')


<div class="d-flex justify-content-between align-items-center">
        <a href="{{ route('new_product') }}" class="btn btn-dark mb-2">Adicionar</a>
        <a href="{{ route('list_orders') }}" class="btn btn-dark mb-2">Pedidos</a>
</div>


@foreach ($products as $product)
<ul class="list-group mb-3">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <b>Código do Produto: {{ $product->id }}</b> 
        <span>
            <a href="{{route('detail_product', $product->id)}}" class="btn btn-dark">
                Detalhes
            </a>
        </span>
        
    </li>
    <li class="list-group-item">
        <b>Nome do Produto:</b> {{ $product->name }}
    </li>
    <li class="list-group-item">
        <b>Valor do Produto:</b> R$ {{ $product->price }}
    </li>
    <li class="list-group-item">
        <b>Quantidade em Estoque:</b> {{ $product->quantity }}
    </li>

    <a href="/order/new?productId={{ $product->id }}" class="btn btn-primary mt-1">Comprar</a>
    
</ul>
@endforeach

@endsection