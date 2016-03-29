@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New Category</div>

                    <div class="panel-body">

                        {{ Form::open(array('url' => 'categories', 'method' => 'post')) }}

                        <fieldset class="form-group">
                            {{ Form::label('name', 'Category Name') }}
                            {{ Form::text('name', old('name'), array('class' => 'form-control','placeholder'=>'Category Name')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('parent_id', 'Category') }}
                            {{ Form::select('parent_id', $category, '111', array('class' => 'form-control')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('image', 'Image') }}
                            {{ Form::text('image', old('image'), array('class' => 'form-control','placeholder'=>'Enter image path')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::submit('Create Category', array('class'=>'btn btn-primary')) }}
                        </fieldset>

                        {{ Form::close() }}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
