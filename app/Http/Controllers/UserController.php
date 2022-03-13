<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index(){
    //  $Products=Product::all();
     return view('admin.user.all');
    }
    public function showusers(){
      $users=User::all();
    return view('admin.user.users',compact('users'));
    }
  }
 

   
 