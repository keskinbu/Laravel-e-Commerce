@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">All Categories</div>
                    <div class="panel-body">
                        <a href="/categories/create" type="button" class="btn btn-success">Create New Category</a>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>slug</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)

                                <tr class="clickable-row" onclick="document.location = '/categories/{{$category->slug}}';">
                                    <th scope="row">{{$category->name}}</th>
                                    <td>{{$category->parent_id}}</td>
                                    <td>{{$category->image}}</td>
                                    <td>{{$category->slug}}</td>
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