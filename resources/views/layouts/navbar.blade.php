<nav class="navbar" id="navbar">
    <div class="logo">
        <img src="{{ URL::asset('logo/logo_white.svg') }}" draggable="false" alt="logo"/>
    </div>
    <i class="material-icons" id="menu_open">menu</i>
    <ul>
        <li>
            <a href='/' title="Головна" class="{{ request()->routeIs('index') ? 'active' : ''}}">
                <i class="material-icons">dashboard</i>
            </a>
        </li>
        <li>
            <a href='/leads' title="Ліди" class="{{ request()->routeIs('leads') ? 'active' : ''}}">
                <i class="material-icons">request_page</i>
            </a>
        </li>
        <li>
            <a href='/projects' title="Проєкти" class="{{ request()->routeIs('/projects') ? 'active' : ''}}">
                <i class="material-icons">work</i>
            </a>
        </li>
        <li>
            <a href='/tasks' title="Завдання" class="{{ request()->routeIs('/tasks') ? 'active' : ''}}">
                <i class="material-icons">assignment</i>
            </a>
        </li>
        <li>
            <a href='/team' title="Команда" class="{{ request()->routeIs('/team') ? 'active' : ''}}">
                <i class="material-icons">groups</i>
            </a>
        </li>
    </ul>    
    
    <legend>
        <i class="material-icons" id="open_settings">
            settings
        </i>
    </legend>

</nav>

<x-popup-card></x-popup-card>
