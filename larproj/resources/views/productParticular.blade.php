@extends('includes.header')

@section('content')

<div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
    <div class="card-header">Product #{{$product->id}}</div>
    <div class="card-body">
      <h5 class="card-title"><b>{{$product->name}}<b></h5>
      <p class="card-text"><b>{{$product->description}}<b></p>
      <p class="card-text">{{$product->price}}</p>
    </div>
  </div>

@endsection