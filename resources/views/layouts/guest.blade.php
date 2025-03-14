<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/guestStyle.css') }}">
    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="guestContainer">
        {{ $slot }}
    </div>
</body>

</html>