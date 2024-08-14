<x-app-layout>
    <header class="site-stories relative">
        <div class="min-h-60 bg-contain md:bg-cover bg-center bg-no-repeat flex items-center justify-center" style="background-image: linear-gradient(rgba(5, 126, 63, 0.8),rgba(5, 126, 63, 0.8)),url('/img/bg-stories.jpg')">
                <h3 class="text-center text-white">Conéctate con las <span class="border-b-4">historias de cambio que hemos Hecho Posibles</span></h3>
        </div>
    </header>
    <section class="site-stories cont-news bg-white pt-10 pb-20">
        <div class="container">
            <!-- Breadcrumb -->
            <nav class="flex px-5 py-3 mb-10 capitalize" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                        </svg>
                        Inicio
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">nuestras historias</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                    <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">titulo sin slug</span>
                    </div>
                </li>
                </ol>
            </nav>
            <div href="/nuestras-historia/titulo-en-slug" class="card border rounded-2xl p-5">
                <div class="grid grid-cols-2 gap-10">
                    <img src="{{ asset('img/news/img4.png') }}" class="rounded-2xl" alt="img_noticia_4">
                    <div class="cont-info-new">
                        <p class="font-bold border-b-4 my-4 tit-news">Renovamos 3 hogares en Cereté con nuestro programa "Techos de Amor"</p>
                        <p class="mb-5">Gracias a nuestro programa <span class="font-bold"> ‘‘Techos de Amor", hemos renovado 3 hogares de colaboradores de la empresa La Soberana en Cereté.</span> Ahora, Jhorman Alexander Regino Barrera, Manuel Guillermo Pérez Galeano y María Camila Puche Durango, junto a sus familias, disfrutan de un hogar más seguro y confortable.</p>
                        <p class="font-bold">Los comentarios que recibimos fueron excelentes, destacando la cantidad, temperatura y presentación de los alimentos. ¡Nos alegra haber podido hacer más llevadero este proceso para tantas personas!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
</x-app-layout>
