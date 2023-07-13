<x-app-layout>

    <section class="centered-error-message">
        <h1>404</h1>
        <legend>Запрошений ресурс не знайдено</legend>
        <strong>:(</strong>
        <a href="{{ route('index') }}" class="login">На головну</a>
    </section>

</x-app-layout>


<style>

    .centered-error-message {
        display: flex;
        height: 100vh;  
        align-items: center;
        justify-content: center;
        width: fit-content;
        gap: 20px;
        margin: 0 auto;
        flex-direction: column;
        user-select: none;
    }

    .centered-error-message > h1 {
        font-size: calc(10em - .2vw);
        z-index: 2;

    }

    .centered-error-message > strong {
        position: absolute;
        right: 100px;
        font-size: 20em;
        z-index: 1;
        opacity: 0.3;
    }

    .centered-error-message > .login {
        padding: 12px 20px;
        width: fit-content;
        font-size: 1em;
        background: rgb(68, 68, 175);
        color: white;
        z-index: 3;
    }

</style>