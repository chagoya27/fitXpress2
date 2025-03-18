<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateUsuariosRequest;
use App\Models\Persona;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{

    public function index(){
        $products = Product::all();
        return view('home',compact('products'));
    }

    public function login(){
        return view('login');
    }

    public function validate(ValidateUsuariosRequest $request)
    {
    // Obtiene un registro deacuerdo al correo
    $user = Persona::where('correo', $request->correo)->first(); 

    //verifica si el usuario esta en la base de datos
    if (!$user) {
        return redirect()->back()->withErrors(['password' => 'Correo o contraseña incorrecto']);
    }

    // Verifica si la contraseña es correcta
    if (!Hash::check($request->password, $user->password)) {
        return redirect()->back()->withErrors(['password' => 'Correo o contraseña incorrecto']);
    }

    
    return redirect()->route('product.index');



    
    }
}
