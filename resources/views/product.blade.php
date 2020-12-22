@extends('layouts.app')
@extends('partial.navbar')
@section('content')
<div class="container">
<div class="row">
@if(count($products) > 0)
     @foreach($products as $product)
      <div class="col-sm-3">
      <div class="card">
        <div class="card-body">
        <img src="img/product/{{$product->image}}" alt="{{$product->title}}" style="width:100%; height:165px;">
          <!-- <h5 class="card-title">{{__('message.Special_title_treatment')}}</h5> -->
          <h5 class="card-title">{{(Lang::locale() == 'en') ? $product->title : $product->title_ar}}</h5>
          <p class="card-text">{{(Lang::locale() == 'en') ? '$' : 'AED'}} {{$product->price}}</p>
          <a href="{{route('add.cart', [$product->id])}}" class="btn btn-primary">{{__('message.Add_To_Cart')}}</a>
        </div>
      </div>
    </div>
    @endforeach
 @endif
</div>
</div>
@endsection
