<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;

class Customer extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    { 
        // echo "<pre>";
        // print_r($request->all()); 

        $customer = new Customers;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer/view');
        
    }

    public function view(){

        $customers = Customers::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
         
    } 

    
}
