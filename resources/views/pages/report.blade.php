<x-app-layout :infoContact="$data['infoContact']">
    <header class="site-stories relative">
        <div class="min-h-60 bg-contain md:bg-cover bg-center bg-no-repeat flex items-center justify-center" style="background-image: linear-gradient(rgba(5, 126, 63, 0.8),rgba(5, 126, 63, 0.8)),url('/img/bg-stories.jpg')">
                <h3 class="text-center text-white">Informes <span class="border-b-4">de gestión</span></h3>
        </div>
    </header>
    @if ($status!=200)
        @include('layouts.no-data')
    @else
        <section class="site-reports bg-white">
            <div class="container">
                <div class="pt-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="informes-tab" data-tabs-target="#informes" type="button" role="tab" aria-controls="informes" aria-selected="false">Informes de gestión</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="desarrollo-tab" data-tabs-target="#desarrollo" type="button" role="tab" aria-controls="desarrollo" aria-selected="false">Desarrollo Historico</button>
                        </li>
                    </ul>
                </div>
                <div id="default-tab-content" class="info-tab">
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="informes" role="tabpanel" aria-labelledby="informes-tab">
                        @php
                            $reports = $data['reports'];
                        @endphp
                        <div class="titulo pb-4">
                            <h4>{{ $reports['title'] }}</h4>
                        </div>
                        <div class="flex flex-col">
                            @foreach ($reports['reports'] as $item)
                                <a href="{{ $item['url'] }}" class="p-4 bg-white flex items-center justify-between lg:w-9/12" download="{{ $item['title'] }}">
                                    {{ $item['title'] }}
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-10 w-6">
                                        <path fill-rule="evenodd" d="M9 1.5H5.625c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5Zm6.61 10.936a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 14.47a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                                        <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                                    </svg>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="desarrollo" role="tabpanel" aria-labelledby="desarrollo-tab">
                        @include('pages.report.tabDesarrolloHistorico')
                    </div>
                </div>
        </section>
    @endif
    @include('layouts.footer')
</x-app-layout>
