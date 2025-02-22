<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Barangay Sta. Barbara Management System </title>
    <link rel="stylesheet" href="{{ asset('css/mainStyle.css') }}">
    @yield('css')
</head>

<body>
    <div class="main-content">
        <div class="header">
            <div class="title">
                <a href="/home"> BRGY STA BARBARA MANAGEMENT SYSTEM </a>
            </div>
            <div class="search">
                <input type="text" placeholder="Search..">
                <input type="submit" value="Search">
            </div>
        </div>
        <div class="content">
            <div class="sidebar">
                @include('partial.sidebar')
            </div>
            <div class="dynamic">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>