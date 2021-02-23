<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\GuardarProductoRequest;

class ProductoController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth')->except('index','show');
        $this->middleware('roles:admin')->only('create');
    }
    public function index(){

        return view('productos.index',[
            'productos' => Producto::latest()->paginate()
        ]);
    }
    
    public function show(Producto $producto){

        return view('productos.show',[
            'producto' => $producto
        ]);
    }

    public function create(){

        return view('productos.create',[
            'producto' => new Producto
        ]);
    }

    public function store(GuardarProductoRequest $request){

        Producto::create($request->validated());
        
        return redirect()->route('productos.index')->with('status','El producto fue registrado con éxito');
    }

    public function edit(Producto $producto){
        return view('productos.edit',[
            'producto' => $producto
        ]);
    }

    public function update(Producto $producto, GuardarProductoRequest $request){

        $producto->update( $request->validated());

        return redirect()->route('productos.show',$producto)->with('status','El producto fue actualizado con éxito');
    }

    public function destroy(Producto $producto){

        $producto->delete();

        return redirect()->route('productos.index')->with('status','El proyecto fue eliminado con éxito');
    }
    
}
