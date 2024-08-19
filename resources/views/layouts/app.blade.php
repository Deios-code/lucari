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
        <div class="min-h-screen bg-gray-100">
            @props(['infoContact'])
            {{-- @dd($infoContact) --}}
            @if (!request()->routeIs('home'))
                @include('layouts.bar-top', $infoContact)
                @include('layouts.navigation', $infoContact)
            @endif
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
@if (request()->routeIs('contacto'))
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
@endif
@stack('scripts')
