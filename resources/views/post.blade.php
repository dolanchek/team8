@extends('layout.app')
@section('home')
<a class="nav-link" href="/post/1" style="margin:0 auto;text-align: center"><img src="/images/Untitled (4).png" class="photo" alt="Home"></a>
@endsection
@section('profile')
<a class="nav-link" href="/profile" style="margin:0 auto;text-align: center"><img src="/images/profile (3).png" class="photo" alt="Profile" style="width:3.5rem;margin-top:0.25rem"></a>
@endsection
@section('stats')
<a class="nav-link" href="/stats" style="margin:0 auto;text-align: center"><img src="/images/earth (2).png" class="photo" alt="Profile" style="width:3.5rem;margin-top:0.25rem"></a>
@endsection
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
        <a class="navbar-brand mx-auto orange-text" style="font-weight: 450 !important;font-size:3.3vh" href="#">Main</a>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        </ul>
    </div>
</nav>
	<div class="mt-2 secret-photo w-100 row no-gutters">
		<div class="col-1 no-white secret"></div>
	</div>
	<h5 class="description text-center p-1 mt-2">{{$post->name}} village</h5>
	<div class="progress">
	  <div class="progress-bar" role="progressbar" aria-valuenow="70"
	  aria-valuemin="0" aria-valuemax="100" style="width:{{$post->paid/($post->amount/100)}}%">
	    
	  </div>
	  @if($post->finale == "1")
	  	<h6 style="position:absolute;left:35%">Thanks for donate</h6>
	  @else
	 	<h6 style="position:absolute;left:45%" id="linkin">{{$post->paid/($post->amount/100)}}</h6>
	 	<script type="text/javascript">
	 			var linkin = document.getElementById("linkin");
	 			var result = Number(linkin.innerHTML);
	 			result = Math.round(result);
	 			linkin.innerHTML = result + "%";
	 	</script>
	  @endif
	</div>
	<div class="row mt-2" style="width:96%;margin-left:2%;">
		<div class="col-4 darkgrey-text white col-relax">
			Amount
		</div>
		<div class="col-4 darkgrey-text white col-relax">
			Paid
		</div>
		<div class="col-4 darkgrey-text white col-relax col-inrelax">
			Donaters
		</div>
		<div class="col-4 mt-1 grey-text white col-relax">
			${{$post->amount}}
		</div>
		<div class="col-4 mt-1 grey-text white col-relax">
			${{$post->paid}}
		</div>
		<div class="col-4 mt-1 grey-text white col-relax col-inrelax">
			{{$post->donaters}}
		</div>
	</div>
	<div class="mt-2 p-3 white text-content">
		@if($post->finale == "1")
	  		<p class="lightengrey p-2 mb-2">The collection of money is over, now we are starting to purchase materials and formalize contracts. Thank you for the donation! </p>
		@endif
		<p>{{$post->content}}</p>
		@if($post->finale == "1")
			<button type="button" class="btn btn-don px-9 mt-5 darkgrey-text">Donate</button>
		@else
		<button type="button" class="btn btn-don btn-relax px-9 mt-5 darkgrey-text" id="donate">Donate</button>
		@endif
	</div>
	<div class="white rounded p-1 mt-3" style="margin-left:3%;width:94%">
		<header class="w-100 p-1">
			<h3 style="display:inline-block;">Tweets</h3> by <a href="#">@lighTry</a>
			<hr>
			<div style="height:10rem; overflow: scroll">
				<div class="row white no-gutters col-relax col-inrelax p-2 mt-2 mb-5" style="background:#eee !important">
					<div class="col-12">
						<img src="/images/Untitled (4).png" alt="" style="width:10%">
					</div>
					<div class="col-12">
						<p class="low-bold" style="color:#007bff">Three post</p>
						<p class="grey-text float-right">12 may, 14:12 p.m.</p>
					</div>
					<hr class="my-1" style="width:95%;">
					<div class="col-12">
						<p class="little-bold grey-text">Today we added a village !!! Thanks for the support!!! </p>
					</div>
				</div>
				<div class="row white no-gutters col-relax col-inrelax p-2 mt-2 mb-5" style="background:#eee !important">
					<div class="col-12">
						<img src="/images/Untitled (4).png" alt="" style="width:10%">
					</div>
					<div class="col-12">
						<p class="low-bold" style="color:#007bff">Second post</p>
						<p class="grey-text float-right">24 march, 12:33 p.m.</p>
					</div>
					<hr class="my-1" style="width:95%;">
					<div class="col-12">
						<p class="little-bold grey-text">We agreed with them, soon we will start raising funds. At the moment, there is preparation. </p>
					</div>
				</div>
				<div class="row white no-gutters col-relax col-inrelax p-2 mt-2 mb-5" style="background:#eee !important">
					<div class="col-12">
						<img src="/images/Untitled (4).png" alt="" style="width:10%">
					</div>
					<div class="col-12">
						<p class="low-bold" style="color:#007bff">First post</p>
						<p class="grey-text float-right">13 january, 20:03 p.m.</p>
					</div>
					<hr class="my-1" style="width:95%;">
					<div class="col-12">
						<p class="little-bold grey-text">From today we begin to negotiate with the appointed village. Maybe they will pass a month, apologize for the inconvenience. </p>
					</div>
				</div>
			</div>
		</header>
	</div>
	
@include('layout.blank')
<script>
    var btne = document.getElementById("cancel");
    var darker = document.querySelector(".darker");
    var donatebtn = document.getElementById("donate");
	var onesecret = document.querySelector(".secret");
	var offsetWidth = onesecret.offsetWidth;
	var amounted = document.getElementById("amounted");
	onesecret.remove();
    btne.onclick = function(){
        darker.style.display = "none";
    };
    darker.style.display="none";
    if(donatebtn != null){
    	donatebtn.onclick = function(){
    		darker.style.display = "block";
    	};
    }
	var secretphoto = document.querySelector(".secret-photo");
	var a = Math.round(secretphoto.offsetHeight / offsetWidth) * 12;
	if(Number.isInteger(a / 12) == false){
		if((a % 12) > 6){
			console.log("true");
			a = a + (a % 12);
			console.log(a);
		} else {
			console.log("false");
			a = a - (a % 12);
			console.log(a);
		}
	}

	var selectedFragments = [];
	var openedFragments;
	if(localStorage.getItem('selectedFragments') != null && localStorage.getItem('selectedFragments') != ""){
		openedFragments = JSON.parse(localStorage.getItem('selectedFragments'));
	}
	console.log(openedFragments);
	var phpamount = document.getElementById("phpamount");
	for(var i=0;i < a; i++){
		var div = document.createElement('div');
		div.className = "col-1 secret no-white";
		div.setAttribute("id", i);
		secretphoto.appendChild(div);
	}
	var secrets = document.querySelectorAll(".secret");
	if(openedFragments != null){
		for (var i = 0; i < openedFragments.length; i++) {
			if(openedFragments[i] != null){
				secrets[openedFragments[i]].style.opacity = 0;
			}
		}
	}
	for(var i=0;i < secrets.length; i++){
		secrets[i].style.height = offsetWidth + "px";
		secrets[i].onclick = function(){
				console.log(selectedFragments);
				this.style.backgroundColor = "green";
				selectedFragments[selectedFragments.length] = this.getAttribute("id");
				var amountcash = selectedFragments.length * 5;
				amounted.innerHTML = "Donate amount: $" + amountcash;
				phpamount.setAttribute("value",amountcash);
				console.log(selectedFragments.concat(openedFragments));
				localStorage.setItem('selectedFragments',JSON.stringify(selectedFragments.concat(openedFragments)));
			/*var amountcash = selectedFragments.length * 5;
			amounted.innerHTML = "Donate amount: $" + amountcash;
			phpamount.setAttribute("value",selectedFragments);*/
		}
	}
</script>

@endsection