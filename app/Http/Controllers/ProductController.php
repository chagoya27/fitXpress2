<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        
    }


    public function create(){
        return view('products.create');
    }

    public function store(ProductRequest $request){
        /*Product::create($request->all()); /*creacion de un producto por asignacion masiva*/
    
        #creacion de un objeto Product
        $product = new Product();
        $product->nombre = $request->nombre;
        $product->precio = $request->precio;
        $product->descripcion = $request->descripcion;
        $product->path = $request->file('imagen')->getClientOriginalName(); #obtiene solo el nombre de la imagen cargada con su respectivo formato
        $product->save();


        return redirect()->route("dashboard");


    }


    public function show(Product $product){
        return view('products.show',compact('product'));

    }


    public function edit(Product $product){
        return view('products.edit',compact('product'));

    }

    public function update(ProductRequest $request,Product $product){
        $product->update($request->all());
        return redirect()->route('product.show',$product);

    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('dashboard');
    }

}
