@extends('site.layouts.master')

@section('title')
    Registreren
@endsection

@section('content')

    <div class="container" style="margin-top: 50px;">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Registreren op Kanna</h5>
                        <form action="{{ route('account.register') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Gebruikersnaam</label>
                                <input type="text" class="@error('username') is-invalid @enderror form-control" id="username" name="username" value="{{ old('username') }}">
                                @error('username')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Wachtwoord</label>
                                <input type="password" class="@error('password') is-invalid @enderror form-control" name="password" id="password" aria-describedby="passwordHelp">
                                <div id="passwordHelp" class="form-text">Gebruik nooit je Game wachtwoord!</div>
                                @error('password')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_repeat" class="form-label">Wachtwoord herhaling</label>
                                <input type="password" class="@error('password_repeat') is-invalid @enderror form-control" name="password_repeat" id="password_repeat">
                                @error('password_repeat')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="mottoVerification" class="form-label">Missie verificatie</label>
                                <input type="text" class="form-control" id="mottoVerification" value="HabboDucket-<?php echo substr(sha1(mt_rand()),17,8); ?>" aria-describedby="mottoHelp" readonly>
                                <div id="mottoHelp" class="form-text">Vul deze in je missie in</div>
                            </div>
                            <button type="submit" class="btn btn-success">Maak mijn account aan</button>
                            <a href="{{ route('account.login') }}" class="btn btn-secondary" style="width: 120px;">Inloggen</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Account op Kanna</h5>
                        <b>Cre??er je eigen profiel</b>
                        <p>Voeg een gastenboek toe en vertel wat over jezelf.</p>
                    </div>
                </div>

                @include('site.partials.verification-card')

            </div>
        </div>

    </div>
@endsection
