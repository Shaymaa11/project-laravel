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
      <img src="{{asset('users/'. Auth::user()->img)}}"  class="d-block  card-img-top" width="100" height="320" alt="...">

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
            {{-- /courses/{{$item['id']}}/edit --}}
           <b>Name :  {{auth()->user()->name}} </b> <a href="/users/{{auth()->user()->id}}/edit">
            <i class="bi bi-pencil-fill"></i></a><br><br><br>
        </h5>
        <p class="card-text">
<b>Email :</b> {{auth()->user()->email}}<br><br><br>
            </p>
            <b>Role :</b> {{auth()->user()->role}}<br><br><br><br>

             <form action="/Users/{{auth()->user()->id}}" method="POST">
    @method("delete")
     @csrf
        <button type="submit" class="btn btn-danger d-inline-block">
           <i class="bi bi-trash"></i> Delete Account </button>
     </form>

      </div>

    </div>
  </div>
</div>
 


</div>
</body>

</html>

@endsection
