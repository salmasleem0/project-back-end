<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class modiratorcontroller extends Controller
{
    public function index(){
         $products=Product::all();
         return view('admin.modirator',compact('products'));
        }
}
