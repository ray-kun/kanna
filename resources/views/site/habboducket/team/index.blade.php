@extends('site.layouts.master')

@section('title')
    Ons Team
@endsection

@section('content')

    <div class="container" style="margin-top: 50px;">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Eigenaar</h5>
                        <p>Zorgt dat alles op rolletjes loopt.</p>
                        <div id="staff">
                            <div id="staff_avatar"><img class="staffimg" src=""></div>
                            <div id="staff_naam"><a href="#">raydevinlr</a></div>
                            <div id="staff_rank">Eigenaar</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Beheer</h5>
                        <p>Zorgt voor alle zaken rondom.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Redactie</h5>
                        <p>Zorgt voor alle laatste nieuws.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pixelaar</h5>
                        <p>Zorgt voor alle grafische ontwerpen.</p>
                    </div>
                </div>
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
