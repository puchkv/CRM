<x-app-layout>

    @include('layouts.navbar')

    @include('layouts.navbar-mobile')

    <header>
        <h1>Аккаунт</h1>
    </header>

    <div class="wrapper">
        <main>

            <section class="profile-row" id="main">

                <header>Основні дані</header>

                <div class="left">
                    <form method="post" action="{{ route('profile.update') }}">
                        @csrf
                        @method('patch')
    
                        <div>
                            <label for="name">Ім'я</label>
                            <input type="text" name="name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name"/>
                            <x-input-error :messages="$errors->get('name')"/>
                        </div>
    
                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email"/>
                            <x-input-error :messages="$errors->get('email')" />
                        </div>  
    
                        <div>
                            <button type="submit" class="login">Зберегти</button>
                        </div>
    
                        <div class="status-message saved">
                            @if (session('status') === 'profile-updated')
                                <script>
                                    const mainInfo = document.getElementById("main");
                                    mainInfo.classList.add("border-success");
                                </script>
                                <i class="material-icons">
                                    check_circle
                                </i>
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="green"
                                >{{ __('Збережено') }}</p>
                            @endif
                        </div>
    
                    </form>
                </div>

                <div class="right">
                    <ul>
                        <li>
                            <legend>Статус аккаунта</legend>

                            @if ($user->verified == null)
                                <div style="display: flex; align-items:center">
                                        <i class="material-icons not-verified">cancel</i>
                                        <span>Не підтверджений</span>
                                    </div>
                            @else
                                    <div style="display: flex; align-items:center">
                                        <i class="material-icons verified">verified</i>
                                        <span>Підтверджений</span>
                                    </div>
                            @endif
                        </li>
                        <li>
                            {{-- @if ($user->verified == null)
                                <span style="width: 100%; text-align: right; font-size: 12px"><a href="#">Запросити підтвердження</a></span>
                            @endif --}}
                        </li>
                        <li>
                            <legend>Дата реєстрації</legend>
                            <span>{{ $user->created_at->isoFormat('LLL')}}</span>
                        </li>
                        <li>
                            <legend>Останнє оновлення</legend>
                            <span>{{ $user->updated_at->isoFormat('LLL') }}</span>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="profile-row" id='pass'>

                <header>Змінити пароль</header>

                <div class="left">
                    <form method="post" action="{{ route('password.update') }}">
                        @csrf
                        @method('put')

                        <div>
                            <label for="current_password">Поточний пароль</label>
                            <input id="current_password" name="current_password" type="password" autocomplete="current-password" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="error" />
                        </div>
                
                        <div>
                            <label for="password">Новий пароль</label>
                            <input id="password" name="password" type="password" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="error" />
                        </div>
                
                        <div>
                            <label for="password_confirmation">Підтвердження пароля</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="error" />
                        </div>

                        <div>
                            <button type="submit" class="login">Зберегти</button>
                        </div>

                        <div class="status-message saved">
                            @if (session('status') === 'password-updated')
                                <script>
                                    const block = document.getElementById("pass");
                                    block.classList.add("border-success");
                                </script>
                                <i class="material-icons">
                                    check_circle
                                </i>
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="green"
                                >{{ __('Збережено') }}</p>
                            @endif
                        </div>



                    </form>
                </div>
            </section>
        </main>
    </div>

</x-app-layout>




{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
