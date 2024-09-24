<x-app-layout>
    {{-- <header class="cont-header-main flex flex-col justify-between" style="background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.7)), url('/img/banner-main.jpg') no-repeat center center/cover;"> --}}
    <header class="cont-header-main relative">
        <div class="absolute top-0 z-10 w-full">
            @include('layouts.bar-top', ['infoContact' => $data['infoContact'] ,'route' => 'home'])
            @include('layouts.navigation', ['infoContact' => $data['infoContact'] ,'route' => 'home'])
        </div>
        @include('pages.main.slider')
    </header>
    <section class="cont-numeros">
        <div class="container cards-valores">
            <div class="flex flex-col border-r-2 px-4 card-valor">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="">
                        <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                        <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                    </svg>
                    <p id="animatedNumberOne" class="number">0</p>
                </div>
               <p class="">Personas <b>Beneficiadas</b></p>
            </div>
            <div class="flex flex-col border-r-2 px-4 card-valor">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="">
                        <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg>
                    <p id="animatedNumberTwo" class="number">0</p>
                </div>
                <p class="">Millones de pesos en <b>Donaciones</b></p>
            </div>
            <div class="flex flex-col border-r-2 px-4 card-valor">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="">
                        <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                        <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                        <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                    </svg>
                    <p id="animatedNumberThree" class="number">0</p>
                </div>
               <p class="">Millones de pesos invertidos en <b>Educación</b></p>
            </div>
            <div class="flex flex-col px-4 card-valor">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="">
                        <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                        <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                    </svg>
                    <p id="animatedNumberFour" class="number">0</p>
                </div>
               <p class="">Millones de pesos en <b>Auxilios de Vivienda</b></p>
            </div>

        </div>
    </section>
    <section class="nuestro-impacto">
        <div class="container sm:px-5 md:px-10" style="background: linear-gradient(rgba(5, 126, 63, 0.87),rgba(5, 126, 63, 0.87)), url('../img/cont-1.jpg') no-repeat;background-size: cover;background-position: center;background-attachment: fixed;">
            <div class="titulo-seccion">
                <h5>NUESTRO IMPACTO</h5>
            </div>
            <div class=" flex  items-center justify-center txt-seccion" data-aos="fade-right">
                <p class="text-center"><span class="text-alternative font-bold text-center">Haz parte del cambio.</span> Tu donación es la llave que abre puertas a un futuro más brillante para quienes más lo necesitan.</p>
                {{-- <a href="" class="btn btn-primary-dark flex items-center max-[537px]:mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="">
                        <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg>
                    <span>¡Quiero donar!</span>
                </a> --}}
            </div>
        </div>
    </section>
    <section class="sobre-nosotros relative">
        <div class="img-flot-1 absolute">
            <img src="{{ asset('img/utils/bar-primary.svg') }}" alt="" data-aos="fade-right">
        </div>
        <div class="container py-10 md:py-20 grid md:grid-cols-2 gap-4 items-center">
            <div class="gallery grid grid-cols-2 gap-4">
                <div class="grid gap-4">
                    <div>
                        <br>
                        <br>
                    </div>
                    <img class="rounded-lg" src="{{ asset('img/about/img1.jpg') }}" alt="img_site_lucari" data-aos="fade-up">
                    <img class="rounded-lg" src="{{ asset('img/about/img2.jpg') }}" alt="img_site_lucari" data-aos="fade-up">
                </div>
                <div class="grid gap-4">
                    <img class="rounded-lg" src="{{ asset('img/about/img3.jpg') }}" alt="img_site_lucari" data-aos="fade-up">
                    <img class="rounded-lg" src="{{ asset('img/about/img4.png') }}" alt="img_site_lucari" data-aos="fade-up">
                    <br>
                </div>
            </div>
            <div class="txt-nosotros">
                <div class="img-flot-2 absolute hidden md:block">
                    <img src="{{ asset('img/utils/flot2.svg') }}" alt="">
                </div>
                <div class="img-flot-3 absolute hidden md:block">
                    <img src="{{ asset('img/utils/flot3.svg') }}" alt="">
                </div>
                <h4 class="text-primary border-l-4" data-aos="fade-in">Transformando Vidas desde 2014</h4>
                <p class="lg:my-10" data-aos="fade-in">Desde nuestro inicio en 2014, nos hemos comprometido a transformar la vida de las comunidades más vulnerables. Con el apoyo de la Familia Aristizábal Zuluaga y la colaboración de Soberana SAS, <span class="font-bold">trabajamos cada día para ser el impulso que estas familias necesitan para crear un mañana mejor.</span></p>
                <div class="flex items-center mt-4" data-aos="fade-in">
                    <a href="" class="btn btn-primary">
                        <span>Conoce más sobre nosotros</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="nuestros-valores relative">
        <div class="container flex flex-col">
            <div class="img-flot-4 absolute">
                <img src="{{ asset('img/utils/flot4.svg') }}" alt="">
            </div>
            <div class="titulo-seccion" data-aos="fade-up-right">
                <h5>Nuestros Valores</h5>
            </div>
            <div class="cont-valores grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 min-[1131px]:items-center border-4 rounded-2xl" data-aos="fade-up-right">
                @foreach ($data['valores'] as $key => $item)
                    @if ($key == 1)
                        <div class="card px-4 max-[911px]:py-8 min-[911px]:border-r-4 min-[911px]:border-l-4">
                            <h4>{{ $item['title'] }}</h4>
                            {!! $item['description'] !!}
                        </div>
                    @else
                        <div class="card px-4">
                            <h4>{{ $item['title'] }}</h4>
                            {!! $item['description'] !!}
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <div class="cont-flotante relative">
        <div class="img-flot-5 absolute hidden md:block">
            <img src="{{ asset('img/utils/flot5.svg') }}" alt="">
        </div>
        <div class="img-flot-6 absolute hidden min-[556px]:block">
            <img src="{{ asset('img/utils/flot2.svg') }}" alt="">
        </div>
    </div>
    <section class="nuestros-programas">
        <div class="py-4 min-[1131px]:py-20 container text-center">
            <div class="txt-titulo-programas" data-aos="fade-up">
                <h3>Alineados con los Objetivos de Desarrollo Sostenible (ODS)</h3>
                <p>Nuestras acciones están alineadas con los ODS, especialmente en la lucha contra la pobreza (ODS 1) y el hambre (ODS 2). <span class="font-bold">Trabajamos para construir un país más justo y equitativo, donde todos tengan la oportunidad de prosperar.</span></p>
            </div>
            <div class="titulo-seccion">
                <h4>Nuestros Programas</h4>
            </div>
            @php
                $titleOne = $data['programOne']['header']['title']['title'];
                $titleTwo = $data['programTwo']['header']['title']['title'];
                $titleThree = $data['programThree']['header']['title']['title'];
                $titleFour = $data['programFour']['header']['title']['title'];
            @endphp
            <div class="cont-programas grid min-[768px]:grid-cols-2 min-[1131px]:grid-cols-4 sm:gap-4 md:gap-6" data-aos="fade-right">
                <a href="/" class="card relative" style="background: linear-gradient(rgba(5, 126, 63, 0.87),rgba(5, 126, 63, 0.87)), url('../img/programs/img1.png') no-repeat;background-size: cover;">
                    <div class="txt-card">
                        <h4>{!!$titleFour!!}</h4>
                        <p><span class="font-bold">Línea Estratégica:</span> Vivienda, ODS 1</p>
                    </div>
                    <div class="hover-card flex items-center">
                        <p>Mejoramos las condiciones de vivienda de familias en situación de pobreza extrema, <span class="font-bold">ofreciendo subsidios para que puedan adquirir, construir o renovar hogares dignos.</span></p>
                    </div>
                </a>
                <div class="card relative" style="background: linear-gradient(rgba(5, 126, 63, 0.87),rgba(5, 126, 63, 0.87)), url('../img/programs/img2.png') no-repeat;background-size: cover;">
                    <div class="txt-card">
                        <h4>{!!$titleTwo!!}</h4>
                        <p><span class="font-bold">Línea Estratégica:</span> Educación, ODS 1</p>
                    </div>
                    <div class="hover-card flex items-center">
                        <p>Brindamos becas y subsidios para que jóvenes de comunidades vulnerables <span class="font-bold">puedan acceder a educación superior</span>, rompiendo el ciclo de la pobreza y transformando sus vidas.</p>
                    </div>
                </div>
                <div class="card relative" style="background: linear-gradient(rgba(5, 126, 63, 0.87),rgba(5, 126, 63, 0.87)), url('../img/programs/img3.png') no-repeat;background-size: cover;">
                    <div class="txt-card">
                        <h4>{!!$titleThree!!}</h4>
                        <p><span class="font-bold">Línea Estratégica:</span> Educación y Alimentación, ODS 1 y 2</p>
                    </div>
                    <div class="hover-card flex items-center">
                        <p>Mejoramos integralmente escuelas rurales, proporcionando alimentación, infraestructura, insumos escolares y formación artística para los estudiantes. Además, <span class="font-bold">trabajamos con el SENA para formar a los padres y mejorar sus oportunidades laborales.</span></p>
                    </div>
                </div>
                <div class="card relative" style="background: linear-gradient(rgba(5, 126, 63, 0.87),rgba(5, 126, 63, 0.87)), url('../img/programs/img4.png') no-repeat;background-size: cover;">
                    <div class="txt-card">
                        <h4>{!!$titleOne!!}</h4>
                        <p><span class="font-bold">Línea Estratégica:</span> Alimentación, ODS 2</p>
                    </div>
                    <div class="hover-card flex items-center">
                        <p>En colaboración con otras entidades, distribuimos alimentos a comunidades vulnerables en todo el país, <span class="font-bold">luchando contra la inseguridad alimentaria y garantizando el acceso a alimentos nutritivos.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video-historia bg-white">
        <div class="container py-10">
            <div class="flex flex-col">
                <h3 class="my-0 mb-10 mx-auto text-center w-fit">Conéctate con las historias de cambio que hemos Hecho Posibles</h3>
                <div class="video z-10">
                    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/kClhLhDdbjQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <div class="cont-flotante relative z-0">
        <div class="img-flot-7 absolute -left-48 -top-24">
            <img src="{{ asset('img/utils/flot4.svg') }}" alt="">
        </div>
    </div>
    <section class="nuestras-noticias py-10">
        <div class="container grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($data['stories'] as $key => $item)
                <div class="bg-white card z-0 rounded-lg border-2" data-aos="fade-right">
                    <img src="{{ $item['url_image'] }}" alt="img_noticias_{{$key+1}}" class="rounded-t-lg max-[1400px]:min-h-80 min-[1400px]:max-h-60 object-cover w-full">
                    <div class="txt-card p-6">
                        <h5 class="border-b-4 w-fi ">{{ $item['title'] }}</h5>
                        <div class="flex justify-end my-4">
                            <a href="/nuestras-historias" class="flex items-center hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                                </svg>
                                Leer Más
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="nuestros-aliados bg-white pt-10 pb-0 min-[1131px]:py-10">
        <div class="container" data-aos="fade-up-right">
            <h3 class="text-center border-b-4 w-fit my-0 mx-auto pb-2">Descubre las alianzas que potencian nuestro impacto.</h3>
            <div class="scroll-container">
                <div class="scroll-content">
                    @foreach ($data['allies'] as $item)
                        <img src="{{ $item['url_img'] }}" alt="{{$item['img']}}">
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
</x-app-layout>
