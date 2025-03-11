@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/documentsStyle.css') }}">
@endsection

@section('content')
<div class="section-header"> DOCUMENTS </div>
<!-- Divs for documents -->
<div class="cards-container">
    <div class="card">
        <div class="card create-form" onclick="createNewForm()">+</div>
        <p> BLANK DOCUMENT </p>
    </div>
    <div class="card" onclick="openForm('clearance')">
        <img src="{{ asset('images/blackDocument.png') }}" alt="Brgy. Clearance">
        <p>BGRY. CLEARANCE</p>
    </div>
    <div class="card" onclick="openForm('indigency')">
        <img src="{{ asset('images/blackDocument.png') }}" alt="Brgy. Indigency">
        <p>BGRY. INDIGENCY</p>
    </div>
</div>
<div class="section-header"> ISSUED FORMS | DOCUMENTS </div>

<!-- Table for issued forms -->
<div class="table-container">
    <div class="search-container">
        <input type="text" placeholder="Search">
    </div>
    <table>
        <tr>
            <th> Name </th>
            <th> Form </th>
            <th> Date </th>
            <th> Action </th>
            <th>  </th>
        </tr>
        @foreach ($documents as $document)
        <tr>
            <td> {{ $document->name }} </td>
            <td> {{ $document->form }}</td>
            <td> {{ $document->date }}</td>
            <td> <button class="view-btn"> VIEW </button></td>
            <td>
            <form method="post" action="{{route('page.destroyDocument', ['document' => $document])}}">
                @csrf 
                @method('delete')
                <input type="submit" value="Delete">
            </form></td>
        </tr>
        @endforeach
    </table>
    <a href="{{route('page.addDocument')}}">Add Document History</a>
</div>
@endsection