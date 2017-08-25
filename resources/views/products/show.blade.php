@extends('layout')


@section('content')
<div class="row">
  <div class="col-md">
    <div class="card bg-light">
      <div class="card-header">
        <h1 class="card-title">{{$product->brand}} {{$product->name}} </h1>
      </div>
      <div card="card-body">
        @include('products.partials.carousel')
        <p>{{$product->description}}</p>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card bg-light">
      <div class="card-header">
        <span class="card-title">${{mt_rand (100,999)}}.99</span>
      </div>
      <div card="card-body">
        <button type="button" class="btn btn-primary">Add to Cart</button> 
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
