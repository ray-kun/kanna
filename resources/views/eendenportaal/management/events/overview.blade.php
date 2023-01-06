@extends('eendenportaal.layouts.master')

@section('title')
    Nieuwsberichten
@endsection

@section('content')
    <div class="container">
        <div class="row pt-5 pt-md-0">

            @include('eendenportaal.partials.sidenav')

            <div class="col-12 col-lg-8">

                @if(session('status') === 'success')
                    <div class="alert alert-success" id="alert-success" role="alert">
                        <h4 class="alert-heading">Nieuwsbericht is toegevoegd <i
                                class="fa-solid fa-party-horn fa-l"></i></h4>
                        <p>Kwak-tas-tisch, de artikel is goedgekeurd en op de website geplaatst!</p>
                    </div>
                @elseif(session('status') === 'failed')
                    <div class="alert alert-success" role="alert">
                        Wachtwoord is aangepast!
                    </div>
                @elseif(session('status') === 'edit_success')
                    <div class="alert alert-success" role="alert">
                        Nieuwsbericht is aangepast!
                    </div>
                @elseif(session('status') === 'event_approved')
                    <div class="alert alert-success" role="alert">
                        Evenement is goedgekeurd!
                    </div>
                @elseif(session('status') === 'event_denied')
                    <div class="alert alert-success" role="alert">
                        Evenement is afgekeurd! De auteur krijgt een melding hierover om zijn artikel opnieuw te schrijven
                    </div>
                @endif

                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card border-gray-300">
                            <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                                <div class="d-block">
                                    <h2 class="h5 mb-0">Nieuwsberichten overzicht</h2>
                                </div>
                            </div>

                            <div class="card-body p-2">
                                @if($events->isEmpty())
                                    <div class="alert alert-success" role="alert">
                                        <i class="fa-solid fa-circle-exclamation me-2"></i> Er zijn geen evenementen om goed te keuren.
                                    </div>
                                @else
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Titel</th>
                                        <th scope="col">Organisator</th>
                                        <th scope="col">Datum</th>
                                        <th scope="col">Tijd</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($events as $event)
                                        <tr>
                                            <td>{{ $event->title }}</td>
                                            <td>{{ $event->user->username }}</td>
                                            <td>{{ $event->date }}</td>
                                            <td>van 01:00 tot 03:00</td>
                                            <td>{{ $event->status }}</td>
                                            <td>
                                                <a href="{{ route('eendenportaal.events.management.show', $event) }}"
                                                   class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

