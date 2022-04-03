@extends('layout.navbar')
@section('contact')
      <html>
<head>
  </head>
<body >
    <div class="container ">
        <h1 class="text-uppercase font-monospace"> My Profile</h1>
        <div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      {{-- <img src="{{URL::asset('/img/prof.jpg')}}" class="d-block  card-img-top" alt="..." height="320" width="100"> --}}
      <img src="{{asset('users/'. Auth::user()->img)}}"  class="d-block  card-img-top" width="100" height="375" alt="...">

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">

           <form class="container" action="{{url('users/'.$data['id'])}}" method="POST">
        @method("put")
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" value="{{old('name',$data['name'])}}" class="form-control" name="name">
          <label  class="text-danger">{{$errors->first('name')}}</label>
        </div>



        </h5>
        <p class="card-text">
<b>Email :</b> {{auth()->user()->email}}<br><br><br>
            </p>
            <b>Role :</b> {{auth()->user()->role}}<br><br><br><br>
      <button type="submit" class="btn btn-success">Update</button>
      </form>
      </div>

    </div>
  </div>
</div>



</div>
</body>

</html>
@endsection
