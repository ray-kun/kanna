@extends('layouts.master')

@section('title')
    Laatste Nieuws
@endsection

@section('content')

    <div class="container" style="margin-top: 50px;">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Titel nieuwsbericht</h5>
                        <p>Extra beschrijving.</p>
                        <a href="#">Ga naar artikel &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Laatste nieuws</h5>
                        <p>Hier een overzicht wat geschreven is</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
