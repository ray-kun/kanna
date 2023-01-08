@extends('eendenportaal.layouts.master')

@section('title')
    Event plaatsen
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
                                    <h2 class="h5 mb-0">Event plaatsen</h2>
                                </div>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('eendenportaal.events.user.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-4">
                                            <label for="title">Titel</label>
                                            <input type="text" placeholder="Bijvoorbeeld: Eenden Bankspel" class="form-control text-gray" id="title" name="title" value="{{ old('title') }}">
                                            @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="name">Prijs</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="creditsSwitch">
                                            <label class="form-check-label" for="creditsSwitch">Credits</label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="furniSwitch">
                                            <label class="form-check-label" for="furniSwitch">Meubel</label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="coinsSwitch">
                                            <label class="form-check-label" for="coinsSwitch">Munten</label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="badgeSwitch">
                                            <label class="form-check-label" for="badgeSwitch">Badge</label>
                                        </div>
                                    </div>


                                    <div class="mb-4" id="credits" style="display: none;">
                                        <label for="body">Aantal credits <small>(max 100)</small></label>
                                        <input type="number" id="quantity_credits" name="quantity_credits" min="1" max="100" class="form-control">
                                    </div>

                                    <div class="mb-4" id="furni" style="display: none;">
                                        <label for="body">Naam van meubel</label>
                                        <input type="text" id="furni" name="furni" class="form-control">
                                    </div>

                                    <div class="mb-4" id="coins" style="display: none;">
                                        <label for="body">Aantal munten <small>(max 20)</small></label>
                                        <input type="number" id="quantity_coins" name="quantity_coins" min="1" max="20" class="form-control">
                                    </div>

                                    <div class="mb-4" id="badge" style="display: none;">
                                        <label for="body">Badge</label>
                                        <input type="text" id="badge" name="badge" min="1" max="20" class="form-control">
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label for="body">Datum van event</label>
                                            <input type="date" id="start" class="form-control" name="date" value="{{ get_date_by_format('Y-m-d') }}" min="{{ get_date_by_format('Y') }}-01-01" max="{{ get_date_by_format('Y') }}-12-31">
                                            @error('date')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputState" class="form-label">Tijd van</label>
                                            <select id="inputState" class="form-select" name="time_from">
                                                <option selected disabled>Kies een tijd...</option>
                                                <option value="00:00">00:00</option>
                                                <option value="01:00">01:00</option>
                                                <option value="02:00">02:00</option>
                                                <option value="03:00">03:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="09:00">09:00</option>
                                                <option value="10:00">10:00</option>
                                                <option value="11:00">11:00</option>
                                                <option value="12:00">12:00</option>
                                                <option value="13:00">13:00</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:00">15:00</option>
                                                <option value="16:00">16:00</option>
                                                <option value="17:00">17:00</option>
                                                <option value="18:00">18:00</option>
                                                <option value="19:00">19:00</option>
                                                <option value="20:00">20:00</option>
                                                <option value="21:00">21:00</option>
                                                <option value="22:00">22:00</option>
                                                <option value="23:00">23:00</option>
                                            </select>

                                            @error('time_from')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputState" class="form-label">Tijd tot</label>
                                            <select id="inputState" class="form-select" name="time_till">
                                                <option selected disabled>Kies een tijd...</option>
                                                <option value="00:00">00:00</option>
                                                <option value="01:00">01:00</option>
                                                <option value="02:00">02:00</option>
                                                <option value="03:00">03:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="09:00">09:00</option>
                                                <option value="10:00">10:00</option>
                                                <option value="11:00">11:00</option>
                                                <option value="12:00">12:00</option>
                                                <option value="13:00">13:00</option>
                                                <option value="14:00">14:00</option>
                                                <option value="15:00">14:00</option>
                                                <option value="16:00">16:00</option>
                                                <option value="17:00">17:00</option>
                                                <option value="18:00">18:00</option>
                                                <option value="19:00">19:00</option>
                                                <option value="20:00">20:00</option>
                                                <option value="21:00">21:00</option>
                                                <option value="22:00">22:00</option>
                                                <option value="23:00">23:00</option>
                                            </select>

                                            @error('time_till')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div id="emailHelp" class="form-text">Wil je bekijken of je datum beschikbaar is? Klik hier voor de rooster.</div>
                                    </div>


                                    <div class="mb-4">
                                        <label for="body">Beschrijving</label>
                                        <textarea class="form-control editor" id="description" placeholder="Beschrijf je evenement, wat ga je precies doen!" name="description">{{ old('body') }}</textarea>
                                        <div class="form-text">Het hoeft niet te uitgebreid, we willen alleen maar weten wat je gaat doen.</div>
                                        @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-primary btn-orange mt-2 animate-up-2" type="submit">
                                                Plaatsen
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
