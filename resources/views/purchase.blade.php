<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Properties - Home Link</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>

    <!-- Purchase Properties -->
    <section class="purchase container" id="purchase">
        <div class="header">
            <span>Find Your Perfect Home</span>
            <h2>Available Properties for Purchase</h2>
            <div class="sort">
                <label for="location">Sort by Location:</label>
                <select name="location" id="location">
                    <option value="Westlands">Westlands</option>
                    <option value="Karen">Karen</option>
                    <option value="Kiambu">Kiambu</option>
                    <option value="Thika">Thika</option>
                    <option value="Muthaiga">Muthaiga</option>
                    <option value="Kileleshwa">Kileleshwa</option>
                    <!-- Add options for specific locations -->
                </select>
                <label for="price">Sort by Price Range:</label>
                <select name="price" id="price">
                    <option value="1,000,000-5,000,000">1,000,000-5,000,000</option>
                    <option value="5,000,000-10,000,000">5,000,000-10,000,000</option>
                    <option value="10,000,000-15,000,000">10,000,000-15,000,000</option>
                    <option value="15,000,000-20,000,000">15,000,000-20,000,000</option>
                    <!-- Add options for price ranges -->
                </select>
            </div>
        </div>
        <div class="properties-container container">
            <!-- Property Boxes (you can use Blade directives for dynamic content) -->
            <!-- 1 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 2 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 3 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 4 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 5 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 6 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 7 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 8 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 9 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 10 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 11 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 12 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 13 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 14 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 15 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 16 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 17 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 18 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 19 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
            <!-- 20 -->
            <div class="box">
                <img src="{{ asset('images/' . $property['image']) }}" alt="">
                <h3>Ksh.{{ $property['price'] }}</h3>
                <div class="content">
                    <div class="text">
                        <h3>{{ $property['name'] }}</h3>
                        <p>{{ $property['location'] }}</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>{{ $property['bedrooms'] }}</span></i>
                        <i class='bx bx-bath'><span>{{ $property['bathrooms'] }}</span></i>
                    </div>
                    <a href="{{ route('property.purchase', ['name' => urlencode($property['name']), 'price' => urlencode($property['price'])]) }}" class="btn">Buy</a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
