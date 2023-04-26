<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    /* CustomerController API */
    public function getCustomers(Request $request)
    {
        $customers = CustomerController::all();
        return response()->json($customers);
    }

    public function getCustomer(Request $request, $id)
    {
        $customer = CustomerController::find($id);
        return response()->json($customer);
    }

    public function addCustomer(Request $request)
    {
        $customer = new CustomerController();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();
        return response()->json($customer);
    }

    public function updateCustomer(Request $request, $id)
    {
        $customer = CustomerController::find($id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();
        return response()->json($customer);
    }

    public function deleteCustomer(Request $request, $id)
    {
        $customer = CustomerController::find($id);
        $customer->delete();
        return response()->json($customer);
    }

    /* Product API */
    public function getProducts(Request $request)
    {
        $products = \App\Models\Products::all();
        return response()->json($products);
    }

    public function getProduct(Request $request, $id)
    {
        $product = \App\Models\Products::find($id);
        return response()->json($product);
    }


}
