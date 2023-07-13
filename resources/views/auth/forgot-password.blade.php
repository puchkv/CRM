<x-guest-layout>

    <section>
        <div class="logo-w-text">
            <span>Забули пароль?</span>
            <img src="{{ URL::asset('logo/leader.svg') }}" draggable="false" alt="logo"/>
        </div>

        <span class='info'>
            Введіть Вашу електрону адресу, на яку буде надіслано посилання для скидання пароля.
        </span>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus />
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit" class="login w-100">Надіслати посилання</button>
            </div>

            <div>
                <span>Немає аккаунта? <a href="{{ route('register') }}">Створити</a></span>
            </div>

        </form>

    </section>
    


</x-guest-layout>



{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
