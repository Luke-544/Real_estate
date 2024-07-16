@extends('layouts.app')

@section('title', 'Log-in')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="nav container">
            <a href="{{ url('/') }}" class="logo"><i class='bx bx-home'></i>Home Link</a>
            <a href="{{ url('/sign-up') }}" class="btn">Sign Up</a>
        </div>
    </header>

    <!-- Log in -->
    <div class="login container">
        <div class="login-container">
            <h2>Login To Continue</h2>
            <p>Log in with the data you entered during registration</p>
            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <span>Enter your email address</span>
                <input type="email" name="email" id="email" placeholder="yourmail@gmail.com" required>
                <span>Enter your password</span>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <input type="submit" value="Log In" class="button">
                <a href="#">Forgot Password?</a>
            </form>
            <a href="{{ url('/sign-up') }}" class="btn">Sign up now</a>
        </div>
    </div>

    <!-- Footer -->
    <section class="footer">
        <div class="footer-container container">
            <h2>Home Link</h2>
            <div class="footer-box">
                <h3>Quick Links</h3>
                <a href="#">Agency</a>
                <a href="#">Building</a>
                <a href="#">Rates</a>
            </div>
            <div class="footer-box">
                <h3>Locations</h3>
                <a href="#">Westlands</a>
                <a href="#">West-end Towers</a>
                <a href="#">Nairobi</a>
            </div>
            <div class="footer-box">
                <h3>Contact</h3>
                <a href="#">+254 112482493</a>
                <a href="#">samuelmwaura422@gmail.com</a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; Maverick  All Right Reserved</p>
    </div>

</body>
</html>
@endsection
