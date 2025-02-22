@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/reportsStyle.css') }}">
@endsection

@section('content')
<div class="section-header-top">BLOTTER SUMMARY</div>

<div class="summary-boxes">
    <div class="summary-box">
        <img src="{{ asset('images/policeIcon.png') }}" alt="icon">
        <p>Active Case</p>
        <span id="total-active">1</span>
    </div>
    <div class="summary-box">
        <img src="{{ asset('images/pendingIcon.png') }}" alt="icon">
        <p>Pending Case</p>
        <span id="total-settled">0</span>
    </div>
    <div class="summary-box">
        <img src="{{ asset('images/settledIcon.png') }}" alt="icon">
        <p>Settled Case</p>
        <span id="total-pending">0</span>
    </div>

    <div class="summary-box">
        <img src="{{ asset('images/totalIcon.png') }}" alt="icon">
        <p>Total Cases</p>
        <span id="total-cases">0</span>
    </div>
</div>

<div class="section-header-bottom">BLOTTER HISTRORY</div>

<table>
    <thead>
        <tr>
            <th>Case No.</th>
            <th>Complainant</th>
            <th>Incident</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>001</td>
            <td id="name"> Juan Dela Cruz</td>
            <td id="incident"> Accident</td>
            <td id="date"> 01/03/0003 </td>
            <td id="status"><span class="status-label active-status">Active</span></td>
            <td><button class="view-btn">View</button></td>
        </tr>
        <tr>
            <td>002</td>
            <td id="name">Juan Dela Cruz</td>
            <td id="incident">Accident</td>
            <td id="date"> 01/02/0001 </td>
            <td id="status"><span class="status-label settled-status">Settled</span></td>
            <td><button class="view-btn">View</button></td>
        </tr>
        <tr>
            <td>003</td>
            <td id="name">Juan Dela Cruz</td>
            <td id="incident">Accident</td>
            <td id="date"> 01/01/0000 </td>
            <td id="status"><span class="status-label scheduled-status">Scheduled</span></td>
            <td><button class="view-btn">View</button></td>
        </tr>
    </tbody>
</table>

@endsection