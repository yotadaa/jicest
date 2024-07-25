<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('assets.poppins');
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center h-screen w-screen">
    <h1 class="text-3xl">
        Hello world!
    </h1>
</body>

</html>
