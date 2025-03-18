<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

/*
#rutas para usuario
Route::get('/', [UsuariosController::class, 'index'])->name('usuario.index');
Route::get('/login', [UsuariosController::class, 'login'])->name('usuario.login');
Route::post('/validate',[UsuariosController::class,'validate'])->name('usuario.validate');



#rutas del admin para CRUD

*/


#vista principal
Route::get('/',function(){
    $products = Product::all();
    return view('home',compact('products'));
})->name('index');



#vista de un usuario o admin logeado
Route::get('/dashboard', function () {
    $products = Product::all();
    return view('home',compact('products'));
})->middleware(['auth', 'verified'])->name('dashboard');


#rutas para un CRUD de admin
Route::group(['middleware' => ['can:editar productos']], function () { 
    Route::resource('product', ProductController::class);
});



#rutas de un usuario o admin logeado para ver su perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';


