<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function properties()
    {
        // You can pass data to the view if needed
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
            // Add more properties as needed
        ];

        return view('properties', compact('properties'));
    }

    public function newsletter()
    {
        return view('newsletter');
    }
}
