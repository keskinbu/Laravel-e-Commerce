@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">All Categories</div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)

                                <tr class="clickable-row" onclick="document.location = '/categories/{{$category->slug}}';">
                                    <th scope="row">{{$category->name}}</th>
                                    <td>{{$category->parent_id}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td>{{$category->image}}</td>
                                    <td></td>
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