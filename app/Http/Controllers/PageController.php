<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('pages.index');
    }

    public function shop(){
        return view('pages.shop');
    }

    public function cart(){
        return view('pages.cart');
    }

    public function detail(){
        return view('pages.product_details');
    }

    public function checkout(){
        return view('pages.checkout');
    }
}
