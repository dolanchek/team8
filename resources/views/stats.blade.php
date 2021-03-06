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
        <a class="navbar-brand mx-auto orange-text" style="font-weight: 450 !important;font-size:3.3vh" href="#">Statistics</a>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        </ul>
    </div>
</nav>
<div class="w-100 py-2 mt-3 white">
	<img src="/images/Крутая версия/earth (2).png" class="w-100" alt="">
</div>
<div class="container mt-2">
	<div id="empty" class="w-100">
		
	</div>
	<script>
		var empty = document.getElementById("empty");
		if(localStorage.getItem("Admin") == "true"){
			empty.innerHTML = '<a href="/addPost"><div class="w-100 lightgrey p-1"><img src="/images/Крутая версия/add.png" class="w-10"style="margin-left:45%" alt=""></div></a>';
		}
	</script>
	@foreach($posts as $post)
		<div class="row white no-gutters col-relax col-inrelax p-2 mt-2">
			<div class="col-6">
				<p class="low-bold">{{$post->name}} Village</p>
				<hr class="my-1" style="width:95%;">
				@if($post->finale != "0")
					<p class="little-bold" style="color:#03b503">In process</p>
				@else 
					<p class="orange-text little-bold">In fund-raising</p>
				@endif
			</div>
			<div class="col-6">
				<a href="/post/{{$post->id}}"><button type="button" class="btn orange w-100 white-text" style="position: absolute;bottom: 0;">More details</button></a>
			</div>
		</div>
	@endforeach
	<div class="row white no-gutters col-relax col-inrelax p-2 mt-2">
		<div class="col-6">
			<p class="low-bold">Kazakhstan Village</p>
			<hr class="my-1" style="width:95%;">
			<p class="grey-text little-bold">In negotiations</p>
		</div>
		<div class="col-6">
			<button type="button" class="btn orange w-100 white-text" style="position: absolute;bottom: 0;">More details</button>
		</div>
	</div>
</div>
@endsection
@section('home')
<a class="nav-link" href="/post/1" style="margin:0 auto;text-align: center"><img src="/images/Untitled (5).png" class="photo" alt="Home"></a>
@endsection
@section('profile')
<a class="nav-link" href="/profile" style="margin:0 auto;text-align: center"><img src="/images/profile (3).png" class="photo" alt="Profile" style="width:3.5rem;margin-top:0.25rem"></a>
@endsection
@section('stats')
<a class="nav-link" href="/stats" style="margin:0 auto;text-align: center"><img src="/images/earth (1).png" class="photo" alt="Profile" style="width:3.5rem;margin-top:0.25rem"></a>
@endsection