@extends('admin.layouts.master')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row pt-5 pt-md-0">

            @include('admin.partials.sidenav')
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-8 mb-4">
                        <div class="card border-gray-300">
                            <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                                <div class="d-block">
                                    <h2 class="h5 mb-0">{{ $article->title }}</h2>
                                </div>
                            </div>

                            <div class="card-body">
                                {!! $article->body !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-4">
                        <div class="card border-gray-300">
                            <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                                <div class="d-block">
                                    <h2 class="h5 mb-0">Over artikel</h2>
                                </div>
                            </div>

                            <div class="card-body">
                                <ul>
                                    <li>Auteur: {{ $article->user->username }}</li>
                                    <li>Categorie: {{ $article->category }}</li>
                                    <li>Publicatiedatum: {{ $article->created_at }}</li>
                                    <li>Aantal reacties: 0</li>
                                    <li>Status: Nog niet beoordeeld</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
