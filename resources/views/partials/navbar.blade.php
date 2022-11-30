<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">HD</a>
                    <ul class="dropdown-menu fade-up">
                        <li><a class="dropdown-item" href="{{ route('habboducket-team') }}">Ons team</a></li>
                        <li><a class="dropdown-item" href="{{ route('habboducket-vacancies') }}">Vacatures</a></li>
                        <li><a class="dropdown-item" href="#">Statistieken</a></li>
                        <li><a class="dropdown-item" href="#">Badges</a></li>
                        <li><a class="dropdown-item" href="#">Duckets</a></li>
                        <li><a class="dropdown-item" href="#">Donateurs</a></li>
                        <li><a class="dropdown-item" href="#">Evenementen</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Nieuws</a>
                    <ul class="dropdown-menu fade-up">
                        <li><a class="dropdown-item" href="{{ route('news') }}">Laatste nieuws</a></li>
                        <li><a class="dropdown-item" href="#">Game</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Game</a>
                    <ul class="dropdown-menu fade-up">
                        <li><a class="dropdown-item" href="#">Over game</a></li>
                        <li><a class="dropdown-item" href="#">Laatste badges</a></li>
                        <li><a class="dropdown-item" href="#">Laatste meubels</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Fancenter</a>
                    <ul class="dropdown-menu fade-up">
                        <li><a class="dropdown-item" href="#">Avatar generator</a></li>
                        <li><a class="dropdown-item" href="#">Font generator</a></li>
                        <li><a class="dropdown-item" href="#">Laatste meubels</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Account </a>
                    <ul class="dropdown-menu dropdown-menu-end fade-down">
                        <li><a class="dropdown-item" href="#">Inloggen</a></li>
                        <li><a class="dropdown-item" href="#">Registreren </a></li>
                        <li><a class="dropdown-item" href="{{ route('eendenportaal') }}">Eendenportaal</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
