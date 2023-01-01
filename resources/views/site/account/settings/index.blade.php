@extends('site.layouts.master')

@section('title')
    Account instellingen
@endsection

@section('content')

    <div class="container" style="margin-top: 50px;">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Account instellingen</h5>
                        <p>In dit gedeelte kan jij je account instellingen aanpassen.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-xl-4">
                @include('site.partials.settings-nav')
            </div>
        </div>

    </div>
@endsection
