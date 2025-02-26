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
            <th> </th>
        </tr>
        <tr>
            <td> Juan Dela Cruz </td>
            <td> Brgy. clearance </td>
            <td> 01/01/2000 </td>
            <td> <button class="view-btn"> VIEW </button></td>
        </tr>
        <tr>
            <td> Maria Clara </td>
            <td> Brgy. Indigency </td>
            <td> 01/01/2000 </td>
            <td> <button class="view-btn"> VIEW </button></td>
        </tr>
        <tr>
            <td> Juan Dela Cruz </td>
            <td> Brgy. clearance </td>
            <td> 01/01/2004 </td>
            <td> <button class="view-btn"> VIEW </button></td>
        </tr>
    </table>
</div>
@endsection