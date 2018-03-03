@extends('layouts.app')
@section('title')
Bookstore
@endsection
@section('brand_name')
Bookstore
@endsection
@section('content')

<div class="container">
  @foreach($products->chunk(3) as $productChunk)
<div class="row"> <!--First Row -->
  @foreach($productChunk as $product  )
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="{{$product->imagepath}}" alt="..."
        class="img-responsive">
        <div class="caption">
          <h3>{{$product->title}}</h3>
     <!--     <p>{{$product->description}}</p>---->
          <div class="clearfix">
            <div class="pull-left price">${{$product->price}}</div>
            <a href={{ route('product.addToCart', ['id'=>$product->id])}} class="btn btn-success pull-right" role="button">Add to Cart</a>
          </div>
        </div>
      </div>
    </div>
    
  @endforeach  
  
</div> <!--End of First Row -->
@endforeach
</div>
@endsection