@extends('layouts.app')

@section('title', 'Sign-up')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>

    <!-- Sign up -->
    <div class="login container">
        <div class="login-container">
            <h2>Welcome, Let's get started</h2>
            <p>Already have an account? <a href="login.html">Log In</a></p>
            <!-- Sign Up Form -->
            <form action="">
                <span>Full name<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>

    <!-- Sign up -->
    <div class="login container">
        <div class="login-container">
            <h2>Welcome, Let's get started</h2>
            <p>Already have an account? <a href="{{ route('login') }}">Log In</a></p>
            <!-- Sign Up Form -->
            <form action="">
                <span>Full name</span>
                <input type="text" name="" id="" placeholder="Your Name" required>
                <span>Email</span>
                <input type="email" name="" id="" placeholder="yourmail@gmail.com" required>
                <span>Phone</span>
                <input type="tel" name="" id="" placeholder="Enter your number" required>
                <span>Password</span>
                <input type="password" name="" id="" placeholder="At least 8 characters" required>
                <input type="submit" value="Sign Up" class="button">
                <p>Already have an account? <a href="{{ route('login') }}">Log In</a></p>
            </form>
            <a href="{{ route('login') }}" class="btn">Log In</a>
        </div>
    </div>

</body>

</html>
</span>
                <input type="text" name="" id="" placeholder="Your Name" required>
                <span>Email</span>
                <input type="email" name="" id="" placeholder="yourmail@gmail.com" required>
                <span>Phone</span>
                <input type="tel" name="" id="" placeholder="Enter your number" required>
                <span>Password</span>
                <input type="password" name="" id="" placeholder="At least 8 characters" required>
                <input type="submit" value="Sign Up" class="button">
                <p>Already have an account? <a href="login.html">Log In</a></p>
            </form>
            <a href="login.html" class="btn">Log In</a>
        </div>
    </div>

</body>

</html>
@endsection
