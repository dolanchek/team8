@extends('layout.app')
@section('content')
<nav class="navbar navbar-expand navbar-light mb-3" style="background:white;height:3rem;">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                  <img src="/images/settings (1).png" alt="">
                </a>
            </li>
        </ul>
    </div>
    <div class="mx-auto order-2">
        <a class="navbar-brand mx-auto orange-text" style="font-weight: 450 !important;font-size:3.3vh" href="#">My Profile</a>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        </ul>
    </div>
</nav>
<div class="row no-gutters prof-main white">
    @guest
        <ul class="navbar-nav mx-auto mb-5">
            <img src="/images/Крутая версия/Untitled.png" alt="" class="w-24 rounded my-4" style="margin:0 auto">
            <h4 class="mb-5">You not autorizated.</h4>
          <li class="nav-item elem-center">
                <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-wide darkgrey-text little-bold" style="background-color: lightgrey" type="button">{{ __('Register') }}</button></a>
            </li>
            <hr class="elem-center my-2 w-74" style="border-top-width: 1.5rem;">
          <li class="nav-item elem-center">
                <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-wide w-100 darkgrey-text little-bold" style="background-color: lightgrey;" type="button">{{ __('Login') }}
                </button></a>
          </li>
        </ul>
    @else
  	<div class="col-4">
  		<img src="/images/user.jpg" alt="User-photo" class="rounded ml-2" style="height:13.5rem">
  	</div>
  	<div class="col-7 offset-1 pl-2">
  		<h5 class="prof-input mt-4 darkgrey-text">{{ Auth::user()->surname }}</h5>
  		<h5 class="prof-input darkgrey-text">{{ Auth::user()->name }}</h5>
  		<h6 class="prof-input darkgrey-text">{{ Auth::user()->email }}</h6>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button type="button" class="float-right mr-2 mt-2 btn btn-primary">Logout</button></a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
  	</div>
    </div>
    <div class="container">
    <div class="white p-2 my-2 col-relax col-inrelax">
      <h5 class="grey-text">Total paid:<p class="float-right orange-text">$320.5</p></h5>
    </div>
    <table class="table white table-relax col-inrelax">
      <tbody style="">
        <tr style="background-color: orange;border-top-left-radius: 3rem;border-top-right-radius: 3rem;">
          <th scope="col">Time</th>
          <th scope="col">Village</th>
          <th scope="col">Paid</th>
        </tr>
        <tr>
          <td>9:25 </td>
          <td>Mongolian village</td>
          <td>$215</td>
        </tr>
      </tbody>
    </table> 
        @endguest
    </div>
@endsection
@section('home')
<a class="nav-link" href="/home" style="margin:0 auto;text-align: center"><img src="/images/Untitled (5).png" class="photo" alt="Home"></a>
@endsection
@section('profile')
<a class="nav-link" href="/profile" style="margin:0 auto;text-align: center"><img src="/images/profile.png" class="photo" alt="Profile" style="width:3.5rem;margin-top:0.25rem"></a>
@endsection
@section('stats')
<a class="nav-link" href="/stats" style="margin:0 auto;text-align: center"><img src="/images/earth (2).png" class="photo" alt="Profile" style="width:3.5rem;margin-top:0.25rem"></a>
@endsection