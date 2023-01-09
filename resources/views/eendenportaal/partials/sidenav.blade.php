<div class="col-12 col-lg-4 mb-3 mb-lg-0">
    <div class="card border-gray-300 p-2">
        <div class="card-header bg-white border-0 text-center d-flex flex-row flex-lg-column align-items-center justify-content-center px-1 px-lg-4">
            <div class="profile-thumbnail dashboard-avatar mx-lg-auto me-3">
                <img src="https://i0.wp.com/tleliteracy.com/wp-content/uploads/2017/02/default-avatar.png" class="card-img-top rounded-circle border-white" alt="Bonnie Green Portrait">
            </div>

            <span class="h5 mt-4">Goedemorgen, {{ \Illuminate\Support\Facades\Auth::user()->username }}!</span>
            <span class="h6">Eigenaar</span>
        </div>

        <nav class="sidebar">
            <ul class="nav flex-column" id="nav_accordion">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('eendenportaal.index') }}"><i class="fa-solid fa-gauge me-2"></i> Dashboard</a>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#"><i class="fa-solid fa-key me-2"></i>Administrator <i class="fa-solid fa-caret-down ms-2"></i></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="{{ route('eendenportaal.administrator.jobs.index') }}">Vacatures</a></li>
                        <li><a class="nav-link" href="#">Sollicitaties</a></li>
                        <li><a class="nav-link" href="#">Medewerkers</a></li>
                        <li><a class="nav-link" href="#">Rollen</a></li>
                        <li><a class="nav-link" href="#">Permissies</a></li>
                        <li><a class="nav-link" href="#">Categorieen beheren</a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#"><i class="fa-solid fa-star me-2"></i> Beheerder <i class="fa-solid fa-caret-down ms-2"></i></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="{{ route('eendenportaal.articles.management.index') }}">Alle artikelen</a></li>
                        <li><a class="nav-link" href="{{ route('eendenportaal.articles.management.overview') }}">Nieuwsbericht beheer</a></li>
                        <li><a class="nav-link" href="{{ route('eendenportaal.events.management.index') }}">Alle events</a></li>
                        <li><a class="nav-link" href="{{ route('eendenportaal.events.management.overview') }}">Evenementen beheer</a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#"><i class="fa-solid fa-newspaper me-2"></i> Nieuwsreporter <i class="fa-solid fa-caret-down ms-2"></i></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="{{ route('eendenportaal.articles.user.create') }}">Artikel plaatsen</a></li>
                        <li><a class="nav-link" href="{{ route('eendenportaal.articles.user.index') }}">Mijn artikelen</a></li>
                        <li><a class="nav-link" href="{{ route('eendenportaal.articles.user.denied') }}">Afgekeurde artikelen</a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#"><i class="fa-solid fa-calendar-days me-2"></i> Event <i class="fa-solid fa-caret-down ms-2"></i></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="{{ route('eendenportaal.events.user.create') }}">Event plaatsen</a></li>
                        <li><a class="nav-link" href="{{ route('eendenportaal.events.user.index') }}">Mijn evenementen</a></li>
                        <li><a class="nav-link" href="{{ route('eendenportaal.events.user.denied') }}">Afgekeurde evenementen</a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#"><i class="fa-solid fa-palette me-2"></i> Pixelaar <i class="fa-solid fa-caret-down ms-2"></i></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="#">Project uploaden</a></li>
                        <li><a class="nav-link" href="#">Mijn projecten</a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping me-2"></i> Winkel <i class="fa-solid fa-caret-down ms-2"></i></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="#">Item toevoegen</a></li>
                        <li><a class="nav-link" href="#">Alle items</a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#"><i class="fa-solid fa-shield-halved me-2"></i> Moderatie <i class="fa-solid fa-caret-down ms-2"></i></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="#">Gebruiker verbannen</a></li>
                        <li><a class="nav-link" href="#">IP ban</a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#"><i class="fa-solid fa-screwdriver-wrench me-2"></i> Developer tools <i class="fa-solid fa-caret-down ms-2"></i></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="#">Website instellingen</a></li>
                        <li><a class="nav-link" href="#">Thema veranderen</a></li>
                        <li><a class="nav-link" href="#">Versie beheer</a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#"><i class="fa-solid fa-receipt me-2"></i> Logs <i class="fa-solid fa-caret-down ms-2"></i></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="#">Profiel logs</a></li>
                        <li><a class="nav-link" href="#">Gastenboek logs</a></li>
                        <li><a class="nav-link" href="#">Commentaar logs</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div class="col-12 d-lg-none">
    <div class="card bg-white border-gray-300 mb-4 mb-lg-5">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-10 d-flex">
                    <a href="#" class="list-group-item list-group-item-action border-0 text-center me-2 active">Overview</a>
                    <a href="#" class="list-group-item list-group-item-action border-0 text-center me-2">Settings</a>
                    <a href="#" class="list-group-item list-group-item-action border-0 text-center me-2 d-none d-sm-block border-0">My Items</a>
                    <a href="./security.html" class="list-group-item list-group-item-action border-0 text-center d-none d-md-block border-0">Security</a>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <div class="btn-group dropleft">
                        <button class="btn btn-link dropdown-toggle dropdown-toggle-split me-2 m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-secondary fa-lg"></span>
                                        </span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>

                        <div class="dropdown-menu">
                            <a href="#" class="list-group-item list-group-item-action d-sm-none border-0">My Items</a>
                            <a href="#" class="list-group-item list-group-item-action d-md-none border-0">Security</a>
                            <a href="#" class="list-group-item list-group-item-action border-0">Billing</a>
                            <a href="#" class="list-group-item list-group-item-action border-0">Messages</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
