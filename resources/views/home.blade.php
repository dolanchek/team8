@extends('layout.app')
@section('home')
<a class="nav-link" href="/home" style="margin:0 auto;text-align: center"><img src="/images/Untitled (4).png" class="photo" alt="Home"></a>
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
  <div class="don-category mt-2 ">
    <h4>Fundraising villages</h4>
  </div>
  @foreach($posts as $post)
    <div class="post white mt-2">
        <div class="featured-article">
          <a href="/post/{{$post->id}}" class="photo">
            <img src="/{{$post->image}}" alt="" class="thumb">
          </a>
        </div>
          <div class="block-title">
            <h6 class="orange-text p-2 rounded" style="font-size:1.2rem;text-align: center;background-color:#eee;border-radius: 1.3rem">{{$post->name}} village</h6>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="70"
            aria-valuemin="0" aria-valuemax="100" style="width:{{$post->paid/($post->amount/100)}}%">
              
            </div>
            <h6 style="position:absolute;left:45%">{{$post->paid/($post->amount/100)}}%</h6>
          </div>
    </div>
  @endforeach
</div>
@endsection