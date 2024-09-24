<footer class="relative z-0 overflow-hidden">
    <div class="cont-flotante" data-aos="fade-up">
        <div class="img-flot-2 absolute -right-32 top-0 min-[1131px]:top-10 hidden md:block">
            <img src="{{ asset('img/utils/flot2.svg') }}" alt="img_flotante_lucari">
        </div>
        <div class="img-flot-3 absolute -right-32 md:top-10 hidden md:block">
            <img src="{{ asset('img/utils/flot3.svg') }}" alt="img_flotante_lucari">
        </div>
    </div>
    <div class="z-0 min-[1400px]:max-h-96 max-[1400px]:max-h-72 bg-white ">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#057E3F" fill-opacity="1" d="M0,224L120,213.3C240,203,480,181,720,192C960,203,1200,245,1320,266.7L1440,288L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
    </div>
    <div class="bg-primary">
        <div class="text-white grid sm:grid-cols-1  min-[962px]:grid-cols-3 xl:gap-10 pb-10  max-w-fit mx-auto">
            <div class="card flex flex-col max-[962px]:text-center">
                <img src="{{ asset('img/logo-footer.png') }}" alt="logo_lucari" class="mt-10 md:-mt-10 mb-4 h-28 md:h-40 w-fit max-[962px]:mx-auto">
                <p>Fundación Luis Carlos Aristizabal</p>
                <p>Patrocinada por Soberana S.A.S.</p>
            </div>
            <div class="card max-[962px]:text-center max-[962px]:my-10">
                <h4 class="max-[962px]:mb-4 mb-10">Menú de navegación</h4>
                <nav class="menu-footer flex flex-col">
                    <a href="/">Inicio</a>
                    <a href="/nosotros">Nosotros</a>
                    <a href="/nuestros-programas">Programas de la fundación</a>
                    <a href="/nuestras-historias">Historias</a>
                    <a href="/informes-gestion">Informes de gestión</a>
                </nav>
            </div>
            <div class="card max-[962px]:flex max-[962px]:flex-col max-[962px]:items-center">
                <h4 class="mb-10">Información de contacto</h4>
                <a href="tel:{{ $data['infoContact']['phone']  }}" class="mr-4 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                    <span class="ml-2">{{ $data['infoContact']['fullPhone']  }}</span>
                </a>
                <a href="mailto:{{ $data['infoContact']['email']  }}" class="mr-4 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                    <span class="ml-2">{{ $data['infoContact']['email']  }}</span>
                </a>
                <a href="https://maps.app.goo.gl/LZ7dAck2a1hGAPM9A" target="_blank" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    <span class="ml-2">{{ $data['infoContact']['address']  }}</span>
                </a>
                <ul class="text-sm flex items-center gap-10 py-2">
                    <li>
                        <a href="{{ $data['infoContact']['facebook']  }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5" fill="var(--color-secondary)">
                                <path d="M22.675,0H1.325C0.593,0,0,0.593,0,1.325v21.351C0,23.407,0.593,24,1.325,24h11.495v-9.294H9.691v-3.622h3.128 V8.414c0-3.1,1.893-4.788,4.658-4.788c1.325,0,2.464,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.794,0.715-1.794,1.762v2.311 h3.588l-0.468,3.622h-3.12V24h6.116C23.407,24,24,23.407,24,22.675V1.325C24,0.593,23.407,0,22.675,0z"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $data['infoContact']['instagram']  }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5" fill="var(--color-secondary)">
                                <path d="M12,2.2c3.2,0,3.6,0,4.8,0.1c1.2,0,2,0.2,2.5,0.4c0.6,0.2,1,0.5,1.5,1s0.8,0.9,1,1.5c0.2,0.5,0.4,1.3,0.4,2.5
                                c0.1,1.2,0.1,1.6,0.1,4.8s0,3.6-0.1,4.8c0,1.2-0.2,2-0.4,2.5c-0.2,0.6-0.5,1-1,1.5s-0.9,0.8-1.5,1c-0.5,0.2-1.3,0.4-2.5,0.4
                                c-1.2,0.1-1.6,0.1-4.8,0.1s-3.6,0-4.8-0.1c-1.2,0-2-0.2-2.5-0.4c-0.6-0.2-1-0.5-1.5-1s-0.8-0.9-1-1.5c-0.2-0.5-0.4-1.3-0.4-2.5
                                c-0.1-1.2-0.1-1.6-0.1-4.8s0-3.6,0.1-4.8c0-1.2,0.2-2,0.4-2.5c0.2-0.6,0.5-1,1-1.5s0.9-0.8,1.5-1c0.5-0.2,1.3-0.4,2.5-0.4
                                C8.4,2.2,8.8,2.2,12,2.2 M12,0C8.7,0,8.3,0,7.1,0.1c-1.2,0.1-2.3,0.3-3.1,0.6C3,0.9,2.2,1.4,1.5,2C0.9,2.7,0.4,3.5,0.2,4.4
                                C-0.1,5.2,0,6.3,0,7.5C0,8.7,0,9.1,0,12c0,2.9,0,3.3,0.1,4.5c0.1,1.2,0.3,2.3,0.6,3.1c0.3,0.8,0.8,1.6,1.5,2.2c0.6,0.6,1.4,1.1,2.2,1.5
                                c0.8,0.3,1.9,0.5,3.1,0.6C8.3,24,8.7,24,12,24s3.7,0,4.9-0.1c1.2-0.1,2.3-0.3,3.1-0.6c0.8-0.3,1.6-0.8,2.2-1.5c0.6-0.6,1.1-1.4,1.5-2.2
                                c0.3-0.8,0.5-1.9,0.6-3.1c0.1-1.2,0.1-1.6,0.1-4.5s0-3.7-0.1-4.9c-0.1-1.2-0.3-2.3-0.6-3.1c-0.3-0.8-0.8-1.6-1.5-2.2
                                c-0.6-0.6-1.4-1.1-2.2-1.5c-0.8-0.3-1.9-0.5-3.1-0.6C15.7,0,15.3,0,12,0L12,0z M12,5.8c-3.4,0-6.2,2.7-6.2,6.2s2.7,6.2,6.2,6.2
                                s6.2-2.7,6.2-6.2S15.4,5.8,12,5.8L12,5.8z M18.4,4.3c-0.8,0-1.4,0.6-1.4,1.4s0.6,1.4,1.4,1.4s1.4-0.6,1.4-1.4S19.2,4.3,18.4,4.3
                                L18.4,4.3z M12,7.3c2.6,0,4.7,2.1,4.7,4.7S14.6,16.7,12,16.7s-4.7-2.1-4.7-4.7S9.4,7.3,12,7.3L12,7.3z"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $data['infoContact']['linkedin']  }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5" fill="var(--color-secondary)">
                                <path d="M22.23,0H1.77C0.79,0,0,0.77,0,1.72v20.56C0,23.23,0.79,24,1.77,24h20.46C23.21,24,24,23.23,24,22.28V1.72
                                C24,0.77,23.21,0,22.23,0z M7.12,20.45H3.56V9H7.12V20.45z M5.34,7.66c-1.14,0-2.07-0.92-2.07-2.06c0-1.14,0.93-2.06,2.07-2.06
                                c1.14,0,2.07,0.92,2.07,2.06C7.41,6.73,6.48,7.66,5.34,7.66z M20.45,20.45h-3.56v-5.65c0-1.35-0.03-3.08-1.88-3.08
                                c-1.88,0-2.17,1.47-2.17,2.99v5.75h-3.56V9h3.42v1.56h0.05c0.48-0.91,1.66-1.88,3.42-1.88c3.65,0,4.33,2.4,4.33,5.51v6.26H20.45z"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $data['infoContact']['url_whatsapp']  }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5" fill="var(--color-secondary)">
                                <path d="M16.012,2.403c-7.5,0-13.609,6.11-13.609,13.609c0,2.392,0.625,4.738,1.807,6.813L2.41,29.596l6.876-1.794
                                c1.998,1.089,4.217,1.664,6.522,1.664c7.5,0,13.609-6.11,13.609-13.609C29.621,8.513,23.512,2.403,16.012,2.403z M16.012,26.77
                                c-2.086,0-4.114-0.565-5.887-1.631l-0.421-0.248l-4.087,1.067l1.087-4.003l-0.273-0.429c-1.084-1.705-1.655-3.679-1.655-5.671
                                c0-6.031,4.91-10.941,10.941-10.941c2.924,0,5.674,1.14,7.744,3.212s3.212,4.82,3.212,7.744
                                C26.953,21.859,22.043,26.77,16.012,26.77z M21.573,19.948c-0.351-0.176-2.084-1.029-2.409-1.145
                                c-0.324-0.118-0.561-0.176-0.799,0.176c-0.236,0.351-0.915,1.145-1.122,1.381c-0.208,0.236-0.416,0.266-0.768,0.088
                                c-0.351-0.176-1.48-0.545-2.821-1.739c-1.042-0.928-1.747-2.074-1.952-2.426c-0.204-0.351-0.022-0.543,0.154-0.719
                                c0.158-0.158,0.351-0.416,0.527-0.624c0.176-0.208,0.234-0.355,0.351-0.591c0.118-0.236,0.059-0.443-0.03-0.624
                                c-0.088-0.176-0.799-1.923-1.097-2.641c-0.289-0.694-0.581-0.601-0.799-0.612c-0.208-0.012-0.443-0.012-0.68-0.012
                                c-0.236,0-0.617,0.088-0.937,0.443c-0.324,0.351-1.226,1.198-1.226,2.922c0,1.724,1.234,3.387,1.404,3.623
                                c0.176,0.236,2.429,3.73,5.899,5.23c0.826,0.355,1.468,0.566,1.969,0.723c0.828,0.263,1.582,0.226,2.179,0.137
                                c0.665-0.098,2.084-0.851,2.377-1.673c0.293-0.82,0.293-1.527,0.205-1.673C21.974,20.117,21.924,20.065,21.573,19.948z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<section class="developer" id="developer">
    <div class="bg-dark p-4 text-center text-white">
        <p>{{$data['infoContact']['txt_developed']}}<span class="font-bold"><a href="{{$data['infoContact']['url_developed']}}" target="_blank"> By {{$data['infoContact']['developed']}}</a></span></p>
    </div>
</section>

