@extends('eendenportaal.layouts.master')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row pt-5 pt-md-0">

            @include('eendenportaal.partials.sidenav')
            <div class="col-12 col-lg-8">

                <div class="d-flex align-items-center justify-content-end mb-4">
                    <form class="mb-0" method="POST" action="{{ route('eendenportaal.articles.management.approve', ['article' => $article]) }}">
                        @method('PUT')
                        @csrf
                        <button type="submit" value="3" name="status" class="btn btn-success me-1">
                            <i class="fa-solid fa-circle-check me-1"></i> Goedkeuren
                        </button>
                        <button type="submit" value="2" name="status" class="btn btn-danger me-1">
                            <i class="fa-sharp fa-solid fa-circle-xmark me-1"></i> Afwijzen
                        </button>
                    </form>
                </div>

                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card border-gray-300">
                            <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                                <div class="d-block">
                                    <h2 class="h5 mb-0">{{ $article->title }}</h2>
                                </div>
                            </div>

                            <div class="card-body">
                                {!! $article->body !!}

                                <div class="row">
                                    <div class="col-3">
                                        {{ $article->user->username }}
                                    </div>
                                    <div class="col-3">
                                        {{ $article->category }}
                                    </div>
                                    <div class="col-3">
                                        {{ $article->created_at }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
