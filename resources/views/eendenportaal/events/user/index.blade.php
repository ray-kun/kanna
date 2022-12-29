@extends('eendenportaal.layouts.master')

@section('title')
    Mijn evenementen
@endsection

@section('content')
    <div class="container">
        <div class="row pt-5 pt-md-0">

            @include('eendenportaal/partials/sidenav')
            <div class="col-12 col-lg-8">
                <div class="row justify-content-center">
                    <div class="col-12">

                        @if(session('status') === 'success')
                            <div class="alert alert-success" id="alert-success" role="alert">
                                <h4 class="alert-heading">Evenement is toegevoegd <i class="fa-solid fa-party-horn fa-l"></i> </h4>
                                <p>Kwak-tas-tisch, je evenement is toegevoegd en moet nog goedgekeurd worden door een eventbeheerder</p>
                            </div>
                        @elseif(session('status') === 'failed')
                            <div class="alert alert-success" role="alert">
                                Wachtwoord is aangepast!
                            </div>
                        @elseif(session('status') === 'edit_success')
                            <div class="alert alert-success" role="alert">
                                Nieuwsbericht is aangepast!
                            </div>
                        @endif


                        <div class="d-grid">
                            <a href="{{ route(get_admin_name().'.events.create') }}" class="btn btn-outline-secondary mb-4 py-3">
                                <span class="me-2"><span class="fas fa-plus"></span></span>Nieuwe event aanmaken
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-12">
                        @foreach($events as $event)
                            <div class="card border-gray-300 mb-4">
                                <div class="row g-0 align-items-center">
                                    <div class="col-12 col-lg-6 col-xl-4">
                                        <a href="#">
                                            <img src="https://picsum.photos/700/450" alt="Thumbnail nieuwstitel" class="card-img p-2 rounded-xl">
                                        </a>
                                    </div>
                                    <div class="col-12 col-lg-6 col-xl-8">
                                        <div class="card-body py-lg-0">
                                            <div class="d-flex g-0 align-items-center mb-2">
                                                <div class="col text-left">
                                                    <ul class="list-group mb-0">
                                                        <li class="list-group-item border-0 small p-0">
                                                            <i class="fa-solid fa-calendar me-1"></i> {{ $event->date }}
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col text-right">
                                                    <div class="btn-group">
                                                        <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="icon icon-sm">
                                                                <span class="fas fa-ellipsis-h icon-secondary"></span>
                                                            </span><span class="sr-only">Toggle Dropdown</span>
                                                        </button>

                                                        <div class="dropdown-menu py-0">
                                                            <a class="dropdown-item rounded-top" href="#">
                                                                <i class="fa-solid fa-eye"></i> Bekijk</a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fa-solid fa-pen-to-square"></i> Bewerken
                                                            </a>
                                                            <form class="mb-0" method="POST"
                                                                  action="#">
                                                                <a class="dropdown-item text-danger rounded-bottom">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit" class="btn-del text-danger">
                                                                        <span class="fa fa-trash me-2" aria-hidden="true"></span> Verwijderen
                                                                    </button>
                                                                </a>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <h2 class="h5">{{ $event->title }}</h2>
                                                <p>{{ 'van '.$event->time_from.' tot '.$event->time_till }}</p>
                                            </a>
                                            <div class="col d-flex ps-0">
                                                <span @class(['font-small me-3', 'text-success' => 1, 'text-danger' => !1])>
                                                    <i @class(['fa-solid me-1', 'fa-circle-check' => 1, 'fa-circle-xmark' => !1])></i>
                                                   Actief
                                                </span>
                                                <span class="text-muted font-small me-3">
                                                    <i class="fa-solid fa-trophy-star me-1"></i>
                                                    5 credits
                                                </span>
                                                <a class="font-small text-dark" href="./messages.html">
                                                    <i class="fa-solid fa-user me-1"></i> {{ $event->user->username }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

