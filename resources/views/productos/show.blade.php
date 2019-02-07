@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">

                <img src="http://www.revistaaral.com/es/img2/2018/02/bodegon-sabor-del-ano-2018-46032.jpg" style="height:200px"/>

        </div>
        <div class="col-sm-8">

            <h4>Nombre : {{$producto[0]}}</h4>
            <h4>Categoria: {{$producto[1]}}</h4>
            <h3>Estado : Producto comprado</h3>
            <a class="btn btn-danger" href="#">Pendiente de compra</a>
            <a class="btn btn-warning" href="{{ url('/productos/edit/' . $id ) }}">Editar</a>
            <a class="btn btn-outline-info" href="{{ action('ProductoController@getIndex') }}">Volver al listado</a>

        </div>
    </div>

@stop