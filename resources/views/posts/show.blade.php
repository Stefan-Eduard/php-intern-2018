@extends('layouts.master')


@section('content')
  <div class="col-sm-8 blog-main">
    <h1> {{ $post->title }} </h1>

    {{ $post->body }}

    <hr/>

    <div class="comment">
      <ul class="list-group">
        @foreach ($post->comments as $comment)
          <li class="list-group-item">
            <strong>
              {{ $comment->created_at->diffForHumans() }}: &nbsp
              <!-- we can do the previous thing because the timespam is -->
              <!-- an instance of the carbon library -->
            </strong>
            
            {{ $comment->body }}
          </li>
        @endforeach
      </ul>

      {{-- Add a comment --}}

      <hr>

      <div class="card">
        <div class="card-block">
          <form method = "POST" action = "/posts/{{ $post->id }}/comments"> <!-- attention with the / forward slash to get to the root -->
            <!-- {{ method_field('PATCH') }} used for some browsers -->
            
            {{ csrf_field() }}

            <div class="form-group">
              <textarea name = "body" placeholder = "Your comment here" class = "form-control">
              </textarea>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary"> Add comment </button>
            </div>
          </form>

          @include ('layouts.errors')

        </div>
      </div>
    </div>
  </div>
@endsection