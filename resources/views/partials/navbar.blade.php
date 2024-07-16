<!-- Navbar -->
<header>
    <div class="nav container">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo"><i class='bx bx-home'></i>Home Link</a>
        <!-- Menu Icon-->
        <input type="checkbox" name="" id="Menu">
        <label for="Menu"><i class='bx bx-menu' id="Menu-icon"></i></label>
        <!-- Nav List-->
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#sales">Sales</a></li>
            <li><a href="#properties">Properties</a></li>
            <li><a href="{{ url('/purchase') }}">Purchase</a></li>
        </ul>
        <!-- log in button-->
        <a href="{{ url('/login') }}" class="btn">Log In</a>
    </div>
</header>
