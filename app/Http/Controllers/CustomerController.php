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
       $data=$this->getCustomerData($request);
       Customer::create($data);
       return back()->with(['insertSuccess'=>'Customer Info Recorder']);
    }
    public function list(){
        $data=Customer::get();
        return view('customer.list')->with(['customer'=>$data]);
    }
    private function getCustomerData($request)
    {
        return [
            'name' => $request->name,
            // 'email' => $request->email,
            'address'=>$request->address,
            'gender' => $request->gender,
            'date_of_birth'=>$request->date_of_birth,
            'phone'=>$request->phone,
        ];
    }
}