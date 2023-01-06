@extends('eendenportaal.layouts.master')

@section('title')
    Nieuwsberichten
@endsection

@section('content')
    <div class="container">
        <div class="row pt-5 pt-md-0">

            @include('eendenportaal.partials.sidenav')
            <div class="col-12 col-lg-8">
                <div class="row justify-content-center">
                    <div class="col-12">

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


                        <div class="d-grid">
                            <a href="{{ route('eendenportaal.articles.user.create') }}"
                               class="btn btn-outline-secondary mb-4 py-3">
                                <span class="me-2"><span class="fas fa-plus"></span></span>Nieuwe artikel toevoegen
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-12">
                        
                        @foreach($articles as $article)
                            <div class="card border-gray-300 mb-4">
                                <div class="row g-0 align-items-center">
                                    <div class="col-12 col-lg-6 col-xl-4">
                                        <a href="#">
                                            <img src="https://picsum.photos/700/450" alt="Thumbnail nieuwstitel"
                                                 class="card-img p-2 rounded-xl">
                                        </a>
                                    </div>
                                    <div class="col-12 col-lg-6 col-xl-8">
                                        <div class="card-body py-lg-0">
                                            <div class="d-flex g-0 align-items-center mb-2">
                                                <div class="col text-left">
                                                    <ul class="list-group mb-0">
                                                        <li class="list-group-item border-0 small p-0">
                                                            <i class="fa-solid fa-calendar me-1"></i> Geplaatst
                                                            op {{ $article->created_at }}
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col text-right">
                                                    <div class="btn-group">
                                                        <button
                                                            class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="icon icon-sm">
                                                                <span class="fas fa-ellipsis-h icon-secondary"></span>
                                                            </span><span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu py-0">
                                                            <a class="dropdown-item rounded-top"
                                                               href="{{ route('eendenportaal.articles.user.show', $article) }}">
                                                                <i class="fa-solid fa-eye"></i> Bekijk artikel</a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fa-solid fa-pen-to-square"></i> Bewerken
                                                            </a>
                                                            <form class="mb-0" method="POST"
                                                                  action="#">
                                                                <a class="dropdown-item text-danger rounded-bottom">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit" class="btn-del text-danger">
                                                                        <span class="fa fa-trash me-2"
                                                                              aria-hidden="true"></span> Verwijderen
                                                                    </button>
                                                                </a>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <h2 class="h5">{{ $article->title }}</h2>
                                                <p>{{ $article->short_description }}</p>
                                            </a>
                                            <div class="col d-flex ps-0">
                                                <span @class(['font-small me-3', 'text-muted' => $article->status == 1, 'text-danger' => $article->status == 2, 'text-success' => $article->status == 3,])>
                                                    <i @class(['fa-solid', 'fa-circle-minus' => $article->status == 1, 'fa-circle-xmark' => $article->status == 2, 'fa-circle-check' => $article->status == 3])></i>
                                                    {{ get_status($article->status) }}
                                                </span>

                                                <span class="text-muted font-small me-3">
                                                   <i class="fa-solid fa-comments me-1"></i>
                                                    0 reactie(s)
                                                </span>
                                                <span class="text-muted font-small me-3">
                                                    <i class="fa-solid fa-filters me-1"></i> {{ $article->category }}
                                                </span>
                                                <a class="font-small text-dark" href="./messages.html">
                                                    <i class="fa-solid fa-user me-1"></i> {{ $article->user->username }}
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

