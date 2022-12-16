@extends('eendenportaal.layouts.master')

@section('title')
    Rooster
@endsection

@section('content')
    <div class="container">
        <div class="row pt-5 pt-md-0">

            @include('eendenportaal/partials/sidenav')
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card border-gray-300">
                            <div class="card-body d-flex flex-row align-items-center flex-0 border-bottom">
                                <div class="d-block">
                                    <h2 class="h5 mb-0">Rooster</h2>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col">
                                        &laquo; Gisteren
                                    </div>
                                    <div class="col text-center">
                                        Vandaag<br>
                                        16-12-2022
                                    </div>
                                    <div class="col text-end">
                                        Morgen &raquo;
                                    </div>
                                </div>
                                <hr>
                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <th scope="row"><i class="fa-solid fa-clock me-1"></i> 00:00 - 01:00</th>
                                        <td><i class="fa-solid fa-gamepad-modern me-1"></i> Eenden bankspel</td>
                                        <td><i class="fa-solid fa-user me-1"></i> raydevinlr</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fa-solid fa-clock me-1"></i> 01:00 - 02:00</th>
                                        <td><i class="fa-solid fa-gamepad-modern me-1"></i> Stoelendans</td>
                                        <td><i class="fa-solid fa-user me-1"></i> raydevinlr</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fa-solid fa-clock me-1"></i> 02:00 - 03:00</th>
                                        <td><i class="fa-solid fa-gamepad-modern me-1"></i> Koelkastspel</td>
                                        <td><i class="fa-solid fa-user me-1"></i> raydevinlr</td>
                                    </tr>
                                    <tr class="text-success">
                                        <td><i class="fa-solid fa-clock me-1"></i> 03:00 - 04:00</td>
                                        <td><i class="fa-solid fa-circle-check me-1"></i> Beschikbaar</td>
                                        <td><i class="fa-solid fa-calendar-check me-1"></i> Rooster in &raquo;</td>
                                    </tr>
                                    <tr class="text-danger">
                                        <td><i class="fa-solid fa-clock me-1"></i> 04:00 - 05:00</td>
                                        <td><i class="fa-solid fa-circle-xmark me-1"></i>Gereserveerd</td>
                                        <td><i class="fa-solid fa-user me-1"></i> raydevinlr</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
