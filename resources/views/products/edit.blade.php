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

        <form action="{{route('product.update',$product)}}"  method="POST"  class="formulario" name="formulario">
            @csrf
            @method('PUT');
            <div class="title"><h1>Editar producto</h1></div>

            <section class="labels">

                <div class="formulario-grupo">
                    <input type="text" name= "nombre" class="formulario-input" placeholder=""   value="{{$product->nombre}}">
                    @error('nombre')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>


                <div class="formulario-grupo">
                    <input type="number" name= "precio" class="formulario-input" placeholder="Precio"  value="{{$product->precio}}">
                    @error('precio')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>


                <div class="formulario-grupo">
                    <textarea name="descripcion" placeholder="Descripcion"  class="formulario-input" id="" cols="20" rows="5" >
                        {{$product->descripcion}}
                    </textarea>
                    @error('descripcion')
                    <p>
                        {{$message}}
                    </p>
                    @enderror
                </div>


                <button class="btn" type="submit"><span>Guardar cambios</span></button>

            </section>
        </form>


    </main>


    <script src="https://kit.fontawesome.com/8ceb30feb6.js" crossorigin="anonymous"></script>

</body>
</html>