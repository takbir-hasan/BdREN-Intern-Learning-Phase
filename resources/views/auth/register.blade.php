
<title>{{ config('app.name', 'Laravel') }}</title>


    <div class="space-y-8">
        <div class="text-center">
            <h1 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">
                {{ __('Create your account') }}
            </h1>
            <p class="mt-2 text-sm text-white/70">
                {{ __('Get started with a free account in seconds.') }}
            </p>
        </div>

        <div>
            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-white/90">{{ __('Full name') }}</label>
                    <div class="mt-1.5">
                        <input
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            autofocus
                            autocomplete="name"
                            placeholder="John Doe"
                            class="block w-full rounded-xl border-0 bg-white/10 px-4 py-3 text-white placeholder:text-white/40 shadow-sm ring-1 ring-inset ring-white/20 transition focus:bg-white/15 focus:ring-2 focus:ring-indigo-400 sm:text-sm"
                        />
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-1.5" />
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-white/90">{{ __('Email address') }}</label>
                    <div class="mt-1.5">
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="username"
                            placeholder="you@example.com"
                            class="block w-full rounded-xl border-0 bg-white/10 px-4 py-3 text-white placeholder:text-white/40 shadow-sm ring-1 ring-inset ring-white/20 transition focus:bg-white/15 focus:ring-2 focus:ring-indigo-400 sm:text-sm"
                        />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-white/90">{{ __('Password') }}</label>
                    <div class="mt-1.5">
                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="new-password"
                            placeholder="••••••••"
                            class="block w-full rounded-xl border-0 bg-white/10 px-4 py-3 text-white placeholder:text-white/40 shadow-sm ring-1 ring-inset ring-white/20 transition focus:bg-white/15 focus:ring-2 focus:ring-indigo-400 sm:text-sm"
                        />
                    </div>
                    <p class="mt-1 text-xs text-white/50">{{ __('Use at least 8 characters.') }}</p>
                    <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-white/90">{{ __('Confirm password') }}</label>
                    <div class="mt-1.5">
                        <input
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            placeholder="••••••••"
                            class="block w-full rounded-xl border-0 bg-white/10 px-4 py-3 text-white placeholder:text-white/40 shadow-sm ring-1 ring-inset ring-white/20 transition focus:bg-white/15 focus:ring-2 focus:ring-indigo-400 sm:text-sm"
                        />
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5" />
                </div>

                <button
                    type="submit"
                    class="w-full rounded-xl bg-indigo-500 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-500/30 transition hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 focus:ring-offset-transparent"
                >
                    {{ __('Create account') }}
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-white/10">
                <p class="text-center text-sm text-white/70">
                    {{ __('Already have an account?') }}
                    <a href="{{ route('login') }}" class="font-semibold text-indigo-300 hover:text-white transition">
                        {{ __('Sign in') }}
                    </a>
                </p>
            </div>
        </div>
    </div>

