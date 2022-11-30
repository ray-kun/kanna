@extends('layouts.master')

@section('title')
    Homepagina
@endsection

@section('content')

<div class="container" style="margin-top: 50px;">

    <div class="row">

    <!--Profile Card 5-->
    <div class="col-3 mt-4">
        <div class="card profile-card-5">
            <div class="card-img-block">
                <div class="card-img-top" style="background-image: url('https://picsum.photos/500/500')">
                    <span class="badge bg-secondary float-end">Categorie</span>
                    <span class="badge bg-secondary float-end me-1">29 nov 2022</span>
                </div>
            </div>
            <div class="card-body pt-0">
                <h5 class="card-title text-truncate">We zijn eindelijk goed teruggekeerd</h5>
                <p class="card-text">Tijd voor een feestje!</p>
                <p><small>Geschreven door Ryuk</small></p>
            </div>
        </div>
    </div>
    <div class="col-3 mt-4">
        <div class="card profile-card-5">
            <div class="card-img-block">
                <div class="card-img-top" style="background-image: url('https://picsum.photos/500/500')">
                    <span class="badge bg-secondary float-end">Categorie</span>
                    <span class="badge bg-secondary float-end me-1">29 nov 2022</span>
                </div>
            </div>
            <div class="card-body pt-0">
                <h5 class="card-title text-truncate">Game heeft nieuwe meubels toegevoegd</h5>
                <p class="card-text">Tijd voor een feestje!</p>
                <p><small>Geschreven door Ryuk</small></p>

            </div>
        </div>
    </div>
    <div class="col-3 mt-4">
        <div class="card profile-card-5">
            <div class="card-img-block">
                <div class="card-img-top" style="background-image: url('https://picsum.photos/500/500')">
                    <span class="badge bg-secondary float-end">Categorie</span>
                    <span class="badge bg-secondary float-end me-1">29 nov 2022</span>
                </div>
            </div>
            <div class="card-body pt-0">
                <h5 class="card-title text-truncate">Dit is echt geweldig nieuws</h5>
                <p class="card-text">Tijd voor een feestje!</p>
                <p><small>Geschreven door Ryuk</small></p>
            </div>
        </div>
    </div>
    <div class="col-3 mt-4">
        <div class="card profile-card-5">
            <div class="card-img-block">
                <div class="card-img-top" style="background-image: url('https://picsum.photos/500/500')">
                    <span class="badge bg-secondary float-end">Categorie</span>
                    <span class="badge bg-secondary float-end me-1">31 jan 2022</span>
                </div>
            </div>
            <div class="card-body pt-0">
                <h5 class="card-title text-truncate">Wij gaan in december open, geweldig!</h5>
                <div class="author-img"></div>
                <p class="card-text">Tijd voor een feestje!</p>
                <p><small>Geschreven door Ryuk</small></p>
            </div>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-7 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Welkom op HD v2</h5>
                    <p>HD is in ontwikkeling</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-5 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Inloggen op Kanna</h5>
                    <p>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><img src="assets/images/icons/follow_oldclient.gif"></span>
                        <input type="text" class="form-control" placeholder="Gebruikersnaam" id="signin_Username" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <p>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><img src="assets/images/icons/new_13.gif"></span>
                        <input type="password" class="form-control" id="signin_Password" placeholder="Wachtwoord" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <button type="button" class="btn btn-success" onclick="$HabboCast.user.signIn();" style="margin-top: 15px;width: 140px;">Inloggen</button>
                    <button type="button" class="btn btn-secondary" onclick="$HabboCast.user.register();" style="margin-top: 15px;width: 120px;">Registeren</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
