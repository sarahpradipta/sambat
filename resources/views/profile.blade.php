@extends('layouts.dashboard')
{{-- @section('title', 'Dashboard Sambat') --}}
@section('content')
<html>
<title>Profil</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
  <center>
<div class="w3-container">
  <div class="w3-card-4 w3-dark-grey" style="width:50%">
    <div class="w3-container w3-center">
      <img src="{{asset('img/'.Auth::user()->picture)}}" style="width:30%">
      <h5>{{ Auth::user()->name }}</h5>
      <h5>{{ Auth::user()->email }}</h5>
      <div class="w3-section">
        <a class="w3-button w3-green" href="/profile/{{Auth::user()->id}}/edit">Edit</a>
      </div>
    </div>
  </div>
</div>
</center>
</body>
</html>
@endsection
