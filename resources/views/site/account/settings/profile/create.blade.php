@extends('site.layouts.master')

@section('title')
    Profiel instellingen
@endsection

@section('content')

    <div class="container" style="margin-top: 50px;">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profiel instellingen</h5>
                        <p>Pas hier dingen aan voor je profiel.</p>

                        <form action="{{ route('account.register') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="mottoVerification" class="form-label">Gebruikersnaam</label>
                                <input type="text" class="form-control" id="mottoVerification" value="{{ Auth::user()->username }}" aria-describedby="mottoHelp" readonly>
                                <div id="mottoHelp" class="form-text">Je gebruikersnaam kan je niet wijzigen, nieuwe gebruikersnaam? Meer info lees je hier &raquo; </div>
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Favoriete meubel</label>
                                <input type="text" class="@error('username') is-invalid @enderror form-control" id="username" name="username" value="{{ old('username') }}">
                                @error('username')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success">Wijzigen</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-xl-4">
                @include('site.partials.settings-nav')
            </div>
        </div>

    </div>
@endsection
