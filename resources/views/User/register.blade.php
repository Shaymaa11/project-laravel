@extends('layout.navbar')
@section('contact')
<html>
    <head>
        <style>
           /*custom font*/

/*basic reset*/
* {margin: 0; padding: 0;}



body {
     background:
		linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
	font-family: montserrat, arial, verdana;
}
/*form styles*/
#msform {
	width: 600px;
    height: 100vh;
	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(203, 223, 22, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;

	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	width: 100px;
	background: #209752;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #0d7be9;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: rgb(207, 8, 8);
	margin-bottom: 20px;
}

            </style>
    </head>
            <body>

<!-- multistep form -->
<form id="msform"action="{{route('handleregister')}}" method="post" enctype="multipart/form-data">
  @csrf
  <fieldset>

    <h2 class="fs-title">Register</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
     @csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name"  class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control " id="exampleInputPassword1">
  </div>
  <h6>Role<h6>
  <div class="form-check form-check-inline">
  <input type="radio" name="role" id="inlineRadio1" value="teacher">
  <label for="inlineRadio1">Teacher</label>
</div>
<div class="form-check form-check-inline">
  <input  type="radio" name="role" id="inlineRadio2" value="student">
  <label for="inlineRadio2">Student</label>
</div>
<div class="my-3">
  <label for="formFile" class="form-label">Select Your Image</label>
  <input name="img" class="form-control " type="file" id="formFile">
</div>

    <input type="submit" name="next" class="next action-button" value="Next" />


  </fieldset>

</form>
            </body>
</html>


{{-- <html>
<head>
<style>
  .bt{

      border-radius: 35px;


 /* background:url({{ URL::asset('img/bk2.jpg') }}) ; */
    background: rgb(201, 231, 216);

    background-size: 600px;

  padding: 20px;
  width: 600px;
  height: 500px;

  }
  .nt{
    background: rgb(99, 212, 156);
     padding: 20px;
  }

    body{
    background-position: auto;

  }
  input{
  }
  </style>
  </head>
<body>


    <div class="container bt">

<form class="my-4" action="{{route('handleregister')}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name"  class="form-control rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control rounded-pill" id="exampleInputPassword1">
  </div>
  <h6>Role<h6>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="teacher">
  <label class="form-check-label" for="inlineRadio1">Teacher</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="student">
  <label class="form-check-label" for="inlineRadio2">Student</label>
</div>
<div class="my-3">
  <label for="formFile" class="form-label">Select Your Image</label>
  <input name="img" class="form-control rounded-pill" type="file" id="formFile">
</div>
  <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
</form>
    </div>
</div>
</body>
</html> --}}
@endsection
