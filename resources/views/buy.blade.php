@extends('layouts.app')
@section('title', 'Buy')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Property</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>

    <!-- Buy Form -->
    <div class="buy container">
        <div class="buy-container">
            <h2>Enter Your Payment Details</h2>
            <form id="buyForm" action="{{ route('purchase.confirmation') }}" method="POST">
                @csrf
                <span>Enter your name</span>
                <input type="text" name="name" placeholder="Your Name" required>
                <span>Enter your phone number</span>
                <input type="tel" name="phone" placeholder="Your Phone Number" required>
                <span>Enter your email address</span>
                <input type="email" name="email" placeholder="yourmail@gmail.com" required>
                <span>Property Price: <span id="propertyPrice">$0.00</span></span>
                <input type="hidden" name="price" id="priceInput">
                <input type="submit" value="Buy" class="button">
            </form>
        </div>  
    </div>
   
    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        // Function to get query parameters
        function getQueryParams() {
            const params = new URLSearchParams(window.location.search);
            return {
                name: params.get('name'),
                price: params.get('price')
            };
        }

        document.addEventListener('DOMContentLoaded', () => {
            const { price } = getQueryParams();
            document.getElementById('propertyPrice').innerText = `$${price}`;
            document.getElementById('priceInput').value = price;
        });

        document.getElementById('buyForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            const form = event.target;
            const formData = new FormData(form);

            axios.post(form.action, formData)
                .then(response => {
                    // Assuming the API response contains a status field
                    if (response.data.status === 'success') {
                        // Send confirmation email (you can implement this part)
                        alert('Payment was successful and confirmation email sent.');
                    } else {
                        alert('Payment failed. Please try again.');
                    }
                })
                .catch(error => {
                    alert('Payment failed. Please try again.');
                });
        });
    </script>
</body>
</html>
@endsection
