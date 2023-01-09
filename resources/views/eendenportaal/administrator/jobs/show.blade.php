@extends('eendenportaal.layouts.master')

@section('title')
    {{ $job->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row pt-5 pt-md-0">

            @include('eendenportaal.partials.sidenav')
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card border-gray-300">
                            <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                                <div class="d-block">
                                    <h2 class="h5 mb-0">{{ $job->title }}</h2>
                                </div>
                            </div>

                            <div class="card-body">
                                {!! $job->description !!}

                                <div class="row">
                                    <div class="col-3">
                                        test
                                    </div>
                                    <div class="col-3">
                                        {{ $job->status }}
                                    </div>
                                    <div class="col-3">
                                        {{ $job->created_at }}
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
