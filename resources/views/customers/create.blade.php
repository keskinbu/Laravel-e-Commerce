@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New Customer</div>

                    <div class="panel-body">

                        {{ Form::open(array('url' => 'customers', 'method' => 'post')) }}

                        <fieldset class="form-group">
                            {{ Form::label('name', 'Customer Name') }}
                            {{ Form::text('name', old('name'), array('class' => 'form-control','placeholder'=>'Customer Name')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('email', 'Customer E-mail') }}
                            {{ Form::text('email', old('email'), array('class' => 'form-control','placeholder'=>'Customer E-mail')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('password', 'Password') }}
                            {{ Form::password('password', array('class' => 'form-control')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::submit('Create Customer', array('class'=>'btn btn-primary')) }}
                        </fieldset>

                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
