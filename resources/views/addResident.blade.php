@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/addResidentStyle.css') }}">
@endsection

@section('content')

<div class="container">
    <h2>Add Resident</h2>
    <form action="{{ route ('page.addResident') }}" method="POST">
        @csrf
        @method('post')

        <label for="resident_id">Resident ID</label>
        <input type="text" id="resident_id" name="resident_id" required>

        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>

        <label for="gender">Gender</label>
        <select id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="contact">Contact Number</label>
        <input type="text" id="contact" name="contact" required>

        <button type="submit">Add Resident</button>
    </form>
</div>

@endsection