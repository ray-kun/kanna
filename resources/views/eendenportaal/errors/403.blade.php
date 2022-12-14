@extends('eendenportaal.layouts.master')

@section('title')
    404 niet gevonden
@endsection

@section('content')
    <div class="container">
        <div class="row pt-5 pt-md-0">

            @include('eendenportaal.partials.sidenav')

            <div class="col-12 col-lg-8">
                <div class="col-12 col-sm-12 mb-4">
                    <div class="card border-gray-300">
                        <div class="card-body d-block d-md-flex align-items-center">
                            <div class="row g-0 w-100">
                                <div class="col-8">
                                    <div class="illustration-text p-3 m-1">
                                        <h4 class="illustration-text">Je hebt geen toegang</h4>
                                        <p class="mb-0">Helaas, je hebt geen toegang tot deze pagina, klopt het niet?
                                            Neem dan contact op!</p>
                                    </div>
                                </div>
                                <div class="col-4 align-self-center">
                                    <img src="{{ asset('assets/images/undraw_experience_design_re_ca7l.svg') }}"
                                         alt="Customer Support" class="img-fluid illustration-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

