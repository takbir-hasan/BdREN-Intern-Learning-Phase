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
    <body class="font-sans text-black antialiased bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 min-h-screen">
       

        <!-- Animated Background -->
        <div class="fixed inset-0 overflow-hidden -z-10">
            <div class="absolute -inset-10 opacity-50">
                <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full mix-blend-multiply filter blur-2xl animate-pulse opacity-70"></div>
                <div class="absolute top-3/4 right-1/4 w-96 h-96 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full mix-blend-multiply filter blur-2xl animate-pulse animation-delay-2000 opacity-70"></div>
                <div class="absolute bottom-1/4 left-1/2 w-96 h-96 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-full mix-blend-multiply filter blur-2xl animate-pulse animation-delay-4000 opacity-70"></div>
            </div>
            <!-- Grid Pattern -->
            <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
        </div>
        
        <div class="relative z-10 min-h-screen flex flex-col justify-center py-12 px-4 sm:px-6 lg:px-8">
            <!-- App branding -->
            <div class="sm:mx-auto sm:w-full sm:max-w-md text-center mb-8">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-3">
                    <x-application-logo class="h-10 w-10 fill-current text-white drop-shadow-lg" />
                    <span class="text-xl font-bold tracking-tight text-white/95">{{ config('app.name') }}</span>
                </a>
            </div>

            <!-- Card -->
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white/10 backdrop-blur-xl shadow-2xl rounded-2xl border border-white/20 overflow-hidden">
                    <div class="px-8 py-10 sm:px-10 sm:py-12">
                        {{ $slot }}
                    </div>
                </div>
            </div>


        </div>
    </body>
</html>
