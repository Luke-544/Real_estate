<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        // Mocking properties data for example
        $properties = [
            [
                'image' => 'P10.jpg',
                'price' => '10M',
                'name' => 'The Palace',
                'location' => 'Ngong, Karen',
                'bedrooms' => 5,
                'bathrooms' => 2,
            ],
            [
                'image' => 'P4.jpg',
                'price' => '3M',
                'name' => 'La Villa',
                'location' => 'Westlands, Nairobi',
                'bedrooms' => 4,
                'bathrooms' => 2,
            ],
            [
                'image' => 'P9.jpg',
                'price' => '14M',
                'name' => 'Sunrise Homes',
                'location' => 'Muthaiga, Nairobi',
                'bedrooms' => 5,
                'bathrooms' => 4,
            ],
            [
                'image' => 'P8.jpg',
                'price' => '4M',
                'name' => 'Kwangu Homes',
                'location' => 'Limuru, Kiambu',
                'bedrooms' => 5,
                'bathrooms' => 2,
            ],
            [
                'image' => 'P11.jpg',
                'price' => '20M',
                'name' => 'La Maison',
                'location' => 'Karen, Nairobi',
                'bedrooms' => 6,
                'bathrooms' => 5,
            ],
            [
                'image' => 'P12.jpg',
                'price' => '15M',
                'name' => 'Eved Homes',
                'location' => 'Membley, Nairobi',
                'bedrooms' => 5,
                'bathrooms' => 3,
            ],
            [
                'image' => 'P16.jpg',
                'price' => '20M',
                'name' => 'Pazuri Homes',
                'location' => 'Karen, Nairobi',
                'bedrooms' => 5,
                'bathrooms' => 4,
            ],
            [
                'image' => 'P17.jpg',
                'price' => '15M',
                'name' => 'Teripa Homes',
                'location' => 'Kiambu, Kiambu',
                'bedrooms' => 5,
                'bathrooms' => 2,
            ],
            [
                'image' => 'P18.jpg',
                'price' => '10M',
                'name' => 'Classic Homes',
                'location' => 'Kileleshwa, Nairobi',
                'bedrooms' => 4,
                'bathrooms' => 3,
            ],
            [
                'image' => 'P19.jpg',
                'price' => '15M',
                'name' => 'Genevieve Homes',
                'location' => 'Ngong, Karen',
                'bedrooms' => 4,
                'bathrooms' => 2,
            ],
            [
                'image' => 'P20.jpg',
                'price' => '17M',
                'name' => 'Hewett Homes',
                'location' => 'Muthaiga, Nairobi',
                'bedrooms' => 5,
                'bathrooms' => 2,
            ],
            [
                'image' => 'P21.jpg',
                'price' => '5M',
                'name' => 'Qwetu Homes',
                'location' => 'Kiambu, Kiambu',
                'bedrooms' => 3,
                'bathrooms' => 2,
            ],
            [
                'image' => 'P22.jpg',
                'price' => '1M',
                'name' => 'Faulu Homes',
                'location' => 'Ngong, Karen',
                'bedrooms' => 2,
                'bathrooms' => 2,
            ],
            [
                'image' => 'P23.jpg',
                'price' => '10M',
                'name' => 'Amani Homes',
                'location' => 'Westlands, Nairobi',
                'bedrooms' => 5,
                'bathrooms' => 2,
            ],
            [
                'image' => 'P24.jpg',
                'price' => '13M',
                'name' => 'Packard Homes',
                'location' => 'Kileleshwa, Nairobi',
                'bedrooms' => 5,
                'bathrooms' => 3,
            ],
            [
                'image' => 'P25.jpg',
                'price' => '12M',
                'name' => 'Jipange Homes',
                'location' => 'Muthaiga, Nairobi',
                'bedrooms' => 4,
                'bathrooms' => 2,
            ],
            [
                'image' => 'P26.jpg',
                'price' => '17M',
                'name' => 'Mapema Homes',
                'location' => 'Karen, Nairobi',
                'bedrooms' => 5,
                'bathrooms' => 3,
            ],
            [
                'image' => 'P27.jpg',
                'price' => '4M',
                'name' => 'Poa Homes',
                'location' => 'Muthaiga, Nairobi',
                'bedrooms' => 3,
                'bathrooms' => 2,
            ],
            [
                'image' => 'P28.jpg',
                'price' => '8M',
                'name' => 'Haven Homes',
                'location' => 'Westlands, Nairobi',
                'bedrooms' => 3,
                'bathrooms' => 2,
            ],
            [
                'image' => 'P29.jpg',
                'price' => '20M',
                'name' => 'Fincorp Homes',
                'location' => 'Kiambu, Kiambu',
                'bedrooms' => 5,
                'bathrooms' => 4,
            ],
            // Add more properties as needed
        ];

        return view('purchase.index', compact('properties'));
    }
}
