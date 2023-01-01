@extends('site.layouts.master')

@section('title')
    Homepagina
@endsection

@section('content')

<div class="container" style="margin-top: 50px;">

    @if(session('status') === 'login-success')
        <div class="alert alert-success" role="alert">
            Je bent succesvol ingelogd, welkom!
        </div>
    @endif

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
                    <h5 class="card-title">Twitter</h5>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
