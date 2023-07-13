

<div class="popup-card left-arrow hidden" id="settings-popup">
    <ul>
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

</div>

<script>

    const settingsButton = document.getElementById('open_settings');
    const settingsPopup = document.getElementById('settings-popup');
    const settingsNavbar = document.getElementById('navbar');

    settingsButton.onclick = e => {
        e.preventDefault();

        const buttonRect = settingsButton.getBoundingClientRect();
        const popupRect = settingsPopup.getBoundingClientRect();
        
        if(settingsPopup.classList.contains('hidden')) {
            settingsPopup.classList.remove('hidden');
            settingsPopup.style.left = `${settingsNavbar.offsetWidth + 20}px`;
            settingsPopup.style.top = `${e.clientY - settingsPopup.offsetHeight + 15}px`;
        } else {
            settingsPopup.classList.add('hidden');
        }

    }
</script>