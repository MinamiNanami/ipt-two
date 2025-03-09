@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/officialsStyle.css') }}">
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
<div class="konsehal-wrapper">
    <div class="konsehal-title">Barangay Konsehal</div>
    <div class="konsehal-container">
        <div class="konsehal-list"><span>1 - Celso Mananghaya JR</span> <button>View</button></div>
        <div class="konsehal-list"><span>2 - Larry Alcantara</span> <button>View</button></div>
        <div class="konsehal-list"><span>3 - Harold Dimaapi</span> <button>View</button></div>
        <div class="konsehal-list"><span>4 - Borgie Collantes</span> <button>View</button></div>
        <div class="konsehal-list"><span>5 - Romy Felizardo</span> <button>View</button></div>
        <div class="konsehal-list"><span>6 - Abet Laya</span> <button>View</button></div>
        <div class="konsehal-list"><span>7 - Ado Cruz</span> <button>View</button></div>
    </div>
</div>



<!-- Barangay Sections -->
<div class="brgy-sections">
    <div class="section" onclick="alert('Redirecting to BRGY. SK')">BRGY. SK</div>
    <div class="section" onclick="alert('Redirecting to BRGY. Rescue')">BRGY. Rescue</div>
    <div class="section" onclick="alert('Redirecting to BRGY. Center')">BRGY. Center</div>
    <div class="section" onclick="alert('Redirecting to Peace & Order Committee')">Committees on Peace &
        Order</div>
</div>


@endsection