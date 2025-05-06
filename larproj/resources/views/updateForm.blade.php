@extends('includes.header')

@section('content')
<form style="margin: 40px" action="/products/{{$product->id}}" method="POST">
    @csrf
    {{method_field('PATCH')}}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$product->name}}">
    </div>

    <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" name="description" placeholder="Enter description" value="{{$product->description}}">
      </div>
    
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" name="price" placeholder="Enter Price" value="{{$product->price}}">
      </div>

      <div class="form-group">
        <input type="submit" class="form-control btn btn-warning" name="submit" value="update">
      </div>
</form>
@endsection