@extends('eendenportaal.layouts.master')

@section('title')
    Nieuwsberichten
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
                                    <h2 class="h5 mb-0">Vacature toevoegen</h2>
                                </div>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('eendenportaal.administrator.jobs.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-4">
                                            <label for="title">Naam</label>
                                            <input type="text" class="form-control text-gray" id="title" name="title" value="{{ old('title') }}">
                                            @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="" selected disabled>Maak een keuze...</option>
                                            <option value="0">Concept</option>
                                            <option value="1">Gesloten</option>
                                            <option value="2">Geopend</option>
                                        </select>
                                        @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label for="description">Beschrijving</label>
                                        <textarea class="form-control editor" id="description" placeholder="Schrijf hier..." name="description">{{ old('description') }}</textarea>
                                        @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-primary btn-orange mt-2 animate-up-2" type="submit">
                                                Opslaan
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

@section('editor')
    @include('eendenportaal.partials.editor')
@endsection
