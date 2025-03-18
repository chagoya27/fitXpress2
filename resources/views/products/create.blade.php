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
    @vite(['resources/css/estilosFormulario.css'])

</head>
<body>


    <main>

        <div class="cuadro"></div>
        <div class="cuadro"></div>
        <div class="cuadro"></div>

        <form action="{{route('product.store')}}"  method="POST"  class="formulario" name="formulario" enctype="multipart/form-data">
            @csrf
            
            <div class="title"><h1>Cargar producto</h1></div>

            <section class="labels">

                <div class="formulario-grupo">
                    <input type="text" name= "nombre" class="formulario-input" placeholder="Nombre">
                    @error('nombre')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>


                <div class="formulario-grupo">
                    <input type="number" name= "precio" class="formulario-input" placeholder="Precio">
                    @error('precio')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>


                <div class="formulario-grupo">
                    <textarea name="descripcion" placeholder="Descripcion"  class="formulario-input" id="" cols="20" rows="5" value=""></textarea>
                    @error('descripcion')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>


                <div class="formulario-grupo">
                    <input type="file" name="imagen" class="cargar-imagen" >
                    @error('imagen')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>              



                


                <button class="btn" type="submit"><span>Cargar</span></button>

            </section>
        </form>


    </main>


    <script src="https://kit.fontawesome.com/8ceb30feb6.js" crossorigin="anonymous"></script>

</body>
</html>