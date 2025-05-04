<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import the Product model

class HomeController extends Controller
{
    public function index()
    {
        $latestProduct = Product::latest()->first(); // Fetch the latest product
        return view('index', compact('latestProduct'));
    }
}