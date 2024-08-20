<x-app-layout :infoContact="$data['infoContact']">
    @php
        $about = $data['about'];
    @endphp
    <header class="relative header-about">
        <img src="{{ asset('img/bg_about.jpeg') }}" alt="">
    </header>
    <section class="cont-about sobre-nosotros relative">
        <div class="img-flot-1 absolute top-6!important">
            <img src="{{ asset('img/utils/bar-primary.svg') }}" alt="">
        </div>
        <div class="container py-10 md:py-10 grid md:grid-cols-2 gap-4 items-center">
            <div class="gallery grid grid-cols-2 gap-4">
                <div class="grid gap-4">
                    <div>
                        <br>
                        <br>
                    </div>
                    <img class="rounded-lg" src="{{ $about['images'][0]['url_img'] }}" alt="img_site_lucari">
                    <img class="rounded-lg" src="{{ $about['images'][1]['url_img'] }}" alt="img_site_lucari">
                </div>
                <div class="grid gap-4">
                    <img class="rounded-lg" src="{{ $about['images'][2]['url_img'] }}" alt="img_site_lucari">
                    <img class="rounded-lg" src="{{ $about['images'][3]['url_img'] }}" alt="img_site_lucari">
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
                <div class="px-10">
                    <h4 class="text-primary border-l-4">Transformando Vidas desde 2014</h4>
                    {!! $about['history'] !!}
                </div>
            </div>
        </div>
    </section>
    <section class="nuestro-impacto sm:py-10 bg-white">
        <div class="container sm:px-5 md:px-10" style="background: linear-gradient(rgba(5, 126, 63, 0.87),rgba(5, 126, 63, 0.87)), url('../img/cont-1.jpg') no-repeat;background-size: cover;background-position: center;background-attachment: fixed;">
            <div class=" flex  max-[537px]:flex-col max-[537px]:text-center items-center justify-between txt-seccion">
                <p><span class="text-alternative font-bold">Haz parte del cambio.</span> Tu donación es la llave que abre puertas a un futuro más brillante para quienes más lo necesitan.</p>
                {{-- <a href="" class="btn btn-primary-dark flex items-center max-[537px]:mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="">
                        <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg>
                    <span>¡Quiero donar!</span>
                </a> --}}
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container grid lg:grid-cols-2 gap-4 bg-white">
            <div class="p-10 " style="background-color: #F3F4F6;">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m6.115 5.19.319 1.913A6 6 0 0 0 8.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 0 0 2.288-4.042 1.087 1.087 0 0 0-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 0 1-.98-.314l-.295-.295a1.125 1.125 0 0 1 0-1.591l.13-.132a1.125 1.125 0 0 1 1.3-.21l.603.302a.809.809 0 0 0 1.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 0 0 1.528-1.732l.146-.292M6.115 5.19A9 9 0 1 0 17.18 4.64M6.115 5.19A8.965 8.965 0 0 1 12 3c1.929 0 3.716.607 5.18 1.64" />
                    </svg>
                    <h4>{{ $about['tittle_mision'] }}</h4>
                </div>
                {!! $about['description_mision'] !!}
            </div>
            <div class="p-10" style="background-color: #F3F4F6;">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                    </svg>
                    <h4>{{ $about['tittle_vision'] }}</h4>
                </div>
                {!! $about['description_vision'] !!}

            </div>
        </div>
    </section>
    <section class="nuestros-valores relative bg-white pt-10">
        <div class="container flex flex-col">
            <div class="img-flot-4 absolute">
                <img src="{{ asset('img/utils/flot4.svg') }}" alt="">
            </div>
            <div class="titulo-seccion z-50">
                <h5>Nuestros Valores</h5>
            </div>
            <div class="cont-valores min-[911px]:flex min-[1131px]:items-center border-4 rounded-2xl">
                @foreach ($about['valores'] as $key => $item)
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
    @include('layouts.footer')
</x-app-layout>
