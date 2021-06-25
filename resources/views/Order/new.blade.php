@extends('layout')

@section('header')
    Criação de Pedido
@endsection


@section('content')
<form action="/order/create" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <div class="col col-8">
            <label for="buyer">Seu Nome:</label>
            <input type="text" id="buyer" name="buyer" class="form-control">
        </div>

        <div class="col col-2">
            <label for="address">Endereço para Entrega:</label>
            <input type="text" id="address" name="address" class="form-control">
        </div>        
        
    </div>

    <input type="hidden" name="productId" value="{{ $productId }}">
    
    <button class="btn btn-dark mt-2" type="submit">Salvar</button>
</form>

@endsection

