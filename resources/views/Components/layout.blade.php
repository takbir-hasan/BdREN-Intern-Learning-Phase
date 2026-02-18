<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>My Website</title>
      <script src="https://cdn.tailwindcss.com"></script>
      <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class ="lg:justify-center min-h-screen flex-col" >
      <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
<nav class="relative bg-gray-800/50 after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" x-data x-on:click="$dispatch('toggle-mobile-menu')" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="h-8 w-auto" />
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>       
            </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center gap-2 pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        @guest
          <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Login</a>
          <a href="{{ route('register') }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500">Register</a>
        @endguest
        @auth
          <a href="{{ route('dashboard') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Dashboard</a>
          <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-red-400">Logout</button>
          </form>
        @endauth
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div x-data="{ open: false }" x-on:toggle-mobile-menu.window="open = !open" x-show="open" x-transition class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Mobile Navigation Links -->
      <a href="/" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('/') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Home</a>
      <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('about') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">About</a>
      <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('contact') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">Contact</a>
      
      <!-- Mobile Auth Links -->
      <div class="border-t border-gray-700 pt-2 mt-2">
        @guest
          <a href="{{ route('login') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Login</a>
          <a href="{{ route('register') }}" class="block rounded-md px-3 py-2 text-base font-medium bg-indigo-600 text-white hover:bg-indigo-500">Register</a>
        @endguest
        @auth
          <a href="{{ route('dashboard') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Dashboard</a>
          <form method="POST" action="{{ route('logout') }}" class="mt-1">
            @csrf
            <button type="submit" class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-red-400">Logout</button>
          </form>
        @endauth
      </div>
    </div>
  </div>
</nav>

<header class="bg-gray-100 py-8">
  <div class="max-w-7xl mx-auto px-4 text-center">
    
    <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
     {{ $heading }}
    </h1>


  </div>
</header>


      {{ $slot }}
</body>
</html>