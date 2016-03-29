@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">All Customers</div>
                    <div class="panel-body">
                        <a href="/customers/create" type="button" class="btn btn-success">Create New Customer</a>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr class="clickable-row" onclick="document.location = '/customers/{{$customer->id}}';">
                                    <th scope="row">{{$customer->name}}</th>
                                    <td>{{$customer->email}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection