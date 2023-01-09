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
                        <h4 class="alert-heading">Vacature is toegevoegd <i class="fa-solid fa-party-horn fa-l"></i></h4>
                        <p>Kwak-tas-tisch, de vacature is toegevoegd</p>
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

                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card border-gray-300">
                            <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                                <div class="d-block">
                                    <h2 class="h5 mb-0">Vacatures</h2>
                                </div>
                                <div class="d-flex ms-auto">
                                    <a href="{{ route('eendenportaal.administrator.jobs.create') }}" class="btn btn-orange btn-sm"><i class="fa-solid fa-plus"></i> Nieuw</a>
                                </div>
                            </div>

                            <div class="card-body p-2">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Naam</th>
                                        <th scope="col">Geplaatst door</th>
                                        <th scope="col">Datum</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jobs as $job)
                                        <tr>
                                            <td>{{ $job->title }}</td>
                                            <td>{{ $job->user->username }}</td>
                                            <td>{{ $job->created_at }}</td>
                                            <td>{{ $job->status }}</td>
                                            <td>
                                                <a href="{{ route('eendenportaal.administrator.jobs.show', $job) }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
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

