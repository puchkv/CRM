<x-guest-layout>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section>

    <form method="POST" action="{{ route('login') }}">
        @csrf
 
        <div class="logo">
            <img src="{{ URL::asset('logo/leader.svg') }}" draggable="false" alt="logo"/>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" :value="old('email')" required autofocus />
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Пароль</label>
            <input type="password" name="password" required autocomplete="current-password"/>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="row">
            <label class="custom" for="remember_me">
                <input type="checkbox" class="checkbox blue" name="remember" id="remember_me"/>
                <span>Запам'ятати</span>
            </label>
            <a href="{{ route('password.request') }}">Нагадати пароль?</a>
        </div>
        <div>
            <button type="submit" class="login w-100">Авторизуватись</button>
        </div>
        <div>
            <span>Немає аккаунта? <a href="{{ route('register') }}">Створити</a></span>
        </div>

    </form>

</x-guest-layout>





{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
