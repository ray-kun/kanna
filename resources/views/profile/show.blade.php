@extends('layouts.master')

@section('title')
    Mijn profiel
@endsection

@section('content')
    <div class="container" style="margin-top: 50px;">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profiel van {{ $user->username }}</h5>
                        <p>Gebruikersnaam: {{ $user->username }}</p>
                        <p>Rol: {{ $user->role_id }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Badges van {{ $user->username }}</h5>
                        <p>Naam heeft nog geen badges</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
