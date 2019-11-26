<div class="row">
  <div class="col-sm-3">
    <div class="well">
     <p></p>
     <img src="{{asset('img/'.$post->user->picture)}}" class="img-circle" height="55" width="55">
     <h5>{{ $post->user->name }}</h5>
    </div>
  </div>
  <div class="col-sm-9">
    <div class="well">
      <p>{{ $post->post }}</p>
        <a href="{{ route('post.show', $post->id) }}" class="glyphicon glyphicon-comment">Comments</a>
    </div>
  </div>
</div>
