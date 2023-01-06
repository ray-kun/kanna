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
                                    <h2 class="h5 mb-0">Artikel toevoegen</h2>
                                </div>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('eendenportaal.articles.user.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-4">
                                            <label for="name">Titel</label>
                                            <input type="text" placeholder="HabboDucket is cool"
                                                   class="form-control text-gray" id="title" name="title"
                                                   value="{{ old('title') }}">
                                            @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="email">Korte omschrijving</label>
                                        <input type="text" placeholder="Wij gaan je vertellen waarom"
                                               class="form-control" id="short_description" name="short_description"
                                               value="{{ old('short_description') }}">
                                        @error('short_description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label for="category">Categorie</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="" selected disabled>Selecteer een categorie &raquo;</option>
                                            <option value="1">Habbo</option>
                                            <option value="2">HabboDucket</option>
                                            <option value="3">Overig</option>
                                        </select>
                                        @error('category')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label for="body">Bericht</label>
                                        <textarea class="form-control editor" id="body" placeholder="Schrijf hier..."
                                                  name="body">{{ old('body') }}</textarea>
                                        @error('body')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-primary btn-orange mt-2 animate-up-2" type="submit">
                                                Aanmaken
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
