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
        Edit Courses
    </h1>

    <div class="container-fluid">
 <form class="container" action="/courses/{{$data['id']}}" method="POST">
        @method("put")
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" value="{{old('name',$data['name'])}}" class="form-control" name="name">
          <label  class="text-danger">{{$errors->first('name')}}</label>

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <input type="text" value="{{old('description',$data['description'])}}"  class="form-control" name="description" style="height: 100px">
          <label  class="text-danger">{{$errors->first('description')}}</label>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Duration</label>
          <input type="text" value="{{old('duration',$data['duration'])}}"  class="form-control" name="duration" >
          <label  class="text-danger">{{$errors->first('duration')}}</label>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
</div>
</body>
</html>





@endsection
