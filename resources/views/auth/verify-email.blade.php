<x-guest-layout>
    <div class="space-y-6">
        <div>
            <h2 class="text-center text-2xl font-bold tracking-tight text-black">
                {{ __('Verify your email') }}
            </h2>
            <p class="mt-3 text-sm text-black/80">
                {{ __('Thanks for signing up! Before getting started, please verify your email address by clicking the link we sent to') }}
                <span class="font-medium text-yellow-500">{{ auth()->user()->email }}</span>.
                {{ __('If you didn\'t receive the email, click the button below to resend.') }}
            </p>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="rounded-lg bg-green-500/20 px-4 py-3 text-sm font-medium text-green-300">
                {{ __('A new verification link has been sent to your email address.') }}
            </div>
        @endif

        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <form method="POST" action="{{ route('verification.send') }}" class="w-full sm:w-auto">
                @csrf
                <button
                    type="submit"
                    class="w-full rounded-xl bg-indigo-600 px-4 py-3 text-sm font-semibold text-black hover:underline shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-transparent sm:w-auto"
                >
                    {{ __('Resend Verification Email') }}
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="w-full sm:w-auto">
                @csrf
                <button
                    type="submit"
                    class="w-full text-sm font-medium text-white/70 hover:text-white hover:cursor-pointer hover:bg-red-500 underline underline-offset-2 sm:w-auto"
                >
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
