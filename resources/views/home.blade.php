@extends('layout.app')
@section('home')
<a class="nav-link" href="/home" style="margin:0 auto;text-align: center"><img src="/images/smile.png" class="photo" alt="Home"></a>
@endsection
@section('profile')
<a class="nav-link" href="/profile" style="margin:0 auto;text-align: center"><img src="/images/profile (3).png" class="photo" alt="Profile" style="width:3.5rem;margin-top:0.25rem"></a>
@endsection
@section('stats')
<a class="nav-link" href="/stats" style="margin:0 auto;text-align: center"><img src="/images/earth (2).png" class="photo" alt="Profile" style="width:3.5rem;margin-top:0.25rem"></a>
@endsection
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/images/1.jpg?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/2.jpg?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/3.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="w-100" category="active">
  <div class="don-category mt-2">
    <h5>В активной разработке</h5>
  </div>
  <div class="post">
      <div class="featured-article">
        <a href="/post/1" class="photo">
          <img src="http://placehold.it/482x350" alt="" class="thumb">
        </a>
        <div class="block-title">
          <h6>Lorem ipsum dolor asit amet</h6>
          <p class="by-author"><small>By Jhon Doe</small></p>
        </div>
      </div>
  </div>
</div>
@endsection