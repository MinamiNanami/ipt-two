<x-guest-layout>
    <div class="header">BRGY. STA BARBARA MANAGEMENT SYSTEM</div>

    <!-- logo -->
     
    <div class="main-container">
        <div class="form-image">
            <img src="{{ asset('images/brgy-sta-barbara-logo.jpg') }}" alt="Barangay Logo">
        </div>
        <h1>WELCOME</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember" class="ml-2">Remember me</label>
            </div>
            
            <button type="submit">Log In</button>
            
            <div class="guest-helper">
                <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
        </form>
    </div>
</x-guest-layout>