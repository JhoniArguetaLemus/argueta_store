<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home.css">


    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/597d9cf0ae.js" crossorigin="anonymous"></script>
    <title>Argueta Store</title>
</head>

<body class="bg-blue-300">
    
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

                <li class=""><a href="#inicio"><i class="fa-solid fa-house"></i> Inicio</a></li>
                <li><a href="#categorias"><i class="fa-brands fa-product-hunt"></i>Productos</a></li>

                <li><a href=""><i class="fa-solid fa-person-dress"></i>Damas</a></li>
                <li><a href="{{route('tienda.productos')}}"><i class="fa-solid fa-person"></i>Caballeros</a></li>
                <li><a href=""><i class="fa-solid fa-child"></i>Niños</a></li>
                <li><a href=""><i class="fa-solid fa-cart-shopping"></i>Carrito</a></li>


            </ul>


        </nav>
    </header>

    <main class="mt-[200px]" id="inicio">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">
            <div class=" p-5 text-2xl mr-12 ml-12 ">
                <p class="pl-6 ">
              

                    Descubre Argueta Store, tu destino para moda de alta calidad para mujeres, hombres y niños. En
                    Argueta Store, nos especializamos en ofrecer una amplia selección de ropa diseñada para realzar tu
                    estilo y comodidad en cada etapa de la vida. 

                </p>

            </div>
            <div class="mr-12 ml-12 ">
                <img class="rounded-[50%] pr-12 ml-6  " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR35gFjsl6xTyOcPvI7Aa9EnDb8vCI4nS3yTw&s" alt="" width="300">
            </div>
            
        </div>


        <section class="productos">
            <h2 class="text-4xl text-center mt-[100px]" id="categorias">Explora nuestras categorías</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg-grid-cols-2 gap-4">

                 <div class=" ml-4 mr-6 mt-8 ">
                    <h4 class="text-center damas h-[400px] text-2xl pt-4 ">Damas</h4>
                    <p class="text-white text-3xl bg-red-300">Todo para que ellas puedan lucir bien.</p>
                
                 </div>

                 <div class=" ml-4 mr-6 mt-8 ">
                    <a href="https://tailwindcss.com/docs/width" target="_blank">
                    <h4 class="text-center text-2xl caballeros h-[400px] pt-4 ">Caballeros</h4>
                    </a>
                   
                    <p class="text-white text-3xl bg-slate-600">Todo para que ellos puedan lucir bien.</p>
                 </div>


                 <div class="ml-4 mr-6 mt-8     bg-orange-500 border-3 border-orange-500">
                    <h4 class="text-center ninos h-[400px] text-2xl pt-4">Niños</h4>
                    <p class="text-white text-3xl bg-slate-600">Todo para que los reyes del hogar luzcan bien.</p>


                 </div>

            </div>

        </section>



    </main>

    <script src="/js/app.js"></script>
</body>

</html>