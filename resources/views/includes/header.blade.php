<header class="containerHeader fixed top-0 left-0 w-full bg-white/70 backdrop-blur-md shadow-md py-4 z-10">
            <!-- Barra de navegacion -->
            <nav class="flex justify-between items-center w-[92%]  mx-auto">
                <!-- Logo y nombe-->
                <div class="flex items-center gap-2">
                    <img class="h-9 w-9 border-none rounded-full cursor-pointer" src="{{ asset('images/subtitulo.png') }}" alt="...">
                    <p class="text-[22px] font-bold">Orizzonter</p>
                </div>

                <!-- Menu de navegacion -->
                <div
                    class="nav-links duration-500 md:static absolute md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5 font-bold">
                    <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                        <li><a class="relative p-2 text-lg text-gray-700 cursor-pointer transition duration-300 ease-in-out 
                        hover:text-purple-600 
                            after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[3px] after:bg-purple-500 
                        after:transition-all after:duration-300 after:ease-in-out hover:after:w-full" href="#main">Inicio</a></li>
                        <li><a class="relative p-2 text-lg text-gray-700 cursor-pointer transition duration-300 ease-in-out 
                        hover:text-purple-600 
                        after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[3px] after:bg-purple-500 
                        after:transition-all after:duration-300 after:ease-in-out hover:after:w-full" href="#afterHeader">Caracterísitcas</a></li>
                        <li><a class="relative p-2 text-lg text-gray-700 cursor-pointer transition duration-300 ease-in-out 
                        hover:text-purple-600 
                        after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[3px] after:bg-purple-500 
                        after:transition-all after:duration-300 after:ease-in-out hover:after:w-full" href="#Services">Servicios</a></li>
                        <li><a class="relative p-2 text-lg text-gray-700 cursor-pointer transition duration-300 ease-in-out 
                        hover:text-purple-600 
                        after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[3px] after:bg-purple-500 
                        after:transition-all after:duration-300 after:ease-in-out hover:after:w-full" href=" {{route('formularios')}} ">Formularios</a></li>
                    </ul>
                </div>
                <!-- Sing in -->
                <div class="flex items-center gap-6">
                    <a href="{{ route('login') }}">
                        <button class="relative px-6 py-2 text-white font-semibold bg-purple-700 rounded-full shadow-md transition-all duration-300 ease-in-out 
                        hover:bg-purple-900 hover:shadow-lg hover:-translate-y-1 
                        active:scale-95 overflow-hidden">
                        <span class="absolute inset-0 bg-white opacity-10 rounded-full transition-all duration-300 group-hover:opacity-20"></span>
                        Sign in
                        </button>
                    </a>
                    <!-- Funcion navbar responsive -->
                    <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
                </div>
            </nav>
        </header>