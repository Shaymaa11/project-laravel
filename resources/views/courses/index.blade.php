@extends('layout.navbar')
@section('contact')

<html>
<head>
<style>
  .card-header{
    background: rgb(194, 121, 87);
  }

    .card-body{
    background: rgb(228, 203, 188);
  }
  </style>
  </head>
<body >

    <div class="container ">
    <div class="text-center">
<a class="btn btn-primary "href="courses/create"> Add New Courses</a>
    </div>

    <h1>My Courses</h1>
  @if(session('message'))
           <div class="alert alert-success" role="alert">
       {{session('message')}}
           </div>
   @endif

     @if(session('editmessage'))
           <div class="alert alert-warning" role="alert">
       {{session('editmessage')}}
           </div>
   @endif

      @if(session('deletemessage'))
           <div class="alert alert-danger" role="alert">
       {{session('deletemessage')}}
           </div>
   @endif




<div class="container-fluid ">
  @foreach ($data as $item)

<div class="card">
  <div class="card-header">

     {{$item["name"]}}
<div class=" d-grid gap-2 d-md-flex justify-content-md-end">

  <a class="btn btn-warning" style="height: 40px" type="button" href="/courses/{{$item['id']}}/edit">
           <i class="bi bi-pencil-fill "></i> Edit</a>

    <form action="/courses/{{$item['id']}}" method="POST">
    @method("delete")
     @csrf
        <button type="submit" class="btn btn-danger ">
           <i class="bi bi-trash"></i> Delete</button>
     </form>
  </div>
  </div>
  <div class="card-body">
    <h5 class="card-title">Description</h5>
    <p class="card-text">{{$item["description"]}}</p>

    <h5 class="card-title">Duration</h5>
    <p class="card-text">{{$item["duration"]}} </p>
  </div>
</div>

<br>
<br>
<br>
<br>
  @endforeach



</div>
</div>
</body>

</html>


@endsection
