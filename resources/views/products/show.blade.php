@extends('layout')


@section('content')
<div class="row">
  <div class="col-md">
    <div class="card bg-light">
      <div class="card-header">
        <h1 class="card-title">{{$product->brand}} {{$product->name}} </h1>
      </div>
      <div class="card-body row">
        <div class="col-md">
          @include('products.partials.carousel')
        </div>
        <div class="col-md">
          <div class="card bg-light">
            <div class="card-header">
              <h2 class="card-title">Price: <span class="">${{mt_rand (100,999)}}.99</span></h3>
              <button type="button" class="btn btn-cart text-white">Add to Cart</button> 
            </div>
            <div class="card-body">
              {{$product->description}}
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg">
    <div class="card bg-light">
      <div class="card-header">
        <h3 class="card-title"> Browse other {{ucwords($product->type)}}</h3>
      </div>
      <div card="card-body">
      {{ucwords($product->type)}}s
      </div>
    </div>
  </div>
</div>


@endsection
