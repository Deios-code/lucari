<x-app-layout :infoContact="$data['infoContact']">
    <header class="site-stories relative">
        <div class="min-h-60 bg-contain md:bg-cover bg-center bg-no-repeat flex items-center justify-center" style="background-image: linear-gradient(rgba(5, 126, 63, 0.8),rgba(5, 126, 63, 0.8)),url('/img/bg-stories.jpg')">
            <div class="container">
                <h3 class="text-center text-white">Conéctate con las <span class="border-b-4">historias de cambio que hemos Hecho Posibles</span></h3>
            </div>
        </div>
    </header>
    @if ($status!=200)
        @include('layouts.no-data')
    @else
        <section class="site-stories cont-news bg-white p-6 lg:p-20">
            <div class="container flex flex-wrap justify-center gap-10 flex-col lg:flex-row">
                {{-- <a href="/nuestras-historias/titulo-en-slug" class="card border rounded-2xl p-5 basis-5/12"> --}}
                {{-- <div class="card border rounded-2xl p-5 basis-5/12">
                    <img src="{{ asset('img/news/img1.png') }}" class="rounded-2xl" alt="img_noticia_1">
                    <p class="font-bold border-b-4 my-4 tit-news"> ¡Entrega de Elementos Escolares en la Escuela 20 de Mayo, Cereté! </p>
                    <p class="mb-5">¡Hoy es un día especial! En la Fundación Lucari, <span class="font-bold">creemos que la educación es la llave para abrir un futuro mejor.</span> Por eso, estamos muy felices de entregar elementos escolares a los niños de la Escuela 20 de Mayo en Cereté.</p>
                    <p>Sabemos que con las herramientas adecuadas, estos pequeños pueden soñar en grande y cambiar el mundo. <span class="font-bold">Estamos aquí para apoyar esos sueños y, juntos, reducir la pobreza, paso a paso. ¡Vamos por más!</span></p>
                </div> --}}
                @foreach ($data['stories'] as $key => $item)
                    <div class="card border rounded-2xl p-5 basis-5/12">
                        <img src="{{ $item['url_image'] }}" class="rounded-2xl" alt="img_noticia_{{$key+1}}">
                        <p class="font-bold border-b-4 my-4 tit-news"> {{$item['title']}} </p>
                        {!! $item['description'] !!}
                    </div>
                @endforeach
                {{-- </a> --}}
                {{-- <a href="/nuestras-historias/titulo-en-slug" class="card border rounded-2xl p-5 basis-5/12"> --}}
                {{-- <div class="card border rounded-2xl p-5 basis-5/12">
                    <img src="{{ asset('img/news/img2.png') }}" class="rounded-2xl" alt="img_noticia_2">
                    <p class="font-bold border-b-4 my-4 tit-news"> ¡Entrega de Elementos Escolares en la Escuela 20 de Mayo, Cereté! </p>
                    <p class="mb-5"><span class="font-bold">¡Estamos súper emocionados de presentarte a los beneficiarios del Programa Escalar 2024!</span> En la Fundación Lucari, creemos firmemente en el poder de la educación para transformar vidas. <span class="font-bold">Este año, Álvaro José Gutiérrez (operario de producción en Cereté), Diego Armando Carvajal (auxiliar de cargue y descargue en Valledupar) y Yuris Camargo (auxiliar logístico en Bogotá) recibirán becas para seguir adelante con sus estudios superiores.</span></p>
                    <p>Estos jóvenes talentosos están a punto de cambiar sus vidas y las de sus familias. <span class="font-bold">¡Celebremos juntos este gran logro y sigamos construyendo un futuro mejor para todos!</span></p>
                </div> --}}
                {{-- </a> --}}
                {{-- <a href="/nuestras-historias/titulo-en-slug" class="card border rounded-2xl p-5 basis-5/12"> --}}
                {{-- <div class="card border rounded-2xl p-5 basis-5/12">
                    <img src="{{ asset('img/news/img3.png') }}" class="rounded-2xl" alt="img_noticia_3">
                    <p class="font-bold border-b-4 my-4 tit-news">¡457 almuerzos para acompañar a quienes más lo necesitan!</p>
                    <p class="mb-5">¡Hoy es un día especial! En la Fundación Lucari, <span class="font-bol">creemos que la educación es la llave para abrir un futuro mejor.</span> Por eso, estamos muy felices de entregar elementos escolares a los niños de la Escuela 20 de Mayo en Cereté.<</p>
                    <p>Los comentarios que recibimos fueron excelentes, destacando la cantidad, temperatura y presentación de los alimentos.<span class="font-bold"> ¡Nos alegra haber podido hacer más llevadero este proceso para tantas personas!</span></p>
                </div> --}}
                {{-- </a> --}}
                {{-- <a href="/nuestras-historias/titulo-en-slug" class="card border rounded-2xl p-5 basis-5/12"> --}}
                {{-- <div class="card border rounded-2xl p-5 basis-5/12">
                    <img src="{{ asset('img/news/img4.png') }}" class="rounded-2xl" alt="img_noticia_4">
                    <p class="font-bold border-b-4 my-4 tit-news">Renovamos 3 hogares en Cereté con nuestro programa "Techos de Amor"</p>
                    <p class="mb-5">Gracias a nuestro programa <span class="font-bold"> ‘‘Techos de Amor", hemos renovado 3 hogares de colaboradores de la empresa La Soberana en Cereté.</span> Ahora, Jhorman Alexander Regino Barrera, Manuel Guillermo Pérez Galeano y María Camila Puche Durango, junto a sus familias, disfrutan de un hogar más seguro y confortable.</p>
                    <p class="font-bold">Los comentarios que recibimos fueron excelentes, destacando la cantidad, temperatura y presentación de los alimentos. ¡Nos alegra haber podido hacer más llevadero este proceso para tantas personas!</p>
                </div> --}}
                {{-- </a> --}}
            </div>
        </section>
    @endif
    @include('layouts.footer')
</x-app-layout>
