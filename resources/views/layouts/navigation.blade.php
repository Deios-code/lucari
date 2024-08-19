@if (!request()->routeIs('home'))
    <nav class="cont-navigation">
@else
    <nav class="cont-navigation-main">
@endif
    <div class="container flex justify-between items-center text-white py-3 px-2 text-center">
        <x-app-logo :logo="$infoContact['url_logo']"/>
        <div class="items-center hidden lg:flex">
            <a href="/" class="{{request()->routeIs('home') ? 'active' : ''}}">Inicio</a>
            <a href="/nosotros" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a>
            <a href="/nuestros-programas" class="{{request()->routeIs('nuestros-programas') ? 'active' : ''}}">Programas de la fundación</a>
            <a href="/nuestras-historias" class="{{request()->routeIs('nuestras-historias') ? 'active' : ''}}">Historias</a>
            <a href="/informes-gestion" class="{{request()->routeIs('informes-gestion') ? 'active' : ''}}">Informes de gestión</a>
        </div>
        <a href="/contacto" class="hidden lg:block btn btn-transparent-secondary {{ request()->routeIs('contacto') ? 'btn-active' : ''}}">contacto</a>
        <div class="text-center lg:hidden">
            <button class="text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </div>
</nav>

<div id="drawer-navigation" class="bg-primary-transparent fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <div class="p-2">
        <h5 id="drawer-navigation-label" class=" font-semibold text-alternative uppercase ms-3">Menu</h5>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-alternative bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center" >
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Close menu</span>
        </button>
    </div>
    <div class="py-4 overflow-y-auto">
        {{-- <img src="assets/img/logo.png" alt="" width="150px" class="mb-4"> --}}
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/" class="flex items-center p-2 text-gray-50 rounded-lg hover:bg-green-500 group">
                    <span class="ms-3">Inicio</span>
                </a>
            </li>
            <li>
                <a href="/nosotros" class="flex items-center p-2 text-gray-50 rounded-lg hover:bg-green-500 group">
                    <span class="ms-3">Nosotros</span>
                </a>
            </li>
            <li>
                <a href="/nuestros-programas" class="flex items-center p-2 text-gray-50 rounded-lg hover:bg-green-500 group">
                    <span class="ms-3">Programas de la fundación</span>
                </a>
            </li>
            <li>
                <a href="/nuestras-historias" class="flex items-center p-2 text-gray-50 rounded-lg hover:bg-green-500 group">
                    <span class="ms-3">Historias</span>
                </a>
            </li>
            <li>
                <a href="/informes-gestion" class="flex items-center p-2 text-gray-50 rounded-lg hover:bg-green-500 group">
                    <span class="ms-3">Informes de gestión</span>
                </a>
            </li>
            <li>
                <a href="/contacto" class="flex items-center p-2 text-gray-50 rounded-lg hover:bg-green-500 group">
                    <span class="ms-3">Contacto</span>
                </a>
            </li>
        </ul>
    </div>
</div>

@include('layouts.flotantes')
