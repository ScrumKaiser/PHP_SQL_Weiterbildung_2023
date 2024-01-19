<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['ean' => 'required|integer']);

        $response = Http::get(
            'https://de.openfoodfacts.org/api/v0/product/' . $request->ean
        );

        $data = $response->json();

        if ($data['status'] === 1) {
            $product = new Product();
            foreach ($data['product'] as $key => $value)
                $product->$key = $value;

            return view('products.index', compact('product'));
        } else
            return redirect()->back()->withErrors(['ean' => 'EAN is invalid.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
