@extends('layouts.master')

@section('title')
    Winkel
@endsection

@section('content')

    <div class="container" style="margin-top: 50px;">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Winkel</h5>
                        <div class="list-group">
                            <div class="list-group-item list-group-item-action pt-4 pb-4" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Gastenboek</h5>
                                    <small>0 muntjes</small>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="mb-1">Voeg een leuke gastenboek op je profiel zodat anderen erin kunnen schrijven</p>
                                    <button type="button" class="btn btn-success">Koop</button>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action pt-4 pb-4" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Twitter</h5>
                                    <small>0 muntjes</small>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="mb-1">Show je feed van twitter op je profiel</p>
                                    <button type="button" class="btn btn-success">Koop</button>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action pt-4 pb-4" aria-current="true">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">YouTube</h5>
                                    <small>0 muntjes</small>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="mb-1">Laat anderen je meest favoriete video zien op YouTube</p>
                                    <button type="button" class="btn btn-success" disabled>Al gekocht</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-xl-4">
                <div class="alert alert-info" role="alert">
                    Je hebt <strong>0</strong> munten in bezit
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Over winkel</h5>
                        <p>Onze winkel is leuk!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
