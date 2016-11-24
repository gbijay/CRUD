@extends('blog.layout')

@section('content')
<h1> simple blog</h1>
@if(Session::has('success'))
<div class="alert alert-success">
  {{Session::get('success')}}
</div>
@endif
     <form class="form-horizontal col-lg-4" action="{{ route('create')}}" method="POST">
      {{csrf_field()}}
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" id="title" placeholder="title">
    </div>
  </div>
  <div class="form-group">
    <label for="author" class="col-sm-2 control-label">Author</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="author" id="author" placeholder="author">
    </div>
</div>
<div class="form-group">
    <label for="post" class="col-sm-2 control-label">Post</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="post" id="post" placeholder="post" rows="4"></textarea>
    </div>
  </div>
   
  
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Post</button>
    </div>
  </div>
</form>


@endsection