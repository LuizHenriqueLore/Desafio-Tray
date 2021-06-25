@extends('layout')

@section('header')
    Detalhes do Pedido {{ $order->id }}
@endsection


@section('content')

<ul class="list-group mb-3">
    <li class="list-group-item">
        <b>Código do Pedido:</b> {{ $order->id }}
    </li>
    <li class="list-group-item">
        <b>Nome do Comprador:</b> {{ $order->buyer }}
    </li>
    <li class="list-group-item">
        <b>Endereço do Comprador:</b> {{ $order->address }}
    </li>
    <li class="list-group-item">
        <b>Código do Produto:</b> {{ $order->product_id }}
    </li>
</ul>

<a href="{{ route('list_orders') }}" class="btn btn-primary">Voltar</a>

@endsection