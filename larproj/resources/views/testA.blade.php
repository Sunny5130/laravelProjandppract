@extends('test')

@section('mainD')
  <div>
    <p>First replacement!</p>
    <hr>
  </div>
@endsection

@section('testC')
  <div>
    <p>Second replacement!</p>s
    <hr>
  </div>
@endsection

@section('testD')
  @parent
  <div>
    <p>Additional content</p>
    <hr>
  </div>
@endsection