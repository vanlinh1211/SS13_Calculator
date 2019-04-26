<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function show(){
        return view('calculator');
    }

    public function calculate(Request $request){
        $description = $request->description;
        $price = $request->price;
        $discount = $request->discount;
        $discountAmount = $price * $discount * 0.01;
        return view('discount', compact('discountAmount'));
    }
}
