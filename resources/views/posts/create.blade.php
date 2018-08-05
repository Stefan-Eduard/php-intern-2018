@extends('layouts.master')


@section('content')
  
  <div class="col-sm-8">

    <h1> Publish a post </h1>
    <form method = "POST" action = "/posts">

      {{ csrf_field() }}
      
      <div class="form-group">
        <label for="Title"> Title: </label>
        <input type="text" class="form-control" id="exampleInputEmail1" name = "title"> 
        <!-- name = ... is used for submitting -->
      </div>

      <div class="form-group">
        <label for="Body">Body</label>
        <textarea id = "body" name="body" class = "form-control"> </textarea>
      </div>
      
      <button type="submit" class="btn btn-primary">Publish</button>

    </form>

  </div>

@endsection