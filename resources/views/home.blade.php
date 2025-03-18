<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>FitXpress</title>

    @vite(['resources/css/estilos.css'])
    @vite(['resources/css/estilosHome.css'])
    @vite(['resources/css/estilosNavBar.css'])


            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
            <!-- Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <!--Barra de navegación -->
    <x-navBar>
    </x-navBar>


    <main>
        <figure class="hero-image">
            <div class="wrap">
                <div class="box">
                    <section class="text">
                        <span>No lo pienses mas...</span>
                        <h2>Forma parte de nosotros</h2>
                        <p>Libera tú potencial y da a conocer tus productos. No lo pienses mas</p>
                    </section>


                    <section class="botones">
                        <button class="btn unete">
                            <span>UNETE</span>
                        </button>
                    </section>
                </div>

            </div>
        </figure>


        <section class="main-products">
            <h2 class="title-productos">CONOCE NUESTROS PRODUCTOS</h2>
            <section class="products">
                @foreach ($products as $product)
                <section class="cart">
                    <figure class="image-product"><img src="{{ Vite::asset('resources/images/'.$product->path)}}" alt=""></figure>
                    <section class="informacion">
                        <div class="title-descripcion">{{$product->nombre}} | {{$product->descripcion}}</div>
                        <div class="precio">${{$product->precio}}.00</div>
                    </section>

                    @can('editar productos')
                    <section class="boton">
                        <a href="{{route('product.show',$product)}}"><button class="btn">Ver mas</button></a>
                    </section>
                    @endcan

                    
                </section>
                @endforeach
            </section>
        </section>
    </main>



    <script src="https://kit.fontawesome.com/8ceb30feb6.js" crossorigin="anonymous"></script>

</body>
</html>