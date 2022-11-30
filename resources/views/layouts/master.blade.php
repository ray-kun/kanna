<!doctype html>
<html lang="nl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <title>Kanna :: @yield('title')</title>
</head>
<body>
@include('partials.navbar')

@yield('content')

@include('partials.footer')

<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>
