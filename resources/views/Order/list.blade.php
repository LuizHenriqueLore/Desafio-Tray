@extends('layout')

@section('header')
    Listagem dos Pedidos
@endsection


@section('content')

@foreach ($orders as $order)
<ul class="list-group mb-3">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <b>Código do Pedido: {{ $order->id }}</b>
        <span>
            <a href="{{route('detail_order', $order->id)}}" class="btn btn-dark">
                Detalhes
            </a>
        </span>
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
@endforeach

<a href="{{ route('list_products') }}" class="btn btn-primary">Voltar</a>

@endsection