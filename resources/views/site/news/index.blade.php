@extends('site.layouts.master')

@section('title')
    Laatste Nieuws
@endsection

@section('content')

    <div class="container" style="margin-top: 50px;">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-xl-8">
                @foreach($articles as $article)
                    <div class="card">
                        <div class="card-body">
                            <div class="nieuws-groen-groot">
                                <div class="nieuws-topstory" style="background-color: red;"></div>
                                <div class="nieuws-title">
                                    <a href="{{ route('news.show', $article) }}"><h5 class="card-title">{{ $article->title }}</h5></a>
                                    <p class="mb-2">{{ $article->short_description }}</p>
                                </div>
                                <div class="nieuws-right">
                                    <span class="auteur">{{ $article->created_at }} | {{ $article->user->username }} | {{ $article->category }}</span>
                                    <div style="background-color: red; height: 62px; width: 54px; overflow: hidden; float: right;"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Laatste nieuws</h5>
                        <p>Hier een overzicht wat geschreven is</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
