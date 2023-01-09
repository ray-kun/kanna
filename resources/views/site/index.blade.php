@extends('site.layouts.master')

@section('title')
    Homepagina
@endsection

@section('content')

<div class="container" style="margin-top: 50px;">

    @if(session('status') === 'login-success')
        <div class="alert alert-success" role="alert">
            Je bent succesvol ingelogd, welkom!
        </div>
    @endif

    <div class="row">
        @foreach($articles as $article)
            <div class="col-3 mt-4">
                <div class="card profile-card-5">
                    <div class="card-img-block">
                        <div class="card-img-top" style="background-image: url('https://picsum.photos/500/500')">
                            <span class="badge bg-secondary float-end">{{ $article->category }}</span>
                            <span class="badge bg-secondary float-end me-1">{{ $article->created_at }}</span>
                        </div>
                    </div>
                    <a href="{{ route('news.show', $article) }}">
                    <div class="card-body pt-0">
                        <h5 class="card-title text-truncate">{{ $article->title }}</h5>
                        <p class="card-text">{{ $article->short_description }}</p>
                    </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-7 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Welkom op HD v2</h5>
                    <p>HD is in ontwikkeling</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-5 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Twitter</h5>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
