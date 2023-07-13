<x-guest-layout>

    <section>

    <form method="POST" action="{{ route('register') }}">
        @csrf
 
        <div class="logo-w-text">
            <span>Реєстрація</span>
            <img src="{{ URL::asset('logo/leader.svg') }}" draggable="false" alt="logo"/>
        </div>

        {{-- Name field --}}
        <div>
            <label for="email">Ім'я</label>
            <input type="text" name="name" :value="old('name')" required autofocus />
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        {{-- Email field --}}
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" :value="old('email')" required />
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        {{-- Password field --}}
        <div>
            <label for="password">Пароль</label>
            <input type="password" name="password" :value="old('password')" required/>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        {{-- Password confirm --}}
        <div>
            <label for="password_confirmation">Підтвердити пароль</label>
            <input type="password" name="password_confirmation" required/>
            @error('password_confirmation')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        {{-- Sumbit --}}
        <div>
            <button type="submit" class="login w-100">Зареєструватись</button>
        </div>
        <div>
            <span>Аккаунт вже існує? <a href="{{ route('login') }}">Увійти</a></span>
        </div>

    </form>

</x-guest-layout>




{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
