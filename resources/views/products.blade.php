@extends('layout')
   
@section('content')
    
<div class="row">
    @foreach($products as $product)
        <div  class="col-xs-18 col-sm-6 col-md-3" >
            <div class="thumbnail">
                {{-- <p>{{ $product->photo}}</p> --}}
                {{-- <img src="{{asset('upload/1680108663_iphone.jpg')}}"> --}}
                <div class="caption"> <img  src="{{ asset('upload/'.$product->photo) }}" width= '100' height='150'>
                </div>
                <div  class="caption">
                    <h4>{{ $product->sanpham }}</h4>
                    <p><strong>Price: </strong> {{ $product->price }}$</p>
                    <p style="width: 70%" class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection