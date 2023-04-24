<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Products extends Controller
{
    // Function to Display the Add Product Page
    public function showProductAddPage()
    {
        // Get All Product Categories and Currencies
        $categories = \App\Models\ProductsCategories::all();
        $currencies = \App\Models\Currencies::all();
        return view("pages.product.add", compact("categories", "currencies"));
    }

    // Function to Display the Update Page
    public function showProductUpdatePage($id){
        // Get Product Details By I'd
        $product = \App\Models\Products::where("id", $id)->first();
        // Get All Product Categories and Currencies
        $categories = \App\Models\ProductsCategories::all();
        $currencies = \App\Models\Currencies::all();
        return view("pages.product.update", compact("product", "categories", "currencies"));
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
            $file->move(public_path() . '/uploads/product_image', $filename);
            $url = url('/uploads/product_image/'. $filename);
            $imageUrls[] = $url;
        }

        // Get Category ID if Exists or Create a New Category
        $category = \App\Models\ProductsCategories::where("name", $request->category)->first();
        if (!$category) {
            $category = new \App\Models\ProductsCategories();
            $category->name = $request->category;
            $category->save();
            // Get the Category ID
            $category = \App\Models\ProductsCategories::where("name", $request->category)->first();
            $category = $category->id;
        }

        // Get Currency ID if Exists or Create a New Currency
        $currency = \App\Models\Currencies::where("name", $request->currency)->first();
        if (!$currency) {
            $currency = new \App\Models\Currencies();
            $currency->name = strtoupper($request->currency);
            $currency->save();
            // Get the Currency ID
            $currency = \App\Models\Currencies::where("name", $request->currency)->first();
            $currency = $currency->id;
        }

        // Quantity must be greater than 0
        if ($request->quantity < 0) {
            $request->quantity = 1;
        }

        // Save the Product
        $product = new \App\Models\Products();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = json_encode($imageUrls);
        $product->category = $category;
        $product->currency = $currency;
        $product->quantity = $request->quantity ? $request->quantity : 1;
        $product->is_featured = (bool)$request->is_featured;
        $product->is_available = (bool)$request->is_available;
        $product->is_discounted = (bool)$request->is_discounted;
        $product->save();

        // Redirect to the Product List Page
        return redirect()->route("menu-catalogue");
    }
}
