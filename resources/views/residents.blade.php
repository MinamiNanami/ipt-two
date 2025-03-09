@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/residentsStyle.css') }}">
@endsection

@section('content')

<div class="section-header">LIST OF RESIDENTS </div>
<div class="summary-boxes">
    <div class="summary-box">
        <img src="icon.png" alt="all icon">
        <p> TOTAL POPULATION </p>
        <span>2</span>
    </div>
    <div class="summary-box">
        <img src="icon.png" alt="male icon">
        <p> MALE </p>
        <span>1</span>
    </div>
    <div class="summary-box">
        <img src="icon.png" alt="woman icon">
        <p> FEMALE </p>
        <span> 0 </span>
    </div>
</div>

<div class="section-header-bottom"> LIST OF RESIDENTS </div>
<input type="text" placeholder="Search Resident"> <img src="" alt="all icon"> <img src="" alt="woman icon"> <img src="" alt="man icon">
<table>
    <thead>
        <tr>
            <th> Resident ID </th>
            <th> Name </th>
            <th> Address </th>
            <th> Contact </th>
            <th> Gender </th>
            <th> Action </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> 001 </td>
            <td> Juan Dela Cruz </td>
            <td> Somewhere </td>
            <td> 01/03/0003 </td>
            <td><span class="status-label active-status"> Male </span></td>
            <td><button class="view-btn"> View </button></td>
        </tr>
        <tr>
            <td>002</td>
            <td> Asawa ni Juan Dela Cruz </td>
            <td> Somewhat</td>
            <td> 01/02/0001 </td>
            <td><span class="status-label settled-status"> Female </span></td>
            <td><button class="view-btn"> View </button></td>
        </tr>
    </tbody>
</table>

@endsection