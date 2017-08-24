<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
  <ol class="carousel-indicators">
    @for ($i = 0; $i < $product->productImages->count(); $i++)
    <li data-target="#carousel" data-slide-to="{{$i}}" @if ($i == 0) class="active"@endif>
      <img class="d-block img-fluid" src="{{$product->productImages[$i]->url}}" alt="{{$i}}">
    </li>
    @endfor
  </ol>
  <div class="carousel-inner" role="listbox">
    @foreach($product->productImages as $image)
    @if ($loop->first)
    <div class="carousel-item active">
    @else
    <div class="carousel-item">
    @endif
      <img class="d-block img-fluid" src="{{$image->url}}" alt="{{$image->url}}">
    </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

