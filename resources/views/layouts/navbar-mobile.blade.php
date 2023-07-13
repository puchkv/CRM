

<nav class="aside-navbar hidden closed" id="aside-navbar">
    <i class="material-icons" id="menu_close">close</i>
    <ul>
        <li>
            <a href='/' class="active">
                <i class="material-icons">dashboard</i>
                Головна
            </a>
        </li>
        <li>
            <a href='/leads'>
                <i class="material-icons">request_page</i>
                Ліди
            </a>
        </li>
        <li>
            <a href='/projects'>
                <i class="material-icons">work</i>
                Проєкти
            </a>
        </li>
        <li>
            <a href='/tasks'>
                <i class="material-icons">assignment</i>
                Завдання
            </a>
        </li>
        <li>
            <a href='/team'>
                <i class="material-icons">groups</i>
                Команда
            </a>
        </li>
    </ul>

    {{-- Additional fields --}}
    <ul style="justify-content:flex-end;">
        <li>
            <a href="{{ route('profile.edit') }}">
                <i class="material-icons">
                    account_circle
                </i>
                {{ Auth::user()->name }}
            </a>
        </li>
        <li>
            <a href="#">
                <i class="material-icons">
                    tune
                </i>
                Адмін-панель
            </a>
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}" >
                @csrf

                <a href="{{ route('logout') }}" class="logout"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <i class="material-icons">
                        logout
                    </i>
                    Вийти
                </a>
            </form>
        </li>
    </ul>

</nav>

<div class="overlay hidden" id="menu_overlay"></div>

<script>
    const menuOpen = document.getElementById('menu_open');
    const menuClose = document.getElementById('menu_close');
    const navbar = document.getElementById('aside-navbar');
    const menuOverlay = document.getElementById('menu_overlay');

    menuOpen.onclick = function(event) {
        navbar.classList.remove('hidden');
        navbar.classList.remove('closed');
        navbar.classList.add('opened');
        menuOverlay.classList.remove('hidden');
    };

    menuClose.onclick = function(event) {
        navbar.classList.remove('opened');
        navbar.classList.add('closed');
        menuOverlay.classList.add('hidden');
    }

    navbar.onanimationend = e => {
        if(navbar.classList.contains('closed')) {
            navbar.classList.add('hidden');
        }
    }


</script>