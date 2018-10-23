@extends('layouts.app')

@section('content')
  <div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <h3>Show Post </h3> <a class="btn btn-xs btn-primary" href="{{ route('posts.index') }}">Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Title : </strong>
        {{ $post->title }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Body : </strong>
        {{ $post->body }}
      </div>
    </div>
  </div>
  
@endsection