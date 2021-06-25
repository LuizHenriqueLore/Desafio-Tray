@extends('layout')

@section('header')
    Criação de Produto
@endsection


@section('content')
<form action="/product/create" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <div class="col col-8">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>

        <div class="col col-2">
            <label for="price">Preço:</label>
            <input type="number" id="price" name="price" class="form-control">
        </div>

        <div class="col col-2">
            <label for="quantity">Quantidade:</label>
            <input type="number" id="quantity" name="quantity" class="form-control">
        </div>
        
        
        
    </div>
    
    <button class="btn btn-dark mt-2" type="submit">Salvar</button>
</form>

@endsection

