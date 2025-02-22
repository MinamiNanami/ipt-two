@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/officialtwoStyle.css') }}">
@endsection

@section('content')
<!-- Barangay Captain Section -->
<div class="captain-section">
    <div class="profile-picture">
        <img src="https://via.placeholder.com/100" alt="Profile">
        <p>BRGY. Captain</p>
    </div>
    <div class="captain-info">
        <div class="info-row">
            <label>First Name:</label>
            <input type="text" value="Wendell" readonly>
        </div>
        <div class="info-row">
            <label>Middle Name:</label>
            <input type="text" value="G." readonly>
        </div>
        <div class="info-row">
            <label>Last Name:</label>
            <input type="text" value="Centeno" readonly>
        </div>
        <div class="info-row">
            <label>Birth Date:</label>
            <input type="text" value="01/01/1970" readonly>
        </div>
        <div class="info-row">
            <label>Age:</label>
            <input type="text" value="55" readonly>
        </div>
        <div class="info-row">
            <label>Gender:</label>
            <input type="text" value="Male" readonly>
        </div>
        <div class="info-row">
            <label>Address:</label>
            <input type="text" value="123 Barangay St." readonly>
        </div>
        <div class="info-row">
            <label>Contact:</label>
            <input type="text" value="09123456789" readonly>
        </div>
    </div>
</div>

<!-- Konsehal List -->
<div class="konsehal-list">
    <h3>Barangay Konsehal</h3>
    <div class="konsehal-box">
        <div class="konsehal">1 - John Doe <span class="view-btn">View</span></div>
        <div class="konsehal">2 - Jane Smith <span class="view-btn">View</span></div>
        <div class="konsehal">3 - Alice Brown <span class="view-btn">View</span></div>
        <div class="konsehal">4 - Bob White <span class="view-btn">View</span></div>
        <div class="konsehal">5 - Charlie Green <span class="view-btn">View</span></div>
        <div class="konsehal">6 - Michael Lee <span class="view-btn">View</span></div>
        <div class="konsehal">7 - Sophia Cruz <span class="view-btn">View</span></div>
    </div>
</div>

<!-- Barangay Sections -->
<div class="brgy-sections">
    <div class="section" onclick="alert('Redirecting to BRGY. SK')">BRGY. SK</div>
    <div class="section" onclick="alert('Redirecting to BRGY. Rescue')">BRGY. Rescue</div>
    <div class="section" onclick="alert('Redirecting to BRGY. Center')">BRGY. Center</div>
    <div class="section" onclick="alert('Redirecting to Peace & Order Committee')">Committees on Peace & Order</div>
    <div class="section" onclick="alert('Redirecting to add another section')"> + </div>
</div>
@endsection