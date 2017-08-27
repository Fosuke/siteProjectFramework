@extends('layout')


@section('content')
     <!-- Main jumbotron for a primary marketing message or call to action 
    <div class="jumbotron bg-light-blue">
      <div class="container">
        <h1 class="display-3">Pool Supplies</h1>
        <p>Quaility pool supplies at randomly generated prices</p>
      </div>
    </div>
-->
    
      
      <div class="row">

        @foreach($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
          <div class="card h-100">
            <a href="/products/{{$product->id}}" >
              <img class="card-img-top" src="{{$product->productImages->first()->url}}" alt="{{$product->name}}">
            </a>
            <div class="card-body">
              <h4 class="card-title">{{$product->name}}</h4>
            </div>
            <div class="card-footer">
              <p><a class="btn btn-warning" href="/products/{{$product->id}}" role="button">View details &raquo;</a></p>
            </div>
          </div>
        </div>
        @endforeach
        </div>
      
@endsection