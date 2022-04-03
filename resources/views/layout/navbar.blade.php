<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar  navbar-dark  bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
  <i class="bi bi-telephone text-danger">+20 111 111 2344</i>
  </a>
    <i class="bi bi-envelope-fill text-danger">shaymaagaafar11@gmail.com</i>
       <li class="nav-item">
          <a class="bi bi-facebook text-danger" aria-current="page" ></a>
          <a class="bi bi-whatsapp text-danger" aria-current="page" ></a>
          <a class="bi bi-github text-danger" aria-current="page" ></a>

          <a class="bi bi-youtube  text-danger" aria-current="page" ></a>
        </li>

  </div>
</nav>


<nav class="navbar navbar-expand-lg   navbar-light bg-light">
  <div class="container-fluid">

      <img src="{{URL::asset('/img/logo.png')}}" class="" alt="..." height="100" width="100">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ms-auto">

                          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active font-weight-bold" aria-current="page" href="/">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link font-weight-bold" aria-current="page" href="/about">About US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="/contact">Contact Us</a>
        </li>
         @can("isTeacher")
         <li class="nav-item">
          <a class="nav-link font-weight-bold" href="/courses">Courses</a>
        </li>
         @elsecan("isStudent")
          <li class="nav-item">
          <a class="nav-link font-weight-bold" href="/availablecourse">Courses</a>
        </li>
          @endcan

      </ul>

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @can("isTeacher")
                                    <a class="dropdown-item" href="/userprofile">
                                        My Profile
                                    </a>
                                     <a class="dropdown-item" href="/courses">
                                        My Courses
                                    </a>
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @elsecan("isStudent")
                                        <a class="dropdown-item" href="/userprofile">
                                        My Profile
                                    </a>
                                      <a class="dropdown-item" href="/availablecourse">
                                        Available Courses
                                    </a>
                                       <a class="dropdown-item" href="/enroll">
                                        My Enrollements
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @endcan
                                </div>
                            </li>
      <img src="{{asset('users/'. Auth::user()->img)}}"  class="rounded-circle mx-3" width="50px" height="50px" alt="...">

                        @endguest
                    </ul>

    </div>

  </div>
</nav>
<h1 class="text-center "> @yield('home') </h1>
<h1 class="text-center "> @yield('about') </h1>
<h6 class=""> @yield('contact') </h6>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
