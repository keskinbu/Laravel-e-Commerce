@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New Customer Info</div>

                    <div class="panel-body">

                        {{ Form::open(array('url' => 'customer-info/create', 'method' => 'post')) }}

                        <fieldset class="form-group">
                            {{ Form::label('customer_id', 'Customer ID') }}
                            {{ Form::text('customer_id', old('customer_id'), array('class' => 'form-control')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('title', 'Address Title') }}
                            {{ Form::text('title', old('title'), array('class' => 'form-control')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('first_name', 'Customer First Name') }}
                            {{ Form::text('first_name', old('first_name'), array('class' => 'form-control')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('last_name', 'Customer Last Name') }}
                            {{ Form::text('last_name', old('last_name'), array('class' => 'form-control')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('phone', 'Customer Phone') }}
                            {{ Form::text('phone', old('phone'), array('class' => 'form-control')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('id_no', 'Customer ID No') }}
                            {{ Form::text('id_no', old('id_no'), array('class' => 'form-control')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('email', 'Customer E-Mail') }}
                            {{ Form::text('email', old('email'), array('class' => 'form-control')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('city', 'City') }}
                            {{ Form::text('city', old('city'), array('class' => 'form-control')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('district', 'District') }}
                            {{ Form::text('district', old('district'), array('class' => 'form-control')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('type', 'Type') }}
                            {{ Form::text('type', old('type'), array('class' => 'form-control')) }}
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
