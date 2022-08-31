<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link
      rel="shortcut icon"
      href="https://corestream.ng/assets/images/favicon.fw.png"
    />
    <link
      href="{{ asset('css/coreStream/css.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{asset('css/coreStream/css_002.css')}}"
      rel="stylesheet"
    />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/coreStream/style-starter.css') }}">
    <livewire:styles />
    <!-- Scripts -->
    <script defer  src="{{ asset('js/coreStream/bootstrap.js') }}"></script>
    <script defer src="{{ asset('js/coreStream/jquery-3.js')}}"></script>
    <script defer src="{{ asset('js/coreStream/jquery.js')}}"></script>
    <script defer src="{{ asset('js/coreStream/jquery_002.js')}}"></script>
    <script defer src="{{ asset('js/coreStream/lightbox-plus-jquery.js')}}"></script>
    <script defer src="{{ asset('js/coreStream/theme-change.js')}}"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
