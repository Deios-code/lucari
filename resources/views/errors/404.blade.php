<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Fundación Lucari') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @if (request()->routeIs('contacto'))
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
        @endif
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gudea:ital,wght@0,400;0,700;1,400&family=Gurajada&family=Hind+Guntur:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white flex flex-col justify-between">
            <div>
                <nav class="cont-navigation">
                    <div class="container flex justify-between items-center text-white py-3 px-2 text-center">
                        <img src="{{ asset('img/logo-footer.png') }}" alt="logo_fundacion" width="150px">
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
                <div id="drawer-navigation" class="bg-primary-transparent fixed top-0 left-0 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full" tabindex="-1" aria-labelledby="drawer-navigation-label" style="z-index: 1000!important;">
                    <div class="p-2">
                        <h5 id="drawer-navigation-label" class=" font-semibold text-alternative uppercase ms-3">Menu</h5>
                        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-alternative bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center" >
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close menu</span>
                        </button>
                    </div>
                    <div class="py-4 overflow-y-auto" style="z-index: 1000">
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
            </div>
            <section class="site-no-data flex flex-col justify-center items-center text-center">
                <div class="container p-10 flex flex-col items-center text-center h-full">
                    <style>
                        .site-no-data svg{
                            fill: var(--color-primary);
                        }
                    </style>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-20">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                    </svg>

                    <h1 class="mb-5">Oops! ha ocurrido un error</h1>
                    <p>Por favor, Intente mas tarde</p>
                </div>
            </section>
            <footer class="relative z-0 overflow-hidden">
                <div class="bg-primary">
                    <div class="text-white flex justify-around p-6">
                        <div class="card flex flex-col max-[962px]:text-center">
                            <img src="{{ asset('img/logo-footer.png') }}" alt="logo_lucari" class="mt-10 mb-4 h-28 md:h-40 w-fit max-[962px]:mx-auto">
                            <p>Fundación Luis Carlos Aristizabal</p>
                            <p>Patrocinada por Soberana S.A.S.</p>
                        </div>
                        <div class="">
                            <h4 class="max-[962px]:mb-4 mb-10">Menú de navegación</h4>
                            <nav class="menu-footer flex flex-col justify-center text-center">
                                <a href="/">Inicio</a>
                                <a href="/nosotros">Nosotros</a>
                                <a href="/nuestros-programas">Programas de la fundación</a>
                                <a href="/nuestras-historias">Historias</a>
                                <a href="/informes-gestion">Informes de gestión</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
