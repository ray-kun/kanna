<!DOCTYPE HTML>
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

    <script src="https://cdn.tiny.cloud/1/dgkw4p3fk6vkp3yrsdlh5fsu9i9a6uovg5huu0jaz7oys9zz/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea.editor', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'anchor autolink charmap codesample preview emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tableofcontents footnotes mergetags autocorrect',
            toolbar: 'preview undo redo | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            spellchecker_language: 'nl',
            language: 'nl'
        });
    </script>
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

</body>
</html>

