@extends('layouts.homeLayout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/.css') }}">
@endsection

@section('content')
    @if(Auth::check() && Auth::user()->role === 'user')
        <h1>Welcome to the User Dashboard</h1>
        <a href="{{ route('user.home') }}">User Home</a>
    @else
        {{-- Block access for admins --}}
        @php abort(403, 'Unauthorized Access'); @endphp
    @endif
@endsection
