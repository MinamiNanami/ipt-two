@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/addBlotterStyle.css') }}">
@endsection

@section('content')

<div class="container">
    <h2>Add Blotter Record</h2>

    <form method="POST" action="{{ route ('page.addBlotter') }}">
        @csrf 
        @method('post')
        <label for="case_number">Case Number:</label>
        <input type="text" id="case_number" name="case_number" required>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="incident">Incident:</label>
        <textarea id="incident" name="incident" rows="4" required></textarea>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="Open">Open</option>
            <option value="Pending">Pending</option>
            <option value="Closed">Closed</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</div>
@endsection