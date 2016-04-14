<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductImage;
use Symfony\Component\Console\Input\Input;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }


    public function index()
    {

        $products = $this->product->actives()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function show($slug)
    {
        $product = $this->product->where('slug','LIKE',$slug)->actives()->first();
        $images = ProductImage::where('product_id','=',$product->id)->actives()->get();


        $product->stock>0 ? $availability = 'In Stock' : $availability = 'Out Of Stock';

        return view('products.show', compact('product','images','availability'));
    }

    public function create()
    {
        $category = Category::actives()->orderBy('name')->pluck('name', 'id');
        $product = $this->product->actives()->orderBy('name')->pluck('name', 'id');
        return view('products.create', compact('category','product'));
    }

    public function store(Request $request)
    {

        $input = $request->all();

        $validator = Validator::make(
            $input,
            Product::$rules['create']
        );

        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $product = New Product($input);
        $product->slug = (str_slug($request->name,'-'));
        $product->is_active = 1;
        if ($request->input('is_main_product') == true) {
            $product->main_product = 0;
        }
        $product->save();

        return Redirect::route('products.index')->with('message', 'Product created');
    }

    public function update()
    {

        return view('products.index', compact(''));
    }

    public function destroy()
    {

        return view('products.index', compact(''));
    }


    public function edit()
    {

        return view('products.index', compact(''));
    }


}
