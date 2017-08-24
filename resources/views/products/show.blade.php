@extends('layout')


@section('content')
<div class="row">
  <div class="col-lg">
    <div class="card bg-faded">
      <div class="card-header">
        <h1 class="card-title">{{$product->name}}</h1>
      </div>
      <div card="card-body">
        @include('products.partials.carousel')
      </div>
    </div>
  </div>
</div>
<div class="row marketing">
  <div class="col-lg-6">
  <p>{{$product->description}}</p>
  </div>
</div>
      
@endsection
