     <br>
     <br>
      @foreach ($comments as $comment)
      <div class="display-comment" @if($comment ->parent_id != null) @endif>
    <div class="card">
  <h5 class="card-header">BY :
      {{$comment->user_name}}
  </h5>
  <div class="card-body">
<h5>{{$comment->body}}</h5>
  </div>
</div>
      </div>
<br>
<br>
<br>
      @endforeach

