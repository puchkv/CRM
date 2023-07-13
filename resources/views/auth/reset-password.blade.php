    <x-guest-layout>

    <section>

        <div class="logo-w-text" style="margin-bottom: 20px">
            <span>Зміна пароля</span>
            <img src="{{ URL::asset('logo/leader.svg') }}" draggable="false" alt="logo"/>
        </div>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

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

            <div>
                <button type="submit" class="login w-100">Змінити пароль</button>
            </div>

            {{-- <div>
                <span><a href="{{ route('register') }}">Перейти до авторизації</a></span>
            </div> --}}


        </form>

    </section>

</x-guest-layout>



{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
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
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
