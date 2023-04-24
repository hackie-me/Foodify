<?php

namespace App\Http\Controllers;

use App\Models\Currencies;
use App\Models\ProductsCategories;
use Illuminate\Http\Request;

class Products extends Controller
{
    // Function to Display the Add Product Page
    public function showProductAddPage()
    {
        // Get All Product Categories and Currencies
        $categories = ProductsCategories::all();
        $currencies = Currencies::all();
        return view("pages.product.add", compact("categories", "currencies"));
    }

    // Function to Display the Update Page
    public function showProductUpdatePage(Request $request)
    {
        $validate = $request->validate([
            "id" => "required|numeric",
        ]);
        // Get Product Details By I'd
        $product = \App\Models\Products::where("id", $request->id)->first();
        // Get All Product Categories and Currencies
        $categories = ProductsCategories::all();
        $currencies = Currencies::all();
        $id = $request->id;
        return view("pages.product.update", compact("product", "categories", "currencies", "id"));
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

        // Set the Featured, Available and Discounted Status
        $is_featured = false;
        $is_available = false;
        $is_discounted = false;
        if ($request->featured == "on") {
            $is_featured = true;
        }
        if ($request->status == "on") {
            $is_available = true;
        }
        if ($request->discount == "on") {
            $is_discounted = true;
        }

        // store All Images as JSON URL in the Database
        $imageUrls = [];
        foreach ($request->file('image') as $file) {
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '-' . uniqid() . '.' . $extension;
            $file->move(public_path() . '/uploads/product_image', $filename);
            $url = url('/uploads/product_image/' . $filename);
            $imageUrls[] = $url;
        }

        // Get Category ID if Exists or Create a New Category
        $category = ProductsCategories::where("name", $request->category)->first();
        if (!$category) {
            $category = new ProductsCategories();
            $category->name = $request->category;
            $category->save();
            // Get the Category ID
            $category = ProductsCategories::where("name", $request->category)->first();
        }
        $category = $category->id;

        // Get Currency ID if Exists or Create a New Currency
        $currency = Currencies::where("name", $request->currency)->first();
        if (!$currency) {
            $currency = new Currencies();
            $currency->name = strtoupper($request->currency);
            $currency->save();
            // Get the Currency ID
            $currency = Currencies::where("name", $request->currency)->first();
        }
        $currency = $currency->id;

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
        $product->is_featured = $is_featured;
        $product->is_available = $is_available;
        $product->is_discounted = $is_discounted;
        $product->save();

        // Redirect to the Product List Page
        return redirect()->route("menu-catalogue");
    }

    // Function to Update a Product
    public function updateProduct(Request $request)
    {
        // Validate the Request
        $request->validate([
            "id" => "required|numeric",
            "name" => "required|min:3",
            "description" => "required|min:10",
            "price" => "required|numeric",
            "old_image" => "required",
            "category" => "required",
            "currency" => "required",
            "quantity" => "required|numeric"
        ]);

        // Set the Featured, Available and Discounted Status
        $is_featured = false;
        $is_available = false;
        $is_discounted = false;
        if ($request->featured == "on") {
            $is_featured = true;
        }
        if ($request->status == "on") {
            $is_available = true;
        }
        if ($request->discount == "on") {
            $is_discounted = true;
        }

        // if user did not upload new images, use the old ones
        if ($request->file('image') == null) {
            $imageUrls = json_decode($request->old_image);
        } else {
            // store All Images as JSON URL in the Database
            $imageUrls = [];
            foreach ($request->file('image') as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '-' . uniqid() . '.' . $extension;
                $file->move(public_path() . '/uploads/product_image', $filename);
                $url = url('/uploads/product_image/' . $filename);
                $imageUrls[] = $url;
            }
            // Delete the Old Images
            $oldImages = json_decode($request->old_image);
            foreach ($oldImages as $oldImage) {
                $oldImage = str_replace(url('/'), public_path(), $oldImage);
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
            }
        }

        // Get Category ID if Exists or Create a New Category
        $category = ProductsCategories::where("name", $request->category)->first();
        if (!$category) {
            $category = new ProductsCategories();
            $category->name = $request->category;
            $category->save();
            // Get the Category ID
            $category = ProductsCategories::where("name", $request->category)->first();
        }
        $category = $category->id;

        // Get Currency ID if Exists or Create a New Currency
        $currency = Currencies::where("name", $request->currency)->first();
        if (!$currency) {
            $currency = new Currencies();
            $currency->name = strtoupper($request->currency);
            $currency->save();
            // Get the Currency ID
            $currency = Currencies::where("name", $request->currency)->first();
        }
        $currency = $currency->id;

        // Quantity
        if ($request->quantity < 0) {
            $request->quantity = 1;
        }

        // Update the Product
        $product = \App\Models\Products::where("id", $request->id)->first();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = json_encode($imageUrls);
        $product->category = $category;
        $product->currency = $currency;
        $product->quantity = $request->quantity ? $request->quantity : 1;
        $product->is_featured = $is_featured;
        $product->is_available = $is_available;
        $product->is_discounted = $is_discounted;
        $product->save();

        // Redirect to the Product List Page
        return redirect()->back();
    }

    // Function to Delete a Product
    public function deleteProduct(Request $request)
    {
        // Validate the Request
        $request->validate([
            "id" => "required|numeric"
        ]);

        // Delete the Product
        $product = \App\Models\Products::where("id", $request->id)->first();

        // Delete the Images
        $images = json_decode($product->image);
        foreach ($images as $image) {
            $image = str_replace(url('/'), public_path(), $image);
            if (file_exists($image)) {
                unlink($image);
            }
        }

        $product->delete();

        // Redirect to the Product List Page
        return redirect()->back();
    }
}
