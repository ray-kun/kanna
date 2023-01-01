@extends('site.layouts.master')

@section('title')
    Wachtwoord instellingen
@endsection

@section('content')

    <div class="container" style="margin-top: 50px;">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Wachtwoord instellingen</h5>
                        <p>Pas hier je wachtwoord aan.</p>

                        @if(session('status') === 'password_edit_failed')
                            <div class="alert alert-danger" role="alert">
                                Huidige wachtwoord komt niet overheen
                            </div>
                        @elseif(session('status') === 'password_edit_success')
                            <div class="alert alert-success" role="alert">
                                Wachtwoord is aangepast!
                            </div>
                        @endif

                        <form action="{{ route('account.settings.password') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="current_password" class="form-label">Huidige wachtwoord</label>
                                <input type="password" class="@error('current_password') is-invalid @enderror form-control" id="current_password" name="current_password">
                                @error('current_password')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="new_password" class="form-label">Nieuwe wachtwoord</label>
                                <input type="password" class="@error('new_password') is-invalid @enderror form-control" name="new_password" id="new_password" aria-describedby="new_passwordHelp">
                                <div id="new_passwordHelp" class="form-text">Gebruik nooit je Game wachtwoord!</div>
                                @error('new_password')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="new_password_repeat" class="form-label">Nieuwe wachtwoord herhaling</label>
                                <input type="password" class="@error('new_password_repeat') is-invalid @enderror form-control" name="new_password_repeat" id="new_password_repeat">
                                @error('new_password_repeat')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="mottoVerification" class="form-label">Missie verificatie</label>
                                <input type="text" class="form-control" id="mottoVerification" value="HabboDucket-<?php echo substr(sha1(mt_rand()),17,8); ?>" aria-describedby="mottoHelp" readonly>
                                <div id="mottoHelp" class="form-text">Vul deze in je missie in</div>
                            </div>
                            <input type="submit" class="btn btn-success" value="Wijzig">
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-xl-4">
                @include('site.partials.settings-nav')

                @include('site.partials.verification-card')

            </div>
        </div>

    </div>
@endsection
