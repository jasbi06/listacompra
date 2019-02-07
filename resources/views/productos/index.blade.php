@extends('layouts.master')

@section('content')
    <div class="row">
        @php
            $key = 0;
        @endphp
        @foreach( $arrayProducto as $producto )
            @php
                $key++;
            @endphp
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">

                <a href="{{ url('/productos/show/' . $key ) }}">
                    <img src="http://www.revistaaral.com/es/img2/2018/02/bodegon-sabor-del-ano-2018-46032.jpg" style="height:200px"/>
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$producto[0]}}
                    </h4>
                </a>

            </div>
        @endforeach

    </div>
@stop
