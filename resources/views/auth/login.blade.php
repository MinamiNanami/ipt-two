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

            <div class="login-remember">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>Remember me</span>
                </label>
            </div>

            <style>
                .login-remember {
                    display: flex;
                    width: 100%;
                }

                .login-remember label {
                    display: flex;
                    width: 100%;
                    background-color: coral;
                }

                .login-remember span {
                    margin-left: 8px;          /* ms-2: Adds 8px of left margin */
                    font-size: 14px;           /* text-sm: Small text size */
                    color: black;            /* text-white: White text color */
                }

                .login-remember input {
                    border-radius: 2px;         /* rounded: Slightly rounded corners */
                    border: 1px solid #D1D5DB;  /* border-gray-300: Light gray border */
                    color: #4F46E5;             /* text-indigo-600: Indigo text color */
                    box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.05); /* shadow-sm: Small shadow */
                    transition: box-shadow 0.2s, outline 0.2s;   /* Smooth focus effect */
                }
                
                .login-remember input:focus {
                    outline: none;              /* Removes default browser focus */
                    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.5); /* focus:ring-indigo-500: Indigo focus ring */
                }  
            </style>
            
            <button type="submit">Log In</button>
            
            <div class="forgot-password">
                <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
        </form>
    </div>
</x-guest-layout>
