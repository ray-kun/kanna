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
                        <p>Kwak-tas-tisch, je artikel is toegevoegd en moet nog goedgekeurd worden door een
                            nieuwsbeheerder</p>
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
                                    <h2 class="h5 mb-0">Reviews</h2>
                                </div>
                            </div>

                            <div class="card-body p-2">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Titel</th>
                                        <th scope="col">Categorie</th>
                                        <th scope="col">Auteur</th>
                                        <th scope="col">Geplaatst op</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($articles as $article)
                                        <tr>
                                            <td>{{ $article->title }}</td>
                                            <td>{{ $article->category }}</td>
                                            <td>{{ $article->user->username }}</td>
                                            <td>{{ $article->created_at }}</td>
                                            <td>{{ $article->status }}</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i
                                                        class="fa-solid fa-trash-can"></i></a>
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

