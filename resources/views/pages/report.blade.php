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
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="informes-tab" data-tabs-target="#informes" type="button" role="tab" aria-controls="informes" aria-selected="false">Informes de gestión</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="indicadores-tab" data-tabs-target="#indicadores" type="button" role="tab" aria-controls="indicadores" aria-selected="false">Indicadores de Medición</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="desarrollo-tab" data-tabs-target="#desarrollo" type="button" role="tab" aria-controls="desarrollo" aria-selected="false">Desarrollo Historico</button>
                    </li>
                </ul>
            </div>
            <div id="default-tab-content" class="info-tab">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="informes" role="tabpanel" aria-labelledby="informes-tab">
                    <div class="titulo pb-4">
                        <h4>Informes de Gestión</h5>
                    </div>
                    <div class="flex flex-col">
                        <a href="{{ asset('docs/Informe-Gestion-2015.pdf') }}" target="_blank" class="p-4 bg-white flex items-center justify-between lg:w-9/12">
                            Informe anual de gestión 2015
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-10 w-6">
                                <path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5Zm6.61 10.936a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                            </svg>

                        </a>
                        <a href="{{ asset('docs/Informe-Gestion-2016.pdf') }}" target="_blank" class="p-4 bg-white flex items-center justify-between lg:w-9/12">
                            Informe anual de gestión 2016
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-10 w-6">
                                <path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5Zm6.61 10.936a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                            </svg>

                        </a>
                        <a href="{{ asset('docs/Informe-Gestion-2017.pdf') }}" target="_blank" class="p-4 bg-white flex items-center justify-between lg:w-9/12">
                            Informe anual de gestión 2017
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-10 w-6">
                                <path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5Zm6.61 10.936a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                            </svg>

                        </a>
                        <a href="{{ asset('docs/Informe-Gestion-2018.pdf') }}" target="_blank" class="p-4 bg-white flex items-center justify-between lg:w-9/12">
                            Informe anual de gestión 2018
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-10 w-6">
                                <path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5Zm6.61 10.936a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                            </svg>

                        </a>
                        <a href="{{ asset('docs/Informe-Gestion-2019.pdf') }}" target="_blank" class="p-4 bg-white flex items-center justify-between lg:w-9/12">
                            Informe anual de gestión 2019
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-10 w-6">
                                <path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5Zm6.61 10.936a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                            </svg>

                        </a>
                        <a href="{{ asset('docs/Informe-Gestion-2022.pdf') }}" target="_blank" class="p-4 bg-white flex items-center justify-between lg:w-9/12">
                            Informe anual de gestión 2022
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-10 w-6">
                                <path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5Zm6.61 10.936a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                            </svg>

                        </a>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg text-justify bg-gray-50 dark:bg-gray-800" id="indicadores" role="tabpanel" aria-labelledby="indicadores-tab">
                    <div class="titulo pb-4">
                        <h4>Indicadores de Medición</h5>
                    </div>
                    <p class="my-5">Alineados con el foco social de la estrategia de Sostenibilidad de Soberana, donde el objetivo es que cuidamos nuestra tripulación y nuestra región y el objetivo de gestión es desarrollar programas que generen progreso en las comunidades vulnerables. (Convenios con instituciones, generación de empleo, investigación y desarrollo, etc.), se definen los siguientes indicadores de medición, orientados a los ODS con lo que buscamos contribuir</p>
                    <div class="mb-4">
                        <p class="font-bold mb-4">ODS 1 Fin de la Pobreza:</p>
                        <ul class="list-disc list-inside">
                            <li>% de la población que vive por debajo del umbral de la pobreza</li>
                            <li>Definir un umbral de pobreza adecuado para el contexto y utilizar datos de ingresos o consumo para calcular el porcentaje de la población que se encuentra por debajo de ese umbral.</li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <p class="font-bold mb-4">ODS 2 Hambre Cero:</p>
                        <ul class="list-disc list-inside">
                            <li>Número de personas con inseguridad alimentaria</li>
                            <p>Medir el número absoluto de personas que no tienen acceso suficiente a alimentos nutritivos y seguros. Esto implica evaluar la cantidad de personas que experimentan inseguridad alimentaria en las regiones intervenidas</p>
                            <li>Acceso alimentos nutritivos</li>
                            <p>Evaluar el acceso de la población a alimentos nutritivos y seguros. Se puede hacer a través de encuestas y datos sobre la disponibilidad de alimentos</p>
                        </ul>
                    </div>
                    <p class="font-bold mb-4">Organigrama Fundación</p>
                    <img src="{{ asset('img/organigrama.png') }}" alt="Organigrama Fundación" class="lg:h-80">





                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="desarrollo" role="tabpanel" aria-labelledby="desarrollo-tab">
                    @include('pages.report.tabDesarrolloHistorico')
                </div>
            </div>
    </section>
    @include('layouts.footer')
</x-app-layout>
