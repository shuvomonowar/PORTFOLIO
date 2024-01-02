<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#111827]">
    <div class="sticky top-0">
        @include('./compulsory/header')
    </div>
    <div>
        @include('about')
    </div>
    <div>
        @include('education')
    </div>
    <div>
        @include('skills')
    </div>
    <div>
        @include('projects')
    </div>
    <div>
        @include('contact')
    </div>
    <div>
        @include('./compulsory/footer')
    </div>
</body>
</html>
