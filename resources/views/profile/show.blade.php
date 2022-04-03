@extends('layout.navbar')
@section('contact')
<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}
    <html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
  .card-header{
    background: rgb(187, 94, 7);
  }

    .card-body{
    background: rgb(236, 217, 181);
  }
  </style>
  </head>
<body >
    <div class="container ">
        <div class="card">
  <h5 class="card-header">My Profile
       @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    @livewire('profile.delete-user-form')
@endif
  </h5>
  <div class="card-body">
      <img src="{{URL::asset('/img/nav1.jpg')}}" class="d-block w-20" alt="...">

@livewire('profile.update-profile-information-form')
  </div>
</div>
         {{-- <div class="container-fluid"> --}}
             {{-- <div class="card mb-3">
        <div class=" card mb-3 bg-success">
             <div class="card mb-3">
       <h1>My Profile </h1>
      <img src="{{URL::asset('/img/nav1.jpg')}}" class="d-block w-20" alt="...">
                         @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form') --}}
                {{-- <x-jet-section-border /> --}}
            {{-- @endif --}}

             {{-- @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    @livewire('profile.delete-user-form') --}}

                {{-- <x-jet-section-border /> --}}
            {{-- @endif --}}
             {{-- </div>
             <div class="card mb-3">

             </div>
        </div>
             </div> --}}

{{--
  <h5 class="card-header">Courses Details
    <a href="/availablecourse" class="btn btn-primary justify-content-md-end">Back</a>

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
<input type="submit" class="btn btn-success" value="Add Feedback">
    </form>
  </div>
</div>
      @include('courses.displaycomment',['comments'=>$data->comments,"course_id"=>$data->id]) --}}


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</div>
</body>

</html>



            {{-- @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords())) --}}
                {{-- <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div> --}}

                {{-- <x-jet-section-border /> --}}
            {{-- @endif --}}

            {{-- @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication()) --}}
                {{-- <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div> --}}

                {{-- <x-jet-section-border /> --}}
            {{-- @endif --}}

            {{-- <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div> --}}

{{--
        {{-- </div> --}}

 </x-app-layout>
@endsection

