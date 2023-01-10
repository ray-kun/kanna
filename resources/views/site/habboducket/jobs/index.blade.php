@extends('site.layouts.master')

@section('title')
    Vacatures
@endsection

@section('content')

    <div class="container" style="margin-top: 50px;">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-xl-8">
                @foreach($jobs as $job)
                <div class="card">
                    <div class="card-body">
                        <div class="accordion accordion-flush" id="accordionFlush{{ $job->id }}">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading-{{ $job->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-{{ $job->id }}" aria-expanded="false" aria-controls="flush-collapse-{{ $job->id }}">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="mb-1">{{ $job->title }}</p>
                                            <span class="badge bg-success me-3">{{ $job->status }}</span>
                                        </div>
                                    </button>
                                </h2>

                                <div id="flush-collapse-{{ $job->id }}" class="accordion-collapse collapse" aria-labelledby="flush-heading-{{ $job->id }}" data-bs-parent="#accordionFlush{{ $job->id }}">
                                    <div class="accordion-body">
                                        <p class="mb-1">{!! $job->description !!}</p>
                                        <button type="button" class="btn btn-primary btn-sm">Solliciteer direct &raquo;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ons team</h5>
                        <p>Ons team zorgt dat alles op rolletjes loopt</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
