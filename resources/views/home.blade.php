@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Link</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>

    <!-- Home -->
    <section class="home container" id="home">
        <div class="home-text">
            <h1>Find Your Next <br>Perfect Place To <br>Live.</h1>
            <a href="{{ route('sign-up') }}" class="btn">Sign Up</a>
        </div>
    </section>

    <!-- About -->
    <section class="about container" id="about">
        <div class="about-img">
            <img src="{{ asset('images/About.jpg') }}" alt="">
        </div>
        <div class="about-text">
            <span>About Us</span>
            <h2>We Provide The Best <br>Property For You !</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dignissimos minus totam impedit
                laboriosam similique!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dignissimos minus totam impedit
                laboriosam similique!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, incidunt.</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>

    <!-- Sales -->
    <section class="sales container" id="sales">
        <div class="box">
            <i class='bx bx-user'></i>
            <h3>Make Your Dream a Reality</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, optio.</p>
        </div>
        <div class="box">
            <i class='bx bx-desktop'></i>
            <h3>Start Your Membership</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, optio.</p>
        </div>
        <div class="box">
            <i class='bx bx-home-alt'></i>
            <h3>Enjoy Your New Home</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, optio.</p>
        </div>
    </section>

    <!-- Properties -->
    <section class="properties container" id="properties">
        <div class="header">
            <span>Recent</span>
            <h2>Our Featured Properties</h2>
            <p>Lorem ipsum dolor sit, amet consectetur <br> adipisicing elit. Voluptates, perferendis.</p>
        </div>
        <div class="properties-container container">
            <div class="box">
                <img src="{{ asset('images/P10.jpg') }}" alt="">
                <h3>Ksh.10M</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>Ngong, Karen</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/P4.jpg') }}" alt="">
                <h3>Ksh.3M</h3>
                <div class="content">
                    <div class="text">
                        <h3>La Villa</h3>
                        <p>Westlands, Nairobi</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>4</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/P9.jpg') }}" alt="">
                <h3>Ksh.14M</h3>
                <div class="content">
                    <div class="text">
                        <h3>Sunrise</h3>
                        <p>Muthaiga, Nairobi</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>4</span></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/P8.jpg') }}" alt="">
                <h3>Ksh.4M</h3>
                <div class="content">
                    <div class="text">
                        <h3>Kwangu</h3>
                        <p>Limuru, Kiambu</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/P11.jpg') }}" alt="">
                <h3>Ksh.20M</h3>
                <div class="content">
                    <div class="text">
                        <h3>La Maison</h3>
                        <p>Karen, Nairobi</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>6</span></i>
                        <i class='bx bx-bath'><span>5</span></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="{{ asset('images/P12.jpg') }}" alt="">
                <h3>Ksh.15M</h3>
                <div class="content">
                    <div class="text">
                        <h3>Eved Home</h3>
                        <p>Membley,Nairobi</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>5</span></i>
                        <i class='bx bx-bath'><span>3</span></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter container">
        <h2>Have a Question in mind? <br>Let us help you</h2>
        <form action="">
            <input type="email" name="" id="email-box" placeholder="yourmail@gmail.com" required>
            <input type="submit" value="Send" class="btn">
        </form>
    </section>

</body>
</html>
@endsection