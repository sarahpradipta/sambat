@extends('layouts.dashboard')
{{-- @section('title', 'Dashboard Sambat') --}}
@section('content')
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-3 well">
          <div class="well">
            <p><a href="/profile">My Profile</a></p>
            <img src="{{asset('img/'.Auth::user()->picture)}}" class="img-circle" height="65" width="65">
          </div>
        </div>
        <div class="col-sm-7">

          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default text-left">
                <div class="panel-body">
                  <form action="{{url('post')}}" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Silahkan Sambat" name="post">
                    </div>
                    @csrf
                      <button type="submit" class="btn btn-default btn-sm">
                        Sambat
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @foreach ($posts as $post)
            @include('partials.kotak', ['post' => $post])
          @endforeach
        </div>
      </div>
    </div>
@endsection
