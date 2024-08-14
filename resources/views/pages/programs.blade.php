<x-app-layout>
    <header class="relative header-programs">
        <div class="container">
            <img src="{{ asset('img/programs/bg/bg1.jpg') }}" alt="img_programs_lucari" class="w-full h-60 object-cover">
            <img src="{{ asset('img/programs/bg/bg2.jpg') }}" alt="img_programs_lucari" class="w-full h-60 object-cover">
            <img src="{{ asset('img/programs/bg/bg3.jpg') }}" alt="img_programs_lucari" class="w-full h-60 object-cover">
        </div>
    </header>
    <section class="site-programs nuestros-programas bg-white">
        <div class="py-4 min-[1131px]:py-20 container text-center">
            <div class="txt-titulo-programas">
                <h3>Alineados con los Objetivos de Desarrollo Sostenible (ODS)</h3>
                <p class="text-justify">Nuestras acciones están alineadas con los Objetivos de Desarrollo Sostenible (ODS), un llamado global adoptado por la ONU en 2015 para poner fin a la pobreza y combatir el hambre. En la Fundación LUCARI,
                    <span class="font-bold"> trabajamos incansablemente para construir un país más justo y equitativo, donde todos tengan la oportunidad de prosperar.</span>
                Con el respaldo de nuestro principal aliado y benefactor, la Empresa Soberana SAS, nuestra misión se enmarca en esta ruta de trabajo para generar un impacto real y duradero en las comunidades más vulnerables.</p>
            </div>
            <div class="cont-cards grid grid-cols-3 gap-10">
                <div class="card p-10 border-2 bg-primary-alternative rounded-2xl">
                    <p>Queremos que ningún
                        empleado de Soberana SAS
                        y Transportes el Roble viva
                        en pobreza extrema.</p>
                </div>
                <div class="card p-10 border-2 rounded-2xl">
                    <p>Ofrecemos becas para educación
                        superior a jóvenes de comunidades
                        vulnerables mediante el <span class="font-bold">“Programa
                        Escalar” y apoyamos a las escuelas
                        rurales con los programas “Rumbo a
                        la Escuela” y “Nutrimos Corazones”
                        (ODS 1 y ODS 2).</span></p>
                </div>
                <div class="card p-10 border-2 bg-primary-alternative rounded-2xl">
                    <p>Queremos que todos
                        tengan acceso a alimentos
                        nutritivos.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="nuestros-programas">
        <div class="py-4 min-[1131px]:py-10 container text-center">
            <div class="titulo-seccion">
                <h4>Nuestros Valores</h4>
            </div>

            <div class="site-programs cont-programas grid min-[768px]:grid-cols-2 min-[1131px]:grid-cols-4 sm:gap-4 md:gap-6" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <button id="one-tab" data-tabs-target="#one" type="button" role="tab" aria-controls="one" aria-selected="true" class="btnProgram card relative bg-no-repeat bg-cover" data-bg="../img/programs/img1.png" style="">
                    <div class="txt-card">
                        <h4>Techos de <span>Amor</span></h4>
                        <p><span class="font-bold">Línea Estratégica:</span> Vivienda, ODS 1</p>
                    </div>
                </button>
                <button id="two-tab" data-tabs-target="#two" type="button" role="tab" aria-controls="two" aria-selected="false" class="btnProgram card relative bg-no-repeat bg-cover" data-bg="../img/programs/img2.png" style="">
                    <div class="txt-card">
                        <h4>Programa <span>Escalar</span></h4>
                        <p><span class="font-bold">Línea Estratégica:</span> Educación, ODS 1</p>
                    </div>
                </button>
                <button id="three-tab" data-tabs-target="#three" type="button" role="tab" aria-controls="three" aria-selected="false" class="btnProgram card relative bg-no-repeat bg-cover" data-bg="../img/programs/img3.png" style="">
                    <div class="txt-card">
                        <h4>Techos de <span>Amor</span></h4>
                        <p><span class="font-bold">Línea Estratégica:</span> Educación y Alimentación, ODS 1 y 2</p>
                    </div>
                </button>
                <button id="four-tab" data-tabs-target="#four" type="button" role="tab" aria-controls="four" aria-selected="false" class="btnProgram card relative bg-no-repeat bg-cover" data-bg="../img/programs/img4.png" style="">
                    <div class="txt-card">
                        <h4>Nutrimos <span>Corazones</span></h4>
                        <p><span class="font-bold">Línea Estratégica:</span> Alimentación, ODS 2</p>
                    </div>
                </button>
            </div>
        </div>
    </section>
    <section class="my-10 relative">
        <div class="container cont-info-card z-50">
            <div id="default-tab-content relative">
                <div class="hidden rounded-2xl bg-white overflow-hidden relative z-50" id="one" role="tabpanel" aria-labelledby="one-tab">
                    <div class="card flex flex-col">
                        <div class="h-48 bg-cover bg-no-repeat bg-center" style="background-image: url('img/programs/card_programs/pro1.png')"></div>
                        <div class="card-body p-10">
                            <div class="header grid grid-cols-2 gap-10">
                                <div class="titulo p-5">
                                    <div class="flex items-center mb-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                                        </svg>
                                        <h4 class="border-b-4 ml-4">Techos de Amor</h4>
                                    </div>
                                    <p>Este programa busca ayudarte a ti y a tu familia a tener una vivienda digna.
                                        <span class="font-bold">Queremos mejorar la calidad de vida de las familias más vulnerables a través
                                        de la adquisición, construcción o mejora de viviendas.</span></p>
                                </div>
                                <div class="como_puedo p-5" style="background-color: #F3F3F3;">
                                    <h4 class="mb-10">Cómo puedes beneficiarte:</h4>
                                    <ol class="list-inside list-decimal">
                                        <li>Subsidio para comprar tu vivienda propia.</li>
                                        <li>Subsidio para renovar o construir tu vivienda si no cumple con las condiciones mínimas que dignifican al ser humano.</li>
                                    </ol>
                                </div>
                            </div>
                            <hr class="m-5">
                            <div class="body p-5 pt-0">
                                <h4 class="mb-8">Requisitos:</h4>
                                <ul class="list-inside list-disc">
                                    <li>No haber sido beneficiado por otro programa de la Fundación LUCARI.</li>
                                    <li>Los ingresos familiares totales no deben superar los 2 salarios mínimos.</li>
                                    <li>Estrato socioeconómico 1 y 2.</li>
                                    <li>Completar la encuesta virtual de caracterización socioeconómica.</li>
                                    <li>Si eres colaborador de Soberana SAS o el Roble SAS, debes tener una antigüedad verificable en la empresa de al menos 2 años</li>
                                    <li>y un proyecto de vida que contemple a la compañía.</li>
                                    <li>Tener claros los valores, tiempos y entidades (constructoras y bancarias) que harán realidad el proyecto.</li>
                                    <li>Haber recibido la visita domiciliaria y entrevista por parte de nuestros profesionales.</li>
                                    <li>Ser aprobado por el comité administrativo de la fundación.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden rounded-2xl bg-white overflow-hidden relative z-50" id="two" role="tabpanel" aria-labelledby="two-tab">
                    <div class="card flex flex-col">
                        <div class="h-48 bg-cover bg-no-repeat bg-top" style="background-image: url('img/programs/card_programs/pro2.jpeg')"></div>
                        <div class="card-body p-10">
                            <div class="header grid grid-cols-2 gap-10">
                                <div class="titulo p-5">
                                    <div class="flex items-center mb-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                                        </svg>
                                        <h4 class="border-b-4 ml-4">Programa Escalar</h4>
                                    </div>
                                    <p><span class="font-bold">Este programa te ayuda a ti y a otros jóvenes de comunidades vulnerables a
                                        transformar su vida a través de la educación.</span> Financiará carreras técnicas,
                                        tecnológicas o universitarias, proporcionando becas y subsidios de sostenimiento. </p>
                                </div>
                                <div class="como_puedo p-5" style="background-color: #F3F3F3;">
                                    <h4 class="mb-10">Cómo puedes beneficiarte:</h4>
                                    <ol class="list-inside list-decimal">
                                        <li>Beca hasta del 80% para carreras técnicas,tecnológicas y universitarias.</li>
                                        <li>Apoyo de sostenimiento durante tu formación.</li>
                                    </ol>
                                </div>
                            </div>
                            <hr class="m-5">
                            <div class="body p-5 pt-0 grid grid-cols-2 gap-10">
                                <div class="px-5" style="background-color: #F3F3F3;">
                                    <h4 class="mb-8">Requisitos:</h4>
                                    <ul class="list-inside list-disc">
                                        <li>Tener entre 16 y 25 años y ser miembro de las comunidades donde actuamos (si eres colaborador de Soberana o El Roble, la edad es evaluable).</li>
                                        <li>Los ingresos totales en el hogar no deben superar los 2 salarios mínimos.</li>
                                        <li>Estrato socioeconómico 1 y 2.</li>
                                        <li>Completar la encuesta virtual de caracterización socioeconómica.</li>
                                        <li>Haber sido admitido en el programa académico de tu elección.</li>
                                        <li>Tener claros los criterios necesarios para el ingreso a la institución educativa, costos y programa.</li>
                                        <li>Haber sido preseleccionado y haber recibido la visita domiciliaria y entrevista por parte de nuestros profesionales.</li>
                                        <li>Ser aprobado por el comité administrativo de la fundación.</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="mb-8">Condiciones para mantener la beca:</h4>
                                    <ul class="list-inside list-disc">
                                        <li>Mantener actualizados tus datos personales y documentos ante la Fundación LUCARI.</li>
                                        <li>Matricular la cantidad total de créditos, guías o materias por periodo académico.</li>
                                        <li>Mantener un promedio acumulado igual o superior a 3.8.</li>
                                        <li>Realizar 10 horas de labor social mensual.</li>
                                        <li>Participar activamente en el programa de orientación vocacional de la Fundación LUCARI.</li>
                                    </ul>
                                    <div class="mt-4 mx-auto h-36 w-96 bg-cover bg-no-repeat bg-top rounded-2xl" style="background-image: url('img/programs/img2.png')"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden rounded-2xl bg-white overflow-hidden relative z-50" id="three" role="tabpanel" aria-labelledby="three-tab">
                    <div class="card flex flex-col">
                        <div class="h-48 bg-cover bg-no-repeat bg-center" style="background-image: url('img/programs/card_programs/pro3.jpg')"></div>
                        <div class="card-body p-10">
                            <div class="header">
                                <div class="titulo p-5">
                                    <div class="flex items-center mb-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                            <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                            <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                                        </svg>
                                        <h4 class="border-b-4 ml-4">Rumbo a La Escuela</h4>
                                    </div>
                                    <p>EEste programa está dirigido a las escuelas rurales de escasos recursos, con el objetivo de lograr transformaciones significativas a nivel personal,
                                        institucional y poblacional.
                                        <span class="font-bold">Queremos ayudarte a ti y a tus compañeros a tener una mejor educación y calidad de vida.</span></p>
                                </div>
                            </div>
                            <hr class="m-5">
                            <div class="body p-5 pt-0 grid grid-cols-3 gap-10">
                                <div class="flex flex-col items-center justify-center" style="background-color: #F3F3F3;">
                                    <h4 class="mb-8">Áreas de intervención:</h4>
                                    <ol class="list-inside list-decimal">
                                        <li class="mb-4">Alimentación.</li>
                                        <li class="mb-4">Mejoramiento de infraestructura.</li>
                                        <li class="mb-4">Donaciones de insumos escolares.</li>
                                        <li class="mb-4">Kits escolares y uniformes.</li>
                                        <li class="mb-4">Mantenimiento de instalaciones.</li>
                                        <li class="mb-4">Formaciones para estudiantes.</li>
                                        <li class="mb-4">Programa de formación en artes.</li>
                                        <li class="mb-4">Programa Ratón de Biblioteca.</li>
                                    </ol>
                                </div>
                                <div class="col-span-2">
                                    <h4>Ratón de Biblioteca</h4>
                                    <ul class="list-inside list-disc my-6">
                                        <li>Queremos que a través de la lectura, tú y tus compañeros puedan soñar, aprender y conocer más. <span class="font-bold">La
                                            lectura es una herramienta poderosa para mejorar la calidad de la educación y tu desarrollo personal.</span></li>
                                    </ul>
                                    <h4>Formación en Artes</h4>
                                    <ul class="list-inside list-disc my-6">
                                        <li>Diseñamos un plan de formación en habilidades artísticas para tu desarrollo integral. <span class="font-bold">Queremos crear
                                            espacios de entretenimiento sano para que no veas en la deserción escolar una opción para tu vida.</span></li>
                                    </ul>
                                    <h4>Rumbo a la Escuela - Papás</h4>
                                    <ul class="list-inside list-disc my-6">
                                        <li>Este programa está dirigido a los padres de familia de las escuelas padrinadas.
                                            <span class="font-bold">Queremos ayudarte a mejorar tu calidad de vida a través de la formación técnica y habilidades que te permitan desarrollarte en tu comunidad y aumentar tus oportunidades laborales.</span>
                                            Trabajamos con el SENA para ofrecer programas de formación efectivos y relevantes.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden rounded-2xl bg-white overflow-hidden relative z-50" id="four" role="tabpanel" aria-labelledby="four-tab">
                    <div class="card flex flex-col">
                        <div class="h-48 bg-cover bg-no-repeat bg-center" style="background-image: url('img/programs/card_programs/pro1.png')"></div>
                        <div class="card-body p-10">
                            <div class="header">
                                <div class="titulo p-5">
                                    <div class="flex items-center mb-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                                        </svg>
                                        <h4 class="border-b-4 ml-4">Nutrimos Corazones</h4>
                                    </div>
                                    <p>Este programa se enfoca en establecer alianzas con instituciones que mejoren la alimentación de las poblaciones
                                        vulnerables.
                                        <span class="font-bold">Queremos ayudarte a ti y a otras familias a tener acceso a alimentos nutritivos y suficientes.</span>
                                    </p>
                                </div>
                            </div>
                            <hr class="m-5">
                            <div class="body p-5 pt-0">
                                <h4 class="mb-8">Cómo funciona:</h4>
                                <ol class="list-inside list-decimal">
                                    <li class="mb-4">Brindamos apoyos alimenticios en especie o donaciones en dinero.</li>
                                    <li class="mb-4">Las entidades aliadas se encargan del componente logístico.</li>
                                    <li class="mb-4">Las entidades aliadas nos proporcionan información periódica sobre las poblaciones impactadas y los recursos utilizados.</li>
                                    <li class="mb-4">La continuidad de los apoyos depende del cumplimiento de los objetivos establecidos en los programas desarrollados por las entidades aliadas.</li>
                                    <li class="mb-4">Realizamos alianzas para actividades de comedor escolar, comunitario y complementación de mercados.</li>
                                </ol>
                                <div class="text-center p-5 rounded-2xl" style="background-color: #F3F3F3">
                                    <p class="font-bold text-primary">Las condiciones específicas relacionadas con las líneas de acción, la cantidad de alimentos suministrados por alianza y los
                                        programas y entidades aliadas se establecerán una vez que se definan las entidades colaboradoras y se determinen los
                                        montos disponibles, tanto en especie como en dinero, así como las poblaciones que serán beneficiadas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cont-flotante relative z-0">
            <div class="img-flot-7 absolute -left-48 -top-24">
                <img src="{{ asset('img/utils/flot4.svg') }}" alt="">
            </div>
        </div>
    </section>
    <section class="nuestro-impacto sm:py-10 bg-white">
        <div class="relative container sm:px-5 md:px-10 z-10" style="background: linear-gradient(rgba(5, 126, 63, 0.87),rgba(5, 126, 63, 0.87)), url('../img/cont-1.jpg') no-repeat;background-size: cover;background-position: center;background-attachment: fixed;">
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
    @include('layouts.footer')
    @push('scripts')
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var botones = document.querySelectorAll('.btnProgram');
        botones.forEach(function(boton) {
            let bgImage = boton.getAttribute('data-bg');
            let gradient = boton.getAttribute('aria-selected') === 'true'
                ? "linear-gradient(rgba(5, 49, 26, 0.8), rgba(5, 49, 26, 0.8))"
                : "linear-gradient(rgba(5, 126, 63, 0.75), rgba(5, 126, 63, 0.75))";
            boton.style.backgroundImage = `${gradient}, url('${bgImage}')`;
            boton.style.backgroundSize = "cover";
            boton.style.backgroundRepeat = "no-repeat";
            boton.addEventListener('click', function() {
                botones.forEach(function(element) {
                    let bgImage = element.getAttribute('data-bg');
                    element.style.backgroundImage = `linear-gradient(rgba(5, 126, 63, 0.75), rgba(5, 126, 63, 0.75)), url('${bgImage}')`;
                    element.style.backgroundSize = "cover";
                    element.style.backgroundRepeat = "no-repeat";
                });
                bgImage = boton.getAttribute('data-bg');
                boton.style.backgroundImage = `linear-gradient(rgba(5, 49, 26, 0.8), rgba(5, 49, 26, 0.8)), url('${bgImage}')`;
                boton.style.backgroundSize = "cover";
                boton.style.backgroundRepeat = "no-repeat";
            });
        });
    });
    </script>
@endpush
</x-app-layout>
