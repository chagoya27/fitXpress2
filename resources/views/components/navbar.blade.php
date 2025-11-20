<header>
    
    <span class="logo">
        <a href=""><img src="images/AdobeExpress.png" alt=""></a>
    </span>

    <nav class="navegacion">

        <section class="barra">
            <i class="fa-solid fa-magnifying-glass icon"></i>
            <input type="text" class="input" placeholder="Search">
        </section>


            @if(Auth::check())
            <!-- Settings Dropdown -->
            <div class="icon carrito">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150">
                            <span>{{ Auth::user()->name }}</span>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            @else()
                <div class="icon login" >
                    <a href="{{route('login')}}">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <span>Iniciar Sesion</span>
                    </a>
                </div>
            @endif


            @if(Auth::check())
                @can('crear productos')
                    <div class="icon carrito" >
                        <a href="{{route('product.create')}}">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span>Cargar producto</span>
                        </a>
                    </div>
                @else()
                    <div class="icon carrito" >
                        <a href="">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span>Carrito</span>
                        </a>
                    </div>
                @endcan

            @else()
                <div class="icon carrito" >
                    <a href="">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Carrito</span>
                    </a>
                </div>
            @endif

            <div class="icon carrito" >
                <a href="">
                    <i class="fa-solid fa-dumbbell"></i>
                    <span>Nosotros</span>
                </a>
            </div>

    </nav>
</header>


