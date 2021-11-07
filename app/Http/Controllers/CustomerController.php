<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function register()
    {
        return view('customer.register');
    }
    public function create(Request $request)
    {
        $data = $this->getCustomerData($request);
        Customer::create($data);
        return back()->with(['insertSuccess' => 'Customer Info Recorder']);
    }
    public function list()
    {
        $data = Customer::get();
        return view('customer.list')->with(['customer' => $data]);
    }
    public function seemore($id)
    {
        $data = Customer::where('customer_id', $id)->first();
        return view('customer.seemore')->with(['customer' => $data]);
    }
    public function delete($id)
    {
        Customer::where('customer_id', $id)->delete();
        return back()->with(['delete' => 'customer data deleted']);
    }
    public function edit($id)
    {
        $data=Customer::where('customer_id', $id)->first();
        return view('customer.edit')->with(['update' => $data]);
    }
    private function getCustomerData($request)
    {
        return [
            'name' => $request->name,
            // 'email' => $request->email,
            'address' => $request->address,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'phone' => $request->phone,
        ];
    }
}