<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $data = $this->getSumData($request);
        $result = $this->calculateProcess($data);
    }
    private function getSumData($request)
    {
        return [
            'num1' => $request->num1,
            'num2' => $request->num2,
            'operator' => $request->operator,
        ];
    }
    private function calculateProcess($data)
    {
        $result = '';
        switch ($data['operator'])
        {
            case 'empty': $result = "Choose Operators...";
                break;
            case 'add': $result=$data['num1'] + $data['num2'];
                break;
            case 'minus':$result=$data['num1'] - $data['num2'];
                break;
            case 'multi': $result=$data['num1'] * $data['num2'];
                break;
            case 'division': $result=$data['num1'] / $data['num2'];
                break;
        }
    }
}