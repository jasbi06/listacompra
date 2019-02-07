@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar Producto
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('productos/create') }}" method="POST">
                        @csrf
                        <input type="hidden" id="oculto" name="oculto" value='{{method_field('PUT')}}'/>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="number" min="0" max="100" name="precio" placeholder="Precio">
                        </div>

                        <div class="form-group">
                            <input type="text" name="categoria" placeholder="Categoria">
                        </div>

                        <div class="form-group">
                            <input type="url" name="imagen" placeholder="url de la imagen">
                        </div>

                        <div class="form-group">
                            <label for="descrip">Descripcion</label>
                            <textarea name="descrip" id="descrip" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar producto
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
