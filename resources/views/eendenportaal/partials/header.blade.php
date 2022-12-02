<header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light navbar-transparent navbar-theme-secondary headroom--not-bottom headroom--top">
        <div class="container position-relative">
            <a class="navbar-brand me-lg-5" href="#">
                <img class="navbar-brand-light" src="{{ asset('admin/images/app-logo.svg') }}" alt="Logo dark">
            </a>
            <div class="navbar-collapse collapse me-auto" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="#">
                                <img class="navbar-brand-light" src="{{ asset('admin/images/app-logo.svg') }}" alt="Logo dark">
                            </a>
                        </div>

                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" class="fas fa-times" data-bs-toggle="collapse" data-bs-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="frontPagesDropdown">Account</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="supportDropdown" aria-expanded="false">Helpdesk <span class="badge badge-sm badge-secondary ms-2"><i class="fa-solid fa-bell"></i> 0</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <!-- Button trigger modal -->
                        <button type="button" id="trans-button" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Changelogs <span class="badge badge-secondary">v1.0</span>
                        </button>
                    </li>
                </ul>
            </div>

            <div class="d-flex align-items-center">
                <a href="{{ route('homepage') }}" class="btn btn-orange">
                    <i class="fa-solid fa-angles-left me-2"></i>Terug naar de website</a>
                <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
</header>
