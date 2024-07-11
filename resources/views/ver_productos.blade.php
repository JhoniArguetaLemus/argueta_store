<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home.css">
    <script src="https://kit.fontawesome.com/597d9cf0ae.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>Productos</title>
</head>

<body class="bg-slate-300">

    <header class="fixed w-full top-0">

        <div class="logo-marca">
            <h1 class="text-4xl   pr-5 ">Argueta Store</h1>
            <img class="rounded-full imagen-logo  "
                src="https://static.vecteezy.com/system/resources/previews/020/662/330/non_2x/store-icon-logo-illustration-vector.jpg"
                alt=" " width="100">
        </div>

        <button class=" " id="menu"><i class="fa-solid fa-bars text-black text-3xl"></i></button>

        <nav class="" id="lista">
            <ul>

                <li class=""><a href="{{route('inicio')}}"><i class="fa-solid fa-house"></i> Inicio</a></li>
                <li><a href="#categorias"><i class="fa-brands fa-product-hunt"></i>Productos</a></li>

                <li><a href=""><i class="fa-solid fa-person-dress"></i>Damas</a></li>
                <li><a href="{{route('tienda.productos')}}"><i class="fa-solid fa-person"></i>Caballeros</a></li>
                <li><a href=""><i class="fa-solid fa-child"></i>Niños</a></li>
                <li><a href=""><i class="fa-solid fa-cart-shopping"></i>Carrito</a></li>


            </ul>


        </nav>
    </header>



    <section class="productos mt-[200px]">
        <div class="grid grid-cols-1 sm:grid-cols-3 lg: grid-lg-3  gap-4">

            @foreach ($productos as $producto)

                <div class="    h-[550px] w-[400px]      rounded-3xl ml-4 mr-4 mt-4 mb-4   border-2 border-gray-500  "
                    id="card">
                    <div class="imagen flex justify-center">
                        <img class=" rounded-3xl     w-[300px] h-[200px] mt-4 mb-4 ml-10 mr-6 " src="{{$producto->imagen}}"
                            alt="imagen producto">

                    </div>


                    <div class="ml-4">
                        <p class="text-bold text-2xl ">{{$producto->nombre}}</p>
                        <p class="text-xl ">{{$producto->descripcion}}</p>
                        <p class="text-xl">Cantidad: {{$producto->cantidad_disponible}}</p>
                        <p class=" text-xl">Precio: {{$producto->precio}}</p>

                    </div>

                    <div class="flex justify-center mt-7 mb-[20px]">
                        <button
                            class=" transition delay-150 duration-300 ease-in-out  bg-slate-500  rounded-3xl text-white mb-[10px] p-3 hover:bg-white font-bold text-neutral-900">Agregar
                            al
                            carrito</button>
                    </div>

                </div>


            @endforeach

        </div>




        </div>


    </section>


    <script src="/js/app.js"></script>

</body>

</html>