<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 space-y-3">
                    @if (session('success'))
                        <div class="flash-message bg-green-50 border border-green-300 text-green-800 p-4 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="flash-message bg-red-50 border border-red-300 text-red-800 p-4 rounded">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if (session('warning'))
                        <div class="flash-message bg-yellow-50 border border-yellow-300 text-yellow-800 p-4 rounded">
                            {{ session('warning') }}
                        </div>
                    @endif

                    @if (session('info'))
                        <div class="flash-message bg-blue-50 border border-blue-300 text-blue-800 p-4 rounded">
                            {{ session('info') }}
                        </div>
                    @endif
                </div>

                @yield('content')
            </main>
        </div>
    </body>
</html>
<script>
    setTimeout(() => {
        document.querySelectorAll('.flash-message')
            .forEach(el => el.remove());
    }, 3000);
</script>
