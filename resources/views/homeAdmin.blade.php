<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>FitXpress</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @vite(['resources/css/estilos.css'])
    @vite(['resources/css/estilosHome.css'])
    @vite(['resources/css/estilosNavBar.css'])

</head>
<body>
    <main>
        <section class="main-products">
            <h2 class="title-productos">PRODUCTOS DISPONIBLES</h2>
            <section class="products">
                @foreach ($products as $product)
                    <section class="cart">
                        <figure class="image-product"><img src="{{ 'images/' . $product->path }}" alt=""></figure>
                        <section class="informacion">
                            <div class="title-descripcion">{{$product->nombre}} | {{$product->descripcion}}</div>
                            <div class="precio">${{$product->precio}}.00</div>
                        </section>
    
                        <section class="boton">
                            <a href=""><button class="btn">Ver mas</button></a>
                        </section>
                    </section>
                @endforeach
            </section>
        </section>
    </main>



    <script src="https://kit.fontawesome.com/8ceb30feb6.js" crossorigin="anonymous"></script>

</body>
</html>