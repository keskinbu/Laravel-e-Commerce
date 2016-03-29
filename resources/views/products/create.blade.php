@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New Product</div>

                    <div class="panel-body">

                        {{ Form::open(array('url' => 'products', 'method' => 'post')) }}

                        <fieldset class="form-group">
                            {{ Form::label('name', 'Product Name') }}
                            {{ Form::text('name', old('name'), array('class' => 'form-control','placeholder'=>'Product Name')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('code', 'Product Code') }}
                            {{ Form::text('code', old('code'), array('class' => 'form-control','placeholder'=>'Product Code')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('meta_description', 'Meta Description') }}
                            {{ Form::text('meta_description', old('meta_description'), array('class' => 'form-control','placeholder'=>'Enter product meta description')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('meta_tag', 'Keywords') }}
                            {{ Form::text('meta_tag', old('meta_tag'), array('class' => 'form-control','placeholder'=>'Enter keywords')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::textarea('description', old('description'), array('class' => 'form-control','placeholder'=>'Enter description')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('Category', 'Category') }}
                            {{ Form::select('category', $category, null, ['class' => 'form-control']) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('Price', 'Price') }}
                            {{ Form::text('price', old('price'), array('class' => 'form-control','placeholder'=>'Enter price')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('Price1', 'Price1') }}
                            {{ Form::text('price1', old('price1'), array('class' => 'form-control','placeholder'=>'Enter price1')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('Price2', 'Price2') }}
                            {{ Form::text('price2', old('price2'), array('class' => 'form-control','placeholder'=>'Enter price2')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('Discount', 'Discount') }}
                            {{ Form::number('discount', old('discount'), array('class' => 'form-control','placeholder'=>'Enter discount')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('Stock', 'Stock') }}
                            {{ Form::number('stock', old('stock'), array('class' => 'form-control','placeholder'=>'Enter stock')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('Guatantee', 'Guatantee') }}
                            {{ Form::number('guarantee', old('guarantee'), array('class' => 'form-control','placeholder'=>'Enter guarantee')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            <input name="is_main_product" type="checkbox"> This product is a main product
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::label('Main Product', 'Main Product') }}
                            {{ Form::select('main_product', $product, array('class' => 'form-control')) }}
                        </fieldset>

                        <fieldset class="form-group">
                            {{ Form::submit('Create Product', array('class'=>'btn btn-primary')) }}
                        </fieldset>

                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
