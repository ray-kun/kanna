@extends('layouts.master')

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

                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Gebruikersnaam</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Wachtwoord</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                                <div id="passwordHelp" class="form-text">Gebruik nooit je Game wachtwoord!</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Wachtwoord herhaling</label>
                                <input type="password" class="form-control" id="exampleInputPassword2">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Missie verificatie</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" value="HD-<?php echo substr(sha1(mt_rand()),17,8); ?>" readonly>
                                <div id="passwordHelp" class="form-text">Vul deze in je missie in</div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Ik ga akkoord met de algemene voorwaarden</label>
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
                        <b>Creëer je eigen profiel</b>
                        <p>Voeg een gastenboek toe en vertel wat over jezelf.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Missie verificatie</h5>
                        <p>
                            Om zeker te weten dat jij de persoon bent vragen we je motto te verifieren en dat is heel simpel!
                            Ga in Habbo en verander je missie in de code die hier staat als dat is ingevuld doe je registreren.
                        </p>
                        <p>Kom je er niet uit of werkt het niet? Neem dan contact met ons op!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
