@extends('site.layouts.master')

@section('title')
    Laatste Nieuws
@endsection

@section('content')

    <div class="container" style="margin-top: 50px;">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p>{!! $article->body !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informatie over artikel</h5>
                        <p>Geschreven door: {{ $article->user->username }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
