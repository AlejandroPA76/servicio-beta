<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin',['only'=>['index','agregar']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$products = Producto::all();
        $products = Producto::orderBy('created_at','desc')->get();
        return view('home', compact('products'));
        return view('index', compact('products'));
    }

    public function agregar(){
        return view('producto.agregar');
    } 

     public function solicitar(){
        return view('producto.solicitar');
    } 


    public function almacenar(Request $request){

        $newProducto = new Producto;
        $newProducto->codigo = $request->input('codigo');
        $newProducto->responsable = $request->input('responsable');
        $newProducto->nombre = $request->input('nombre');
        $newProducto->descripcion = $request->input('descripcion');
        $newProducto->stock=$request->input('stock');
        $newProducto->medida=$request->input('medida');
        //$newProducto->imagen=$request->input('imagen');
        $newProducto->save();
        return redirect()->route('home')->with('info','Se agrego producto al inventario');
    }

    public function eliminar($id){
    //return $id;
        $producto = Producto::findOrFail($id);
        $producto->delete();
        //return $producto;
        return redirect()->route('home')->with('info','Se elimino el producto');
    }

    public function editar($id){
        $producto = Producto::findOrFail($id);
        return view('producto.editar', compact('producto'));

    }

    public function actualizar(Request $request, $id){
        //return $id;
        //return $request->all();
       
        $producto = Producto::findOrFail($id);
        //return $producto;
        $producto->codigo = $request->input('codigo');
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->stock=$request->input('stock');
        $producto->medida = $request->input('medida');

        $producto->save();
        return redirect()->route('home')->with('info','Se actualizo producto alinventario');
    }
}
