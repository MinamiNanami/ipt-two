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

<div> <!-- Added Success Catcher -->
    @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
    @endif
</div>

<table>
    <thead>
        <tr>
            <th>Case No.</th>
            <th>Complainant</th>
            <th>Incident</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blotters as $blotter)
        <tr>
            <td>{{ $blotter->case_number }}</td>
            <td>{{ $blotter->name }}</td>
            <td>{{ $blotter->incident }}</td>
            <td>{{ $blotter->date }}</td>
            <td>{{ $blotter->status }}</span></td>
            <td><button class="view-btn">View</button></td>
            <td>
            <form method="post" action="{{route('page.destroyBlotter', ['blotter' => $blotter])}}">
                @csrf 
                @method('delete')
                <input type="submit" value="Delete">
            </form>
            </td>
        </tr> 
        @endforeach
    </tbody>
</table>

<a href="{{route('page.addBlotter')}}">Add Blotter</a>

@endsection