@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Customer: {{$customer->name}}</div>

                    <a href="/customer-info/create" type="button" class="btn btn-success">Add New Customer Info</a>
                    <div class="panel-body">
                        {{$customer->name}}

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        @foreach($customer_infos as $customer_info)
                            {{$customer_info->title}}


                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
