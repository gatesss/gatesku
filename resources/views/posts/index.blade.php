@extends('layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      <h3>Data Berguna</h3> 
    </div>
  </div>
  </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <a class="btn btn-xs btn-success" href="{{ route('posts.create') }}">Create New Post</a>
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
<div class="panel-body">
  <table class="table">
    <tr>
      <th>No.</th>
      <th>Title</th>
      <th>Body</th>
      <th>Actions</th>
    </tr>
    </div>

    @foreach ($posts as $post)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>
        <td>
          <a class="btn btn-xs btn-info" href="{{ route('posts.show', $post->id) }}">Show</a>
          <a class="btn btn-xs btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>

          {!! Form::open(['method' => 'DELETE', 'route'=>['posts.destroy', $post->id], 'style'=> 'display:inline']) !!}
          {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
  {!! $posts->links() !!}
@endsection