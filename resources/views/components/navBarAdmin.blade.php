<header>
    
    <span class="logo">
        <a href="{{route('product.index')}}"><img src="resources/images/FitXpress.png" alt=""></a>
    </span>

    <nav class="navegacion">

        <section class="barra">
            <i class="fa-solid fa-magnifying-glass icon"></i>
            <input type="text" class="input" placeholder="Search">
        </section>

            <div class="icon login" >
                <a href="{{route('usuario.index')}}">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <span>Cerrar sesion</span>
                </a>
            </div>


            <div class="icon carrito" >
                <a href="{{route('product.create')}}">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>Agregar producto</span>
                </a>
            </div>
    </nav>
</header>
