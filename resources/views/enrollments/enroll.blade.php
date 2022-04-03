@extends('layout.navbar')
@section('contact')
<html>
<head>
<style>


  .card-header{
    background: rgb(187, 94, 7);
  }

    .card-body{
    background: rgb(236, 217, 181);
  }
  </style>
  </head>
<body>

@foreach(Auth::user()->enrollments as $enroll)
@foreach($courses as $course)
  @if($course->id==$enroll->course_id)

   <div class="container ">
<h2>My Enrollments</h2>
<div class="row">
  <div class=" rounded-pill">
    <div class="card">
          <div class="card-header" >
   <h4> {{$course->name}}</h4>

  </div>
       <div class="card-body">
    <h5 class="card-title">Description</h5>
    <p class="card-text">{{$course->description}}</p>
    <h5 class="card-title">Duration</h5>
    <p class="card-text">{{$course->duration}} </p>
    <a class="btn btn-danger rounded-pill" type="button"  style="float:right;" href="/courses/{{$course['id']}}">
           Take A View</a>
        <a href="{{route('unenroll',$enroll->id)}}" style="float:right;"  class="btn btn-success rounded-pill">Un-Enroll</a>

        {{-- <a href="{{route('enroll',$course->id)}}" style="float:right;" class="btn btn-success rounded-pill">Enroll</a> --}}

  </div>
    </div>
  </div>

</div>
</div>
@endif
@endforeach
@endforeach

{{-- <div class="row">

@foreach(Auth::user()->enrollments as $enroll)
@foreach($courses as $course)
  @if($course->id==$enroll->course_id)
  <div class="col-md-4">
      {{-- <img width="90%" height="300px" src="https://img.freepik.com/free-vector/laravel-development-flat-illustration-editable-vector-design_203633-1148.jpg?w=740" class="card-img-top" alt="..."> --}}
        {{-- <h5 class="card-title">{{$course->name}}</h5>
        <p class="card-text">{{$course->desc}}</p>
        <p>{{$course->duration}}<p>
        <a href="{{route('unenroll',$enroll->id)}}" class="btn btn-success ">Un-Enroll</a>

        </div>  @endif
@endforeach
@endforeach
</div> --}}
{{-- @dd($courses); --}}
</body>
</html>
@endsection
