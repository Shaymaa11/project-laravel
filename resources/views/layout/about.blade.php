@extends('layout.navbar')
@section('about')
  <!doctype html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
<style>

    body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #839eda;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: rgb(5, 55, 97);
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
    </style>
</head>

<body>
    <div class="container">
<div class="about-section">
  <h1>About Us </h1>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="{{URL::asset('/img/nav4.png')}}" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Shaymaa</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text </p>
        <p>jane@example.com</p>
        <p><a class="button" href="/contact">Contact</a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="{{URL::asset('/img/nav4.png')}}" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Dodo</h2>
        <p class="title">Art Director</p>
        <p>Some text </p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="{{URL::asset('/img/nav4.png')}}" alt="John" style="width:100%">
      <div class="container">
        <h2>Loma</h2>
        <p class="title">Designer</p>
        <p>Some text </p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>
</body>

</html>
{{-- {{ HTML::image('image/', 'alt text', array('class' => 'css-class')) }}
 --}}
@endsection
