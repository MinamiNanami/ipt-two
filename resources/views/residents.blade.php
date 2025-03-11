@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/residentsStyle.css') }}">
@endsection

@section('content')

<div class="section-header">LIST OF RESIDENTS </div>
<div class="summary-boxes">
    <div class="summary-box">
        <img src="{{ asset('images/allicon.png') }}" alt="all icon">
        <p> TOTAL POPULATION </p>
        <span>2</span>
    </div>
    <div class="summary-box">
        <img src="{{ asset('images/allmaleicon.png') }}" alt="male icon">
        <p> MALE </p>
        <span>1</span>
    </div>
    <div class="summary-box">
        <img src="{{ asset('images/allwomanicon.png') }}" alt="woman icon">
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
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($residents as $resident)
        <tr>
            <td> {{ $resident->resident_id }} </td>
            <td> {{ $resident->name }} </td>
            <td> {{ $resident->address }} </td>
            <td> {{ $resident->contact }} </td>
            <td> {{ $resident->gender }} </span></td>
            <td><button class="view-btn"> View </button></td>
            <td><form method="post" action="{{route('page.destroyResident', ['resident' => $resident])}}">
                @csrf 
                @method('delete')
                <input type="submit" value="Delete"></td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{route('page.addResident')}}">Add Resident</a>

@endsection
