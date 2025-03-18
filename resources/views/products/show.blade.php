<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <title>Producto</title>
</head>
<body class="h-screen m-0 p-0 flex items-center justify-center">

    <main class="bg-black flex w-full h-screen">
        <!-- Imagen y Botones -->
        <section class="w-1/2 flex flex-col items-center justify-center text-white p-8">
            <div class="image mb-6">
                <img src="{{ Vite::asset('resources/images/'.$product->path)}}" 
                    class="w-80 h-80 object-cover rounded-lg shadow-lg" alt="Imagen del producto">
            </div>
            <div class="flex flex-col gap-4">
                <a href="{{route('product.edit',$product)}}">
                    <button class="bg-[#03f5a7] px-6 py-2 rounded-lg text-white hover:bg-[#5eecbf] transition">
                        Editar
                    </button>
                </a>

                <form action="{{route('product.destroy',$product)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 px-6 py-2 rounded-lg text-white hover:bg-red-500 transition">
                        Eliminar Producto
                    </button>
                </form>

                <a href="{{route('dashboard')}}" class="text-white hover:text-gray-300 transition">
                    Regresar a la lista de productos
                </a>
            </div>
        </section>

        <!-- Descripcion-->
        <section class="w-1/2 flex flex-col justify-center text-white p-12">
            <h1 class="text-4xl font-bold mb-4">{{$product->nombre}}</h1>
            <p class="text-lg text-gray-300 mb-6">{{$product->descripcion}}</p>
            <span class="text-2xl font-semibold text-[#03f5a7]">${{$product->precio}}.00</span>
        </section>
    </main>

</body>
</html>
