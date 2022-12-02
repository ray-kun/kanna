<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ config('app.admin_name') }} - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/solid.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.paddle.com/paddle/assets/css/animate.css" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.paddle.com/paddle/assets/css/paddle.css" media="all">

    <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="bg-gray-200">
@include('eendenportaal.partials.header')

<div class="section section-lg pt-5 pt-md-7">
    @yield('content')

    @include('eendenportaal.partials.footer')
</div>

@include('eendenportaal.partials.changelogs')
<script src="https://demo.themesberg.com/pixel-pro/v5/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="https://demo.themesberg.com/pixel-pro/v5/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="{{ asset('admin/assets/js/script.js') }}"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/langs/nl.js"></script>
<script>
    new FroalaEditor('textarea.editor');

    $(function() {
        $('#editor').froalaEditor({
            // Set the language code.
            language: 'nl'
        })
    });
</script>
</body>
</html>

