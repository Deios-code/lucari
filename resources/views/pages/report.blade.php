<x-app-layout>
    <header class="site-stories relative">
        <div class="min-h-60 bg-contain md:bg-cover bg-center bg-no-repeat flex items-center justify-center" style="background-image: linear-gradient(rgba(5, 126, 63, 0.8),rgba(5, 126, 63, 0.8)),url('/img/bg-stories.jpg')">
                <h3 class="text-center text-white">Informes <span class="border-b-4">de gestión</span></h3>
        </div>
    </header>
    <section class="site-reports bg-white">
        <div class="container">
            <div class="pt-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="desarrollo-tab" data-tabs-target="#desarrollo" type="button" role="tab" aria-controls="desarrollo" aria-selected="false">Desarrollo Historico</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="informes-tab" data-tabs-target="#informes" type="button" role="tab" aria-controls="informes" aria-selected="false">Informes de Gestión</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="desarrollo" role="tabpanel" aria-labelledby="desarrollo-tab">
                    <div class="titulo pb-10">
                        <h4>Desarrollo Histórico</h5>
                    </div>
                    <div id="accordion-collapse" data-accordion="collapse">
                        <h5 id="accordion-collapse-heading-1">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200  gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                <span>Actividades 2016</span>
                                {{-- <div class="flex items-center"> --}}
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                {{-- </div> --}}
                            </button>
                        </h5>
                        <div id="accordion-collapse-body-1" class="hidden bg-white" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 border border-b-0 border-gray-200">
                                <div class="relative overflow-x-auto">
                                    <span>Inversión: $ 119.383.339</span>
                                    <table class="w-full text-left rtl:text-right font-normal mt-10">
                                        <thead class="  uppercase bg-gray-50 font-normal border">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">Tipo de Donación</th>
                                                <th scope="col" class="px-6 py-3">Entidad</th>
                                                <th scope="col" class="px-6 py-3">Cantidad</th>
                                                <th scope="col" class="px-6 py-3">Zona/Región</th>
                                                <th scope="col" class="px-6 py-3">Programa</th>
                                                <th scope="col" class="px-6 py-3">Línea estratégica</th>
                                                <th scope="col" class="px-6 py-3">ODS</th>
                                            </tr>
                                        </thead>
                                        <tbody class="border">
                                            <tr class="border-b">
                                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Bicicletas</th>
                                                <th class="font-normal">Escuela Rural José Ignacio Botero</th>
                                                <th class="font-normal">116</th>
                                                <th class="font-normal">Santuario/ Antioquia</th>
                                                <th class="font-normal">Rumbo a la Escuela</th>
                                                <th class="font-normal">Educación</th>
                                                <th class="font-normal">ODS 4</th>
                                            </tr>

                                            <tr class="border-b">
                                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Calzado Escolar</th>
                                                <th class="font-normal">Escuela Rural José Ignacio Botero</th>
                                                <th class="font-normal">154</th>
                                                <th class="font-normal">Santuario/ Antioquia</th>
                                                <th class="font-normal">Rumbo a la Escuela</th>
                                                <th class="font-normal">Educación</th>
                                                <th class="font-normal">ODS 4</th>
                                            </tr>

                                            <tr class="border-b">
                                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Zapatos Escolares</th>
                                                <th class="font-normal">Centro educativo Caicemapa</th>
                                                <th class="font-normal">139</th>
                                                <th class="font-normal">Fonseca/Guajira</th>
                                                <th class="font-normal">Rumbo a la Escuela</th>
                                                <th class="font-normal">Educación</th>
                                                <th class="font-normal">ODS 4</th>
                                            </tr>

                                            <tr class="border-b">
                                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Pupitres</th>
                                                <th class="font-normal">Centro educativo Caicemapa</th>
                                                <th class="font-normal">100</th>
                                                <th class="font-normal">Fonseca/Guajira</th>
                                                <th class="font-normal">Rumbo a la Escuela</th>
                                                <th class="font-normal">Educación</th>
                                                <th class="font-normal">ODS 4</th>
                                            </tr>

                                            <tr class="border-b">
                                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Zapatos Escolares</th>
                                                <th class="font-normal">Institución Educativa Santa Teresa</th>
                                                <th class="font-normal">147</th>
                                                <th class="font-normal">Cereté/Córdoba</th>
                                                <th class="font-normal">Rumbo a la Escuela</th>
                                                <th class="font-normal">Educación</th>
                                                <th class="font-normal">ODS 4</th>
                                            </tr>

                                            <tr class="border-b">
                                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Pupitres</th>
                                                <th class="font-normal">Institución Educativa Santa Teresa</th>
                                                <th class="font-normal">120</th>
                                                <th class="font-normal">Cereté/Córdoba</th>
                                                <th class="font-normal">Rumbo a la Escuela</th>
                                                <th class="font-normal">Educación</th>
                                                <th class="font-normal">ODS 4</th>
                                            </tr>

                                            <tr class="border-b">
                                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Auxilio Compra de Vivienda</th>
                                                <th class="font-normal">Empleados escasos recursos Soberana</th>
                                                <th class="font-normal">3</th>
                                                <th class="font-normal">Medellín y Bogotá</th>
                                                <th class="font-normal">Techos de Amor</th>
                                                <th class="font-normal">Vivienda</th>
                                                <th class="font-normal">ODS 4</th>
                                            </tr>

                                            <tr class="border-b">
                                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Becas Escolares</th>
                                                <th class="font-normal">Hijos familias vulnerables Soberana</th>
                                                <th class="font-normal">3</th>
                                                <th class="font-normal">Medellín y Barranquilla</th>
                                                <th class="font-normal">Escalar</th>
                                                <th class="font-normal">Educación</th>
                                                <th class="font-normal"></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <h5 id="accordion-collapse-heading-2">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200  gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                <span>Actividades 2017</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                            </button>
                        </h5>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200">
                                <div class="relative overflow-x-auto">
                                    <span>Inversión: $ 119.383.339</span>
                                        <table class="w-full text-left rtl:text-right font-normal mt-10">
                                            <thead class="  uppercase bg-gray-50 font-normal border">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3">Tipo de Donación</th>
                                                    <th scope="col" class="px-6 py-3">Entidad</th>
                                                    <th scope="col" class="px-6 py-3">Cantidad</th>
                                                    <th scope="col" class="px-6 py-3">Zona/Región</th>
                                                    <th scope="col" class="px-6 py-3">Programa</th>
                                                    <th scope="col" class="px-6 py-3">Línea estratégica</th>
                                                    <th scope="col" class="px-6 py-3">ODS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b">
                                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Entrega Sala Informática</td>
                                                    <th class="font-normal">Centro educativo Caicemapa</th>
                                                    <th class="font-normal">90</th>
                                                    <th class="font-normal">Fonseca/Guajira</th>
                                                    <th class="font-normal">Rumbo a la Escuela</th>
                                                    <th class="font-normal">Educación</th>
                                                    <th class="font-normal">ODS 4</th>
                                                </tr>
                                                <tr class="border-b">
                                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Remodelación Escuela</td>
                                                    <th class="font-normal">Centro educativo Caicemapa</th>
                                                    <th class="font-normal">90</th>
                                                    <th class="font-normal">Fonseca/Guajira</th>
                                                    <th class="font-normal">Rumbo a la Escuela</th>
                                                    <th class="font-normal">Educación</th>
                                                    <th class="font-normal">ODS 4</th>
                                                </tr>
                                                <tr class="border-b">
                                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Entrega Uniformes escolares/Calzado escolar</td>
                                                    <th class="font-normal">Escuela Retiro de los Indios Buenavista</th>
                                                    <th class="font-normal">90</th>
                                                    <th class="font-normal">Cereté/Córdoba</th>
                                                    <th class="font-normal">Rumbo a la Escuela</th>
                                                    <th class="font-normal">Educación</th>
                                                    <th class="font-normal">ODS 4</th>
                                                </tr>
                                                <tr class="border-b">
                                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Construcción baños</td>
                                                    <th class="font-normal">Escuela Retiro de los Indios Buenavista</th>
                                                    <th class="font-normal">90</th>
                                                    <th class="font-normal">Cereté/Córdoba</th>
                                                    <th class="font-normal">Rumbo a la Escuela</th>
                                                    <th class="font-normal">Educación</th>
                                                    <th class="font-normal">ODS 4</th>
                                                </tr>
                                                <tr class="border-b">
                                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Construcción Aula escolar</td>
                                                    <th class="font-normal">Escuela San Antonio el Playón</th>
                                                    <th class="font-normal">80</th>
                                                    <th class="font-normal">Cereté/Córdoba</th>
                                                    <th class="font-normal">Rumbo a la Escuela</th>
                                                    <th class="font-normal">Educación</th>
                                                    <th class="font-normal">ODS 4</th>
                                                </tr>
                                                <tr class="border-b">
                                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Entrega Uniformes escolares</td>
                                                    <th class="font-normal">Escuela San Antonio el Playón</th>
                                                    <th class="font-normal">80</th>
                                                    <th class="font-normal">Cereté/Córdoba</th>
                                                    <th class="font-normal">Rumbo a la Escuela</th>
                                                    <th class="font-normal">Educación</th>
                                                    <th class="font-normal">ODS 4</th>
                                                </tr>
                                                <tr class="border-b">
                                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Auxilio compra Vivienda</td>
                                                    <th class="font-normal">Empleados escasos recursos Soberana</th>
                                                    <th class="font-normal">3</th>
                                                    <th class="font-normal">Valledupar, Medellín y Apartado</th>
                                                    <th class="font-normal"></th>
                                                    <th class="font-normal"></th>
                                                    <th class="font-normal"></th>
                                                </tr>
                                                <tr class="border-b">
                                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">Becas Escolares</td>
                                                    <th class="font-normal">Hijos familias vulnerables Soberana</th>
                                                    <th class="font-normal">11</th>
                                                    <th class="font-normal">Medellín y Barranquilla</th>
                                                    <th class="font-normal">Escalar</th>
                                                    <th class="font-normal">Educación</th>
                                                    <th class="font-normal"></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                        <h5 id="accordion-collapse-heading-2">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200  gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                <span>Actividades 2018</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                            </button>
                        </h5>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200">
                                <div class="relative overflow-x-auto">
                                    <span>Inversión: $ 119.383.339</span>
                                    <h1>texto</h1>
                                    {{-- <table class="w-full text-left rtl:text-right font-normal mt-10">
                                    </table> --}}
                                </div>
                            </div>
                        </div>
                        <h5 id="accordion-collapse-heading-2">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200  gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                <span>Actividades 2019</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                            </button>
                        </h5>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200">
                                <div class="relative overflow-x-auto">
                                    <span>Inversión: $ 119.383.339</span>
                                    <h1>texto</h1>
                                    {{-- <table class="w-full text-left rtl:text-right font-normal mt-10">
                                    </table> --}}
                                </div>
                            </div>
                        </div>
                        <h5 id="accordion-collapse-heading-2">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200  gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                <span>Actividades 2020</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                            </button>
                        </h5>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200">
                                <div class="relative overflow-x-auto">
                                    <span>Inversión: $ 119.383.339</span>
                                    <h1>texto</h1>
                                    {{-- <table class="w-full text-left rtl:text-right font-normal mt-10">
                                    </table> --}}
                                </div>
                            </div>
                        </div>
                        <h5 id="accordion-collapse-heading-2">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200  gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                <span>Actividades 2021</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                            </button>
                        </h5>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200">
                                <div class="relative overflow-x-auto">
                                    <span>Inversión: $ 119.383.339</span>
                                    <h1>texto</h1>
                                    {{-- <table class="w-full text-left rtl:text-right font-normal mt-10">
                                    </table> --}}
                                </div>
                            </div>
                        </div>
                        <h5 id="accordion-collapse-heading-2">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200  gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                <span>Actividades 2022</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                            </button>
                        </h5>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200">
                                <div class="relative overflow-x-auto">
                                    <span>Inversión: $ 119.383.339</span>
                                    <h1>texto</h1>
                                    {{-- <table class="w-full text-left rtl:text-right font-normal mt-10">
                                    </table> --}}
                                </div>
                            </div>
                        </div>
                        <h5 id="accordion-collapse-heading-2">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200  gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                <span>Actividades 2023</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                            </button>
                        </h5>
                        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200">
                                <div class="relative overflow-x-auto">
                                    <span>Inversión: $ 119.383.339</span>
                                    <h1>texto</h1>
                                    {{-- <table class="w-full text-left rtl:text-right font-normal mt-10">
                                    </table> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="informes" role="tabpanel" aria-labelledby="informes-tab">

                </div>
            </div>
    </section>
    @include('layouts.footer')
</x-app-layout>
