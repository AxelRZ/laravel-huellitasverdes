<header
        class="  w-full bg-white border-huellitas_brown fixed h-12  shadow-lg nav-border" style="z-index: 100;">
        <div class="navwrapper flex flex-wrap  h-full mx-auto items-center justify-between ">


            <div class=" whitespace-no-wrap flex-shrink ml-4 ">
                <i class="fas fa-paw fa-2x fill-current text-huellitas_brown "></i>
                <a href="/" class="text-3xl  mx-auto font-bold ">Huellitas <span
                        class=" text-huellitas_green">verdes</span>
                </a>

            </div>

            <div class="flex nav-btn flex-center md:hidden mr-4">
                <button class="focus:outline-none focus:text-huellitas_brown transition-colors ease duration-200 ">

                    <svg viewBox="0 0 100 100" width="30" height="20" class=" fill-current">
                        <rect width="100" height="20"></rect>
                        <rect y="40" width="100" height="20"></rect>
                        <rect y="80" width="100" height="20"></rect>
                    </svg>

                </button>
            </div>

            <div
                class=" hidden block nav-nav w-full md:w-1/2  md:flex md:mr-4 md:border-0 md:shadow-none nav-border shadow-lg">
                <ul class="md:flex md:space-x-5 px-5 py-3  md:py-0 md:px-0 text-xl md:ml-auto bg-white">






                <li><a href="/news" class="{{ (request()->is('/news'))?'font-bold':'' }}">Noticias</a></li>
                @auth
                    @if(auth()->user()->isAdmin())
                    <li><a href="/admin" class="{{ (request()->is('/admin'))?'font-bold':'' }}">Panel de administrador</a></li>
                    @endif

                <li><a href="/logout" class="">Salir</a></li>
                
                @endauth

                @guest
                    <li><a href="/login" class="">Ingresar</a></li>
                    
                    
                @endguest

                





                </ul>

            </div>


        </div>

</header>
