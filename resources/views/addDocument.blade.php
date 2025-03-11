@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/addDocumentStyle
.css') }}">
@endsection

@section('content')

<div class="container">
    <h2>Add Document History</h2>

    <form method="POST" action="{{ route('page.storeDocument') }}"> 
        @csrf 

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="form">Form:</label>
        <input type="text" id="form" name="form" required>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <button type="submit">Submit</button>
    </form>
</div>
@endsection