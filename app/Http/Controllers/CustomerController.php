<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function register()
    {
        return view('customer.register');
    }
    public function create(Request $request)
    {
        dd($request->all());
    }
}
