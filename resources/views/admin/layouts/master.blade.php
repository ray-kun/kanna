<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ config('app.admin_name') }} - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/solid.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.paddle.com/paddle/assets/css/animate.css" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.paddle.com/paddle/assets/css/paddle.css" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.paddle.com/paddle/assets/css/paddle.css" media="all">

    <script src="https://cdn.tiny.cloud/1/dgkw4p3fk6vkp3yrsdlh5fsu9i9a6uovg5huu0jaz7oys9zz/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    @yield('editor')
</head>
<body class="bg-gray-200">
@include('admin.partials.header')

<div class="section section-lg pt-5 pt-md-7">
    @yield('content')

    @include('admin.partials.footer')
</div>

@include('admin.partials.changelogs')
<script src="https://demo.themesberg.com/pixel-pro/v5/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="https://demo.themesberg.com/pixel-pro/v5/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="{{ asset('admin/assets/js/script.js') }}"></script>

</body>
</html>

