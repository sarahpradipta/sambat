<div class="row">
  <div class="col-sm-3">
    <div class="well">
     <p></p>
     <img src="{{asset('img/'.Auth::user()->picture)}}" class="img-circle" height="55" width="55">
     <h5>{{ $post->user->name }}</h5>
    </div>
  </div>
  <div class="col-sm-9">
    <div class="well">
      <p>{{ $post->post }}</p>
      <!-- <input type="text" class="form-control" name="comment" placeholder=""> -->
        <button type="submit" class="glyphicon glyphicon-comment">Comments</button>
    </div>
  </div>
</div>
