<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerInfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function index()
    {
        $customers = $this->customer->actives()->paginate(10);
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create', compact(''));
    }

    public function store(Request $request)
    {

        $input = $request->all();

        $validator = Validator::make(
            $input,
            Customer::$rules['create']
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $product = New Customer($input);
        $product->password = Hash::make($request->input('password'));
        $product->is_active = 1;
        $product->save();

        return Redirect::route('customers.index')->with('message', 'Customer created');
    }

    public function show($id)
    {
        $customer = $this->customer->findOrFail($id);
        $customer_infos = CustomerInfo::where('customer_id','=',$customer->id)->actives()->paginate(10);
        return view('customers.show', compact('customer','customer_infos'));
    }


    public function info_create()
    {
        return view('customer_infos.create', compact(''));
    }

    public function info_store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make(
            $input,
            CustomerInfo::$rules['create']
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $product = New CustomerInfo($input);
        $product->is_active = 1;
        $product->save();

        return Redirect::route('customers.index')->with('message', 'Customer Info created');
    }








}
