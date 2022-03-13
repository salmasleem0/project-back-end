<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\men;
use App\Models\post2;
use App\Models\menpost;
use App\Models\Product;
use App\Models\sale;
use App\Models\women;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use PhpParser\Builder\Function_;

class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productList()
    {
        $products = Product::all();

        return view('admin.user.products', compact('products'));
}
    public function index()
    {
        //
    $womens=women::all();
    return view('admin.user.womenposts',compact('womens'));
    }
public function men(){
    $menposts=men::all();
    return view('admin.user.men',compact('menposts'));
}
public function sale(){
    $sales=sale::all();
    return view('admin.user.sale',compact('sales'));
}
public function search(Request $request){
 $products = Product::where('name','like', '%'.$request->input('query').'%')->get();
 return view('admin.user.search',compact('products'));

}

public function cart($id){
}
// -----------------------------------------cart----------------------
public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('admin.user.cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
              \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
            'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    } 

    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
