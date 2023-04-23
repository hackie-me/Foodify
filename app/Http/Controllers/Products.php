<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class Products extends Controller
{
    // Function to Display the Add Product Page
    public function showProductAddPage()
    {
        return view("pages.product.add");
    }

    // Function to Add a Product
    public function addProduct(Request $request)
    {

        // Validate the Request
        $request->validate([
            "name" => "required|min:3",
            "description" => "required|min:10",
            "price" => "required|numeric",
            "image" => "required|array",
            "category" => "required",
            "currency" => "required",
            "quantity" => "required|numeric"
        ]);

        // store All Images as JSON URL in the Database
        $imageUrls = [];
        foreach ($request->file('image') as $file) {
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '-' . uniqid() . '.' . $extension;
            $path = $file->storeAs('public/products', $filename);
            $url = url($path);
            $imageUrls[] = $url;
        }

        return response()->json([
            'message' => 'Images stored successfully',
            'data' => $imageUrls
        ]);

        // Save the Product
        $product = new Products();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->category = $request->category;
        $product->currency = $request->currency;
        $product->quantity = $request->quantity;
        $product->is_featured = $request->is_featured;
        $product->is_available = $request->is_available;
        $product->is_discounted = $request->is_discounted;
        $product->save();

        // Redirect to the Product List Page
        return redirect()->route("menu-catalogue");
    }
}
