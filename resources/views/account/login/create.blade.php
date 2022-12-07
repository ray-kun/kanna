@extends('layouts.master')

@section('title')
    Inloggen
@endsection

@section('content')

    <div class="container" style="margin-top: 50px;">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('account.login') }}" method="post">
                            @csrf
                            <h5 class="card-title">Inloggen op Kanna</h5>
                            <div class="input-group flex-nowrap mb-2">
                            <span class="input-group-text" id="addon-wrapping">
                                <img src="assets/images/icons/follow_oldclient.gif">
                            </span>
                                <input type="text" name="username" class="form-control" placeholder="Gebruikersnaam" id="signin_Username" aria-label="Username" aria-describedby="addon-wrapping">
                                @error('username')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-group flex-nowrap mb-2">
                            <span class="input-group-text" id="addon-wrapping">
                                <img src="assets/images/icons/new_13.gif">
                            </span>
                                <input type="password" name="password" class="form-control" id="signin_Password" placeholder="Wachtwoord" aria-label="Username" aria-describedby="addon-wrapping">
                                @error('password')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-success" style="margin-top: 15px;width: 120px;" value="Inloggen">
                            <a href="{{ route('account.register') }}" class="btn btn-secondary" style="margin-top: 15px;width: 120px;">Registreren</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Account op Kanna</h5>
                        <p>Ons team zorgt dat alles op rolletjes loopt</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
