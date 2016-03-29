@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Product: {{$product->name}}</div>

                    <div class="panel-body">
                        {{$product->name}}

                        <br>
                        <br>
                        <br>
                        <div class="secure">Upload Image</div>
                        {!! Form::open(array('url'=>'upload/product-image','method'=>'POST', 'files'=>true)) !!}
                        <div class="control-group">
                            <div class="controls">
                                {!! Form::file('image') !!}
                                {{ Form::hidden('product_id', $product->id, array('class' => 'form-control')) }}
                                <p class="errors">{!!$errors->first('image')!!}</p>
                                @if(Session::has('error'))
                                    <p class="errors">{!! Session::get('error') !!}</p>
                                @endif
                            </div>
                        </div>
                        <div id="success"></div>
                        {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
                        {!! Form::close() !!}

                        @foreach($images as $image)
                            <img src="/uploads/{{$image->path}}" alt="{{$image->filename}}" width="300">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
