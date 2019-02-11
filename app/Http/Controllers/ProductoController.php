<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function getIndex()
    {
        $arrayProducto = Producto::all();
        return view('productos.index', array('arrayProducto'=> $arrayProducto));
    }
    public function getShow($id)
    {
        $productos = Producto::findOrFail($id);
        return view('productos.show', array('producto'=> $productos),array('id'=>$id));
    }
    public function getCreate()
    {
        return view('productos.create');
    }
    public function postCreate(Request $request)
    {
        Producto::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'categoria' => $request->categoria,
            'imagen' => $request->imagen,
            'descripcion' => $request->descripcion
        ]);
        return redirect('/productos');

    }
    public function putEdit(Request $request,$id)
    {
        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->categoria = $request->categoria;
        $producto->imagen = $request->imagen;
        $producto->pendiente = $request->pendiente;
        $producto->descripcion = $request->descripcion;
        $producto->save();
        return redirect('/productos/show/'.$producto->id);
    }
    public function getEdit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', array(
            'producto' => $producto
        ));
    }
    public function changeRented($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->pendiente = !$producto->pendiente;
        $producto->save();
        return back();
    }

}   
