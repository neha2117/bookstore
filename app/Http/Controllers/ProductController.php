<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Cart;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); 
    	return view('front',[
    		'products' => $products]);
        return view('front');
    }


/*	public function __construct()
    {
        $this->middleware('auth');
    } */

    public function getIndex()
    {
    	$products = Product::all(); 
    	return view('front',[
    		'products' => $products]);
    }
    public function getAddToCart(Request $request , $id)
    {
        $product = Product::find($id);
        $oldCart = Session:: has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);


        $request->session()->put('cart',$cart);
        return redirect()->back();
    }


    public function getCart(){
        if(!Session::has('cart')){
            return view('shoppingcart');
        }
        $oldcart= Session::get('cart');

        $cart= new Cart ($oldcart);
        return view ('shoppingcart',['products'=>$cart->items , 'totalPrice'=>$cart->totalPrice]);
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('shoppingcart');
        }
        $oldcart= Session::get('cart');
        $cart = new Cart($oldcart);
        $total = $cart->totalPrice;
        return view('checkout', ['total'=>$total]);   
    }

    public function postCheckout(){
        //remaning
    }


}
