<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;

class PagesController extends Controller
{
    public function index()
    {

        $products = Product::actives()->paginate(6);
        return view('frontend.pages.index', compact('products'));
    }




}
