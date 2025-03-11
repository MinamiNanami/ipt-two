@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/settingsStyle.css') }}">
@endsection

@section('content')
<div>
    <form id="setting">
        <div class="title-h2"> <h2>ADMINISTRATOR</h2> </div>
        <h2>NEW BARANGAY NAME</h2>
        <div class="input-section"> <br>
            <label for="name">Change name</label> <br>
            <nl><input type="name" id="Name" required autofocus></nl>
            <button type="button" onclick="Save()"><b>Save</b></button>


            <h2>REGISTER ACCOUNT</h2> <br>
            <label for="name">New Admin Name</label> <br>
            <input type="name" id="Name" required autofocus> <br>
            <label for="Adnum">Admin ID No.</label> <br>
            <input type="name" id="Admin" required autofocus> <br>
            <label for="email">Email</label> <br>
            <input type="email" id="email" required autofocus> <br>
            <label for="password">New Password</label> <br>
            <input type="password" id="Password" required autofocus> <br>
            <label for="confirmpass">Confirm Password</label> <br>
            <input type="confirmpass" id="Confirmpass" required>
            <button type="button" onclick="Confirm()"><b>Confirm</b></button>
        </div>
    </form>
</div>
@endsection