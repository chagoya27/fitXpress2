<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Inicia Sesion</title>

    @vite(['resources/css/estilos.css'])
    @vite(['resources/css/estilosNavBar.css'])
    @vite(['resources/css/estilosFormulario.css'])

</head>
<body>
    <x-navbar></x-navbar>
    <main>


        <form action="{{route('usuario.validate')}}"  method="POST"  class="formulario" name="formulario">
            @csrf
            
            <div class="title"><h1>Iniciar Sesion</h1></div>

            <section class="labels">
                <div class="formulario-grupo">
                    <input type="text" name= "correo" class="formulario-input" placeholder="Correo">
                    @error('correo')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>
    
                <div class="formulario-grupo">
                    <input type="password" name="password" class="formulario-input" placeholder="Contraseña">
                    @error('password')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <button class="btn"><span>Entrar</span></button>

            </section>


            <section class="link">
                <a href="">¿No tienes cuenta? Crea una</a>
            </section>
        </form>


    </main>


    <script src="https://kit.fontawesome.com/8ceb30feb6.js" crossorigin="anonymous"></script>
</body>
</html>