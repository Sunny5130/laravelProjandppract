@extends('includes.header')

@section('content')

@foreach($products as $p)
<div class="card" style="margin:20px">
    <div class="card-header">
    Product #{{$p->id}}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$p->name}}</h5>
      
      <a href="/products/{{$p->id}} " class="btn btn-success">Get Details</a>
      <a href="/products/{{$p->id}}/edit " class="btn btn-warning">Update</a>

      <form action="/products/{{$p->id}}" method="POST">
        @csrf
        {{-- {{method_field('DELETE')}} --}}
        @method('DELETE')
      <input type="submit" name="submit" value="Delete" class="btn btn-danger">

      </form>
    </div>
  </div>
@endforeach
@endsection