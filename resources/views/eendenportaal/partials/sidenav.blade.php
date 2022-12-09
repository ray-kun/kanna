<div class="col-12 col-lg-4 mb-3 mb-lg-0">
    <div class="card border-gray-300 p-2">
        <div class="card-header bg-white border-0 text-center d-flex flex-row flex-lg-column align-items-center justify-content-center px-1 px-lg-4">
            <div class="profile-thumbnail dashboard-avatar mx-lg-auto me-3">
                <img src="https://i0.wp.com/tleliteracy.com/wp-content/uploads/2017/02/default-avatar.png" class="card-img-top rounded-circle border-white" alt="Bonnie Green Portrait">
            </div>

            <span class="h5 mt-4">Goedeavond, raydevinlr!</span>
            <span class="h6">Eigenaar</span>
        </div>

        <nav class="sidebar">
            <ul class="nav flex-column" id="nav_accordion">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route(strtolower(config('app.admin_name')).'.index') }}">Dashboard</a>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#">Beheerder <i class="fa-solid fa-caret-down ms-2"></i></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="#">Alle nieuwsberichten</a></li>
                        <li><a class="nav-link" href="#">Nieuwsbericht beheer</a></li>
                        <li><a class="nav-link" href="#">Submenu item 3</a> </li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#">Nieuwsreporter <i class="fa-solid fa-caret-down ms-2"></i></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="{{ route(get_admin_name().'.articles.index') }}">Alle nieuwsberichten</a></li>
                        <li><a class="nav-link" href="#">Nieuwsbericht plaatsen</a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#">Event <i class="fa-solid fa-caret-down ms-2"></i></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="#">Alle events</a></li>
                        <li><a class="nav-link" href="#">Event toevoegen</a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#">Moderatie <i class="fa-solid fa-caret-down ms-2"></i></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="#">Gebruiker verbannen</a></li>
                        <li><a class="nav-link" href="#">IP ban</a></li>
                        <li><a class="nav-link" href="#">Profiel logs</a></li>
                        <li><a class="nav-link" href="#">Commentaar logs</a></li>
                    </ul>
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link" href="#">Developer tools <i class="fa-solid fa-caret-down ms-2"></i></a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link" href="#">Website instellingen</a></li>
                        <li><a class="nav-link" href="#">Thema veranderen</a></li>
                        <li><a class="nav-link" href="#">Versie beheer</a></li>
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
