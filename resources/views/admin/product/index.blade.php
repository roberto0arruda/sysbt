@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Products for sale</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Products</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <a href="{{route('admin.home')}}" class="btn btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</a>
            <a href="{{route('products.create')}}" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Comprar</a>
        </div>
        <div class="box-body">
            @include('includes.alerts')

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Preço Custo</th>
                            <th>Preço Venda</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr @if ($product->sold == 1) class="danger" @endif> </tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->price_buy}}</td>
                            <td>{{$product->price_sale}}</td>
                            <td>
                                <a href="{{route('products.show', $product->id)}}" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>
                                @if ($product->sold != 1)
                                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-money" aria-hidden="true"></i> Vender</a>
                                @endif
                            </td>
                        </tr>                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop