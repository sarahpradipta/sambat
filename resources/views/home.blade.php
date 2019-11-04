@extends('layouts.dashboard')
{{-- @section('title', 'Dashboard Sambat') --}}
@section('content')
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-3 well">
          <div class="well">
            <p><a href="#">My Profile</a></p>
            <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
          </div>
          <div class="well">
            <p><a href="#">Interests</a></p>
            <p>
              <span class="label label-default">News</span>
              <span class="label label-primary">W3Schools</span>
              <span class="label label-success">Labels</span>
              <span class="label label-info">Football</span>
              <span class="label label-warning">Gaming</span>
              <span class="label label-danger">Friends</span>
            </p>
          </div>
          <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <p><strong>Ey!</strong></p>
            People are looking at your profile. Find out who.
          </div>
          <p><a href="#">Link</a></p>
          <p><a href="#">Link</a></p>
          <p><a href="#">Link</a></p>
        </div>
        <div class="col-sm-7">

          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default text-left">
                <div class="panel-body">
                  <p contenteditable="true">Silahkan Sambat</p>
                  <button type="button" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-plus"></span> Sambat
                  </button>
                </div>
              </div>
            </div>
          </div>
          @foreach ($posts as $post)
            @include('partials.kotak', ['post' => $post])
          @endforeach
        </div>

        <div class="col-sm-2 well">
          <div class="thumbnail">
            <p>Upcoming Events:</p>
            <img src="paris.jpg" alt="Paris" width="400" height="300">
            <p><strong>Paris</strong></p>
            <p>Fri. 27 November 2015</p>
            <button class="btn btn-primary">Info</button>
          </div>
          <div class="well">
            <p>ADS</p>
          </div>
          <div class="well">
            <p>ADS</p>
          </div>
        </div>
      </div>
    </div>
@endsection
