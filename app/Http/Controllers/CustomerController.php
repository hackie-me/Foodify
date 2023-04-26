<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Function to show Customers List
    public function index()
    {
        return view('pages.customers.list');
    }

    // Function to show Customers ReviewController Page
    public function showCustomerReview($id)
    {
        return view('pages.customers.review');
    }

    /*
     * Customer Api
     * ------------------
     * 1. getAllCustomers
     * 2. getCustomerById
     * 3. Store
     * 4. Update
     * 5. Destroy
     */

    // Function to Return All Customers
    public function getAllCustomers(){
        try{
            // Return All users with role_id = 3
            $customers = User::where('role_id', 3)->get();
            return response()->json($customers);
        }catch(\ErrorException $e){
            return response()->json($e->getMessage(), 422);
        }
    }

    // Function to return Customer by id
    public function getCustomerById($customerId){
        // Return user with role_id = 3 and id = $customerId
        $customer = User::where('role_id', 3)->where('id', $customerId)->get();
        return response()->json($customer);

    }

    // Function to Insert New Customer
    public function store(Request $request){
        $request->validate([

        ]);
    }

    // Function to update Customer
    public function update($customerId){

    }

    // Function to Delete Customer
    public function destroy($customerId){

    }

}
