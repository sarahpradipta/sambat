@extends('layouts.dashboard')
{{-- @section('title', 'Dashboard Sambat') --}}
@section('content')
    <div class="container text-center">
      <style>
      p {
        border-left: 6px solid red;
        background-color: lightgrey;
      }
      </style>
      <div class="row">
        <div class="col-sm-7">
          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default text-left">
                <div class="panel-body">
                  <h5>{{$post->post}}</h5>
                </div>
                @foreach($comments as $item)
                <img src="{{asset('img/'.$item->user->picture)}}" class="img-circle" height="55" width="55">
                <a class="" href="/profile/{{Auth::user()->id}}">{{$item->user->name}}</a>
                <p>{{$item->comment}}</p>
                @endforeach

              </div>
              <div class="form-group">
                <form action="{{route('comment.store',['id'=>$post->id])}}" method="post">
                  <input type="text" class="form-control" placeholder="Masukkan Komentar" name="comment">
                  <!-- <a href="{{ route('post.show', $post->id) }}" class="w3-button w3-green" >Comment</a> -->
                  <input type="submit" class="btn btn-primary" value="Comment">
                  @csrf
                </form>
          </div>
            </div>
        </div>
      </div>
    </div>
@endsection
