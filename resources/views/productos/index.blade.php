@extends('layouts.master')

@section('content')
    <div class="row">
        @foreach( $arrayProducto as $producto )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">

                <a href="{{ url('/productos/show/' . $producto->id ) }}">
                    <img src="http://www.revistaaral.com/es/img2/2018/02/bodegon-sabor-del-ano-2018-46032.jpg" style="height:200px"/>
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$producto->nombre}}
                    </h4>
                </a>

            </div>
        @endforeach

    </div>
@stop
