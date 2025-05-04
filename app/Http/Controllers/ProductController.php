<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.products', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.product-details', compact('product'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            // Tambahkan validasi lain jika diperlukan
        ]);

        $product = Product::create($validatedData);

        return redirect()->route('products')->with('success', 'Product created successfully!');
    }
}
