<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Login') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

   <body>
     <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-gray-900 to-gray-800">
        <div class="space-y-8">
        <div class="text-center">
            <h1 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">
                {{ __('Sign in to your account') }}
            </h1>
           
        </div>

        <div>
            <x-auth-session-status class="mb-4 rounded-lg bg-green-500/20 px-4 py-3 text-sm text-green-300" :status="session('status')" />

            <form action="{{ route('login') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-white">{{ __('Email address') }}</label>
                    <div class="mt-1.5">
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            autofocus
                            placeholder="you@example.com"
                            class="block w-full rounded-xl border-0 bg-white/10 px-4 py-3 text-black placeholder:text-black shadow-sm ring-1 ring-inset ring-white/20 transition focus:bg-white/15 focus:ring-2 focus:ring-indigo-400 sm:text-sm"
                        />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-white">{{ __('Password') }}</label>
                    <div class="mt-1.5">
                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="••••••••"
                            class="block w-full rounded-xl border-0 bg-white/10 px-4 py-3 text-black placeholder:text-black shadow-sm ring-1 ring-inset ring-white/20 transition focus:bg-white/15 focus:ring-2 focus:ring-indigo-400 sm:text-sm"
                        />
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
                </div>

                <button
                    type="submit"
                    class="w-full rounded-xl bg-indigo-500 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-500/30 transition hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 focus:ring-offset-transparent"
                >
                    {{ __('Sign in') }}
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-white/10">
                <p class="text-center text-sm text-white">
                    {{ __('Don\'t have an account?') }}
                    <a href="{{ route('register') }}" class="font-semibold text-indigo-300 hover:text-white transition">
                        {{ __('Create one') }}
                    </a>
                </p>
            </div>
        </div>
    </div>
     </div>

   </body>
