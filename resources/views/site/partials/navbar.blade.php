<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('homepage') }}">
                        <div class="nav-icon" style="background-image: url('{{ asset('assets/images/icon_home.png') }}')"></div> Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <div class="nav-icon" style="background-image: url('{{ asset('assets/images/icon_ducket.png') }}')"></div> Kanna
                    </a>
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
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <div class="nav-icon" style="background-image: url('{{ asset('assets/images/icon_news.png') }}')"></div> Nieuws
                    </a>
                    <ul class="dropdown-menu fade-up">
                        <li><a class="dropdown-item" href="{{ route('news') }}">Laatste nieuws</a></li>
                        <li><a class="dropdown-item" href="#">Game</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <div class="nav-icon" style="background-image: url('{{ asset('assets/images/icon_hotel_v2.png') }}')"></div> Game
                    </a>
                    <ul class="dropdown-menu fade-up">
                        <li><a class="dropdown-item" href="#">Over game</a></li>
                        <li><a class="dropdown-item" href="#">Laatste badges</a></li>
                        <li><a class="dropdown-item" href="#">Laatste meubels</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <div class="nav-icon" style="background-image: url('{{ asset('assets/images/icon_extra.gif') }}')"></div> Fancenter
                    </a>
                    <ul class="dropdown-menu fade-up">
                        <li><a class="dropdown-item" href="#">Avatar generator</a></li>
                        <li><a class="dropdown-item" href="#">Font generator</a></li>
                        <li><a class="dropdown-item" href="#">Laatste meubels</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    @guest
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <div class="nav-icon" style="background-image: url('{{ asset('assets/images/icon_extra.gif') }}')"></div> Account
                    </a>
                    @endguest

                    @auth
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                       <div class="nav-icon" style="background-image: url('{{ asset('assets/images/icon_extra.gif') }}')"></div>
                        {{ Auth::user()->username }}
                    </a>
                    @endauth
                    <ul class="dropdown-menu dropdown-menu-end fade-down">
                        @guest
                        <li><a class="dropdown-item" href="{{ route('account.login')  }}">Inloggen</a></li>
                        <li><a class="dropdown-item" href="{{ route('account.register') }}">Registreren </a></li>
                        @endguest
                        @auth
                                <li><a class="dropdown-item" href="{{ route('profile.user', Auth::user()->username) }}">Mijn profiel</a></li>
                                <li><a class="dropdown-item" href="{{ route('account.settings') }}">Instellingen</a></li>
                                <li><a class="dropdown-item" href="{{ route('account.shop') }}">Winkel</a></li>
                                @can('admin')
                                <li><a class="dropdown-item" href="{{ route('admin.index') }}">Eendenportaal</a></li>
                                @endcan
                                <form method="POST" action="{{ route('account.logout') }}">
                                    @csrf
                                    <li><button type="submit" class="dropdown-item"><span class="fas fa-sign-out-alt me-2"></span> Uitloggen</button></li>
                                </form>
                        @endauth
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
