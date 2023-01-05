@extends('admin.layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container">
        <div class="row pt-5 pt-md-0">

            @include('admin.partials.sidenav')

            <div class="col-12 col-lg-8">
                <div class="col-12 col-sm-12 mb-4">
                    <div class="card border-gray-300">
                        <div class="card-body d-block d-md-flex align-items-center">
                            <div class="row g-0 w-100">
                                <div class="col-8">
                                    <div class="illustration-text p-3 m-1">
                                        <h4 class="illustration-text">Welkom op het {{ config('app.admin_name') }}</h4>
                                        <p class="mb-0">Hier achter de schermen gebeuren de meeste dingen</p>
                                    </div>
                                </div>
                                <div class="col-4 align-self-center">
                                    <img src="{{ asset('assets/images/undraw_experience_design_re_ca7l.svg') }}" alt="Customer Support" class="img-fluid illustration-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 mb-4">
                        <div class="card border-gray-300">
                            <div class="card-body d-block d-md-flex align-items-center">
                                <div class="icon icon-shape icon-md icon-shape-primary rounded-circle me-3 mb-4 mb-md-0">
                                    <i class="fa-solid fa-users fa-2xl"></i>
                                </div>
                                <div>
                                    <span class="d-block h6 fw-normal">Gebruikers</span>
                                    <h5 class="h3 fw-bold mb-1">0</h5>
                                    <div class="small mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 mb-4">
                        <div class="card border-gray-300">
                            <div class="card-body d-block d-md-flex align-items-center">
                                <div class="icon icon-shape icon-md icon-shape-primary rounded-circle me-3 mb-4 mb-md-0">
                                    <i class="fa-solid fa-piggy-bank fa-2xl"></i>
                                </div>

                                <div>
                                    <span class="d-block h6 fw-normal">Nieuwsberichten</span>
                                    <h5 class="h3 fw-bold mb-1">0</h5>
                                    <div class="small mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 mb-4">
                        <div class="card border-gray-300">
                            <div class="card-body d-block d-md-flex align-items-center">
                                <div class="icon icon-shape icon-md icon-shape-primary rounded-circle me-3 mb-4 mb-md-0">
                                    <i class="fa-solid fa-photo-film fa-2xl"></i>
                                </div>

                                <div>
                                    <span class="d-block h6 fw-normal">Evenementen</span>
                                    <h5 class="h3 fw-bold mb-1">0</h5>
                                    <div class="small mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 mb-4">
                        <div class="card border-gray-300">
                            <div class="card-body d-block d-md-flex align-items-center">
                                <div class="icon icon-shape icon-md icon-shape-primary rounded-circle me-3 mb-4 mb-md-0">
                                    <i class="fa-solid fa-star fa-2xl"></i>
                                </div>

                                <div>
                                    <span class="d-block h6 fw-normal">Verbanningen</span>
                                    <h5 class="h3 fw-bold mb-1">0</h5>
                                    <div class="small mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 mb-4">
                        <div class="card border-gray-300">
                            <div class="card-body">
                                <h2 class="h5 mb-4">Laatst ingelogd</h2>
                                <ul class="list-unstyled mb-lc-0">
                                    <li class="d-flex align-items-center mb-4">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle" style="width: 50px;" src="https://pbs.twimg.com/media/DTsgGf-XkAEW1nJ.jpg" alt="Raymond">
                                        </div>
                                        <div class="flex-grow-1 mb-lc-0 ps-3">
                                            <p class="h6 text-primary mb-0">raydevinlr</p>
                                            <small>10 minuten geleden</small>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mb-4">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle" style="width: 50px;" src="https://pbs.twimg.com/media/DTsgGf-XkAEW1nJ.jpg" alt="Raymond">
                                        </div>
                                        <div class="flex-grow-1 mb-lc-0 ps-3">
                                            <p class="h6 text-primary mb-0">sonicblaze</p>
                                            <small>10 minuten geleden</small>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mb-4">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle" style="width: 50px;" src="https://pbs.twimg.com/media/DTsgGf-XkAEW1nJ.jpg" alt="Raymond">
                                        </div>
                                        <div class="flex-grow-1 mb-lc-0 ps-3">
                                            <p class="h6 text-primary mb-0">itselise</p>
                                            <small>10 minuten geleden</small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 mb-4">
                        <div class="card border-gray-300">
                            <div class="card-body">
                                <h2 class="h5 mb-4">Nieuwste leden</h2>
                                <ul class="list-unstyled mb-lc-0">
                                    <li class="d-flex align-items-center mb-4">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle" style="width: 50px;" src="https://pbs.twimg.com/media/DTsgGf-XkAEW1nJ.jpg" alt="Raymond">
                                        </div>
                                        <div class="flex-grow-1 mb-lc-0 ps-3">
                                            <p class="h6 text-primary mb-0">raydevinlr</p>
                                            <small>vandaag om 20:00</small>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mb-4">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle" style="width: 50px;" src="https://pbs.twimg.com/media/DTsgGf-XkAEW1nJ.jpg" alt="Raymond">
                                        </div>
                                        <div class="flex-grow-1 mb-lc-0 ps-3">
                                            <p class="h6 text-primary mb-0">wendytjeeislief</p>
                                            <small>gisteren om 20:00</small>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mb-4">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-circle" style="width: 50px;" src="https://pbs.twimg.com/media/DTsgGf-XkAEW1nJ.jpg" alt="Raymond">
                                        </div>
                                        <div class="flex-grow-1 mb-lc-0 ps-3">
                                            <p class="h6 text-primary mb-0">--willow--</p>
                                            <small>2 weken geleden</small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card border-gray-300">
                            <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                                <div class="d-block">
                                    <div class="h6 fw-normal text-gray mb-2">Kijken wat we ermee doen</div>
                                    <h2 class="h3">0</h2>
                                    <div class="small mt-2">
                                        <span class="text-success fw-bold">0 totaal</span>
                                    </div>
                                </div>
                                <div class="d-flex ms-auto">
                                    <a href="#" class="btn btn-orange btn-sm me-3">Alles tonen</a>
                                </div>
                            </div>

                            <div class="card-body p-2">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">-</th>
                                        <th scope="col">-</th>
                                        <th scope="col">-</th>
                                        <th scope="col">-</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">-</th>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

