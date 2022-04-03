@extends('layout.navbar')
@section("contact")
<html>
<head>
<style>
  .bt{

      border-radius: 35px;


 background:url({{ URL::asset('img/bk2.jpg') }}) ;
    background-size: 600px;

  padding: 20px;
  width: 600px;
  height: 500px;

  }

    body{
    background: rgb(239, 241, 240);
    background-position: auto;

  }
  input{
  }
  </style>
  </head>
<body>
    <div class="container bt">

    <h1 class="text-center text-success">
        Create Course
    </h1>

    <div class="container-fluid">
    <form class="container " action="/courses" method="post">
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input type="text" value="{{old('name')}}" class="form-control" name="name">
          <label  class="text-danger ">{{$errors->first('name')}}</label>

        </div>
         <div class="mb-3">
           <label for="exampleInputPassword1" class="form-label">Description</label>
            <input class="form-control" value="{{old('description')}}" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">
          <label  class="text-danger ">{{$errors->first('description')}}</label>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Duration</label>
          <input type="text" value="{{old('duration')}}" class="form-control" name="duration" >
          <label  class="text-danger ">{{$errors->first('duration')}}</label>
        </div>


        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
{{-- @endif --}}
</div>
</body>
</html>

@endsection
