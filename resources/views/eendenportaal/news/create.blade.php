@extends('eendenportaal.layouts.master')

@section('title')
    Nieuwsberichten
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
                                    <h2 class="h5 mb-0">Artikel toevoegen</h2>
                                </div>
                            </div>

                            <div class="card-body">
                                <form action="#" method="POST">

                                    @csrf

                                    <div class="row">
                                        <div class="mb-4">
                                            <label for="name">Titel</label>
                                            <input type="text" placeholder="HabboDucket is cool" class="form-control text-gray" id="name" name="name" value="{{ old('name') }}">
                                            @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="email">Subtitel</label>
                                        <input type="email" placeholder="Wij gaan je vertellen waarom" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label for="email">Categorie</label>
                                        <select name="cars" id="cars" class="form-control">
                                            <option value="" selected disabled>Selecteer een categorie &raquo; </option>
                                            <option value="volvo">Habbo</option>
                                            <option value="saab">HabboDucket</option>
                                            <option value="mercedes">Overig</option>
                                        </select>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label for="article editor">Bericht</label>
                                        <textarea class="form-control" id="article editor" placeholder="Schrijf hier..." name="article">{{ old('email') }}</textarea>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-primary btn-orange mt-2 animate-up-2" type="submit">
                                                Maak artikel aan
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

