<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <title>Kanna</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Over ons</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Ons team</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Registreren</a></li>
            </ul>
        </div>
    </div>
</nav>
{{--<header>--}}
{{--    <div class="container">--}}
{{--        <div class="row" style="margin-left: 10px;">--}}
{{--            <div id="statusLive" class="airr"></div>--}}
{{--            <div class="col-md-7">--}}
{{--                <div class="radio">--}}

{{--                    <audio id="player" id="radio" autoplay style="width: 350px;" volume="20">--}}

{{--                        <source src="https://listen.habbocast.nl/radio/8000/radio.mp3?cache=1665149507" type="audio/mpeg">--}}

{{--                        Your browser does not support the audio element.--}}

{{--                    </audio>--}}

{{--                    <div id="statusArt" class="circle">--}}
{{--                        <div id="statusDj" class="dj" style="background: transparent url('habbo-avatar-hier') no-repeat scroll 0px 0px; height: 182px; border-radius: 0% 0% 60% 60%; width: 129px;">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="play" onclick="document.getElementById('player').play();$('.wave').removeClass('no-animation');">--}}
{{--                    </div>--}}
{{--                    <div class="pauze" onclick="document.getElementById('player').pause();waveAfterWave();"></div>--}}
{{--                    <div class="min" onclick="document.getElementById('player').volume -= 0.1"></div>--}}
{{--                    <div class="plus" onclick="document.getElementById('player').volume += 0.1"></div>--}}

{{--                    <div class="nummer"></div>--}}
{{--                    <div class="luisteraar"></div>--}}
{{--                    <div class="livedj">--}}
{{--                        <p class="card-text placeholder-glow"><span class="placeholder col-7"></span></p>--}}
{{--                    </div>--}}
{{--                    <div class="datum">Vrijdag 7 Oktober 2022</div>--}}
{{--                    <div class="livenummer">--}}
{{--                        <p class="card-text placeholder-glow"><span class="placeholder col-7"></span></p>--}}
{{--                    </div>--}}
{{--                    <div class="luister">--}}
{{--                        <p class="card-text placeholder-glow"><span class="placeholder col-7"></span></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4"><img src="assets/images/hc1.png" style="margin-top: 20px;"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}



<div class="container" style="margin-top: 50px;">

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Titel nieuwsbericht</h5>
                    <p>Beschrijving</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Titel nieuwsbericht</h5>
                    <p>Beschrijving</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Titel nieuwsbericht</h5>
                    <p>Beschrijving</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Titel nieuwsbericht</h5>
                    <p>Beschrijving</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-7 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Welkom op HD v2</h5>
                    <p>HD is in ontwikkeling</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-5 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Inloggen op Kanna</h5>
                    <p>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><img src="assets/images/icons/follow_oldclient.gif"></span>
                        <input type="text" class="form-control" placeholder="Gebruikersnaam" id="signin_Username" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <p>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><img src="assets/images/icons/new_13.gif"></span>
                        <input type="password" class="form-control" id="signin_Password" placeholder="Wachtwoord" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <button type="button" class="btn btn-success" onclick="$HabboCast.user.signIn();" style="margin-top: 15px;width: 140px;">Inloggen</button>
                    <button type="button" class="btn btn-secondary" onclick="$HabboCast.user.register();" style="margin-top: 15px;width: 120px;">Registeren</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center">&copy; 2021 - 2022 Kanna. All rechten voorbehouden, Gemaakt met <icon style="color:pink;">♥</icon> door Ryuk
                    </h5>
                    <p style="text-align: center">Wij zijn niet verbonden aan, aanbevolen of gesponsord door of specifiek goedgekeurd door Sulake Corporation Oy of aan haar Gelieerde Ondernemingen. HD kan gebruikmaken van de handelsmerken en andere intellectuele eigendom van Habbo, zoals toegestaan volgens het Habbo Fansitebeleid.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
<script>
    var $settings = {
        habbo_mission: "HabboCast-2xghj",
        habbo_mission_lostpass: "HabboCast-sahii"
    }
</script>
<script src="assets/js/habbocast.js?v=1665149507"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>
