@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/homeStyle.css') }}">
@endsection

@section('content')
<div class="section-header">RESIDENTS RECORD SUMMARY</div>
<div class="record-section">
    <div class="record-card">
        <img src="{{ asset('images/blackDocument.png') }}" alt="icon">
        <p>Request Certification</p>
        <span id="total-request">1</span>
    </div>
    <div class="record-card">
        <img src="{{ asset('images/totalIcon.png') }}" alt="icon">
        <p>Total Population</p>
        <span id="total-population">1</span>
    </div>
    <div class="record-card">
        <img src="{{ asset('images/blackMan.png') }}" alt="icon">
        <p>Total Male</p>
        <span id="total-male">1</span>
    </div>
    <div class="record-card">
        <img src="{{ asset('images/blackWoman.png') }}" alt="icon">
        <p>Total Female</p>
        <span id="total-female">2</span>
    </div>
</div>

<!-- Blotter Record Section -->
<div class="section-header">BLOTTER RECORD SUMMARY</div>
<div class="record-section">
    <div class="record-card">
        <img src="{{ asset('images/totalIcon.png') }}" alt="icon">
        <p>Total Case</p>
        <span id="total-cases">1</span>
    </div>
    <div class="record-card">
        <img src="{{ asset('images/policeIcon.png') }}" alt="icon">
        <p>Active Case</p>
        <span id="total-active">0</span>
    </div>
    <div class="record-card">
        <img src="{{ asset('images/pendingIcon.png') }}" alt="icon">
        <p>Pending Case</p>
        <span id="total-settled">0</span>
    </div>
    <div class="record-card">
        <img src="{{ asset('images/settledIcon.png') }}" alt="icon">
        <p>Settled Cases</p>
        <span id="total-pending">1</span>
    </div>
</div>

@endsection