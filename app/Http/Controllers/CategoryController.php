<?php

namespace App\Http\Controllers;

use App\Category;
use Symfony\Component\Console\Input\Input;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }


    public function index()
    {
        $categories = $this->category->actives()->paginate(10);
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create', compact(''));
    }

    public function store(Request $request)
    {

        $input = $request->all();

        $validator = Validator::make(
            $input,
            Category::$rules['create']
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $product = New Category($input);
        $product->slug = (str_slug($request->name, '-'));
        $product->save();

        return Redirect::route('categories.index')->with('message', 'Category created');
    }

    public function show($slug)
    {
        $category = $this->category->where('slug','=',$slug)->actives()->first();

        return view('categories.show', compact('category'));
    }

}
