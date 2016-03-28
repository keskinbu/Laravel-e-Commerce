@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Category: {{$category->name}}</div>

                    <div class="panel-body">
                        {{$category->name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
