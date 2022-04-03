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

 @foreach($data as $course)
<?php
// $count=0;
$cont=0;
?>
@foreach(Auth::user()->enrollments as $enroll)


        @if($enroll->course_id==$course->id)
      <?php  ++$cont ?>
        @endif
@endforeach
 @if($cont==0)

    <div class="container ">

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

        <a href="{{route('enroll',$course->id)}}" style="float:right;" class="btn btn-success rounded-pill">Enroll</a>

  </div>
    </div>
  </div>

</div>
</div>
 <br>
  <br>
  <br>
 @endif
@endforeach

</body>

</html>
@endsection

