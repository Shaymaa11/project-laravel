@extends('layout.navbar')
@section('contact')

<html>
<head>
<style>
  .card-header{
    background: rgb(187, 94, 7);
  }
.bttn{

    margin-inline-start: 1000px;
}
    .card-body{
    background: rgb(236, 217, 181);
  }
  </style>
  </head>
<body >
    <div class="container ">
<div class="card">
  <h5 class="card-header">Courses Details
    <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-primary bttn rounded-pill">Back</a>

  </h5>
  <div class="card-body">
    <h5 class="card-title">Name: {{$data["name"]}}</h5>
    <p class="card-text"></p>

    <h5 class="card-title">Description:
{{$data["description"]}}
    </h5>
    <span class="card-text"></span>


    <h5 class="card-title">Duration: {{$data["duration"]}} </h5>

  </div>
</div>
<br>
<br>
<br>
<div class="card">
  <h5 class="card-header">Course Reviews</h5>
  <div class="card-body">
<h5> Add Feedback</h5>
   <form action="{{route('comments.store')}}"" method="POST">
@csrf
<textarea class="form-control rounded-pill" name="body">
</textarea>
<input type="text" name="course_id" hidden value="{{$data->id}}">
<br>

<input type="submit" class="btn btn-success rounded-pill" value="Add Feedback">
    </form>
  </div>
</div>
      @include('courses.displaycomment',['comments'=>$data->comments,"course_id"=>$data->id])



</div>
</body>

</html>

@endsection
