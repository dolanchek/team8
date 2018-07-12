@extends('layout.app')
@section('home')
<a class="nav-link" href="/post" style="margin:0 auto;text-align: center"><img src="/images/Untitled (4).png" class="photo" alt="Home"></a>
@endsection
@section('profile')
<a class="nav-link" href="/profile" style="margin:0 auto;text-align: center"><img src="/images/profile (3).png" class="photo" alt="Profile" style="width:3.5rem;margin-top:0.25rem"></a>
@endsection
@section('stats')
<a class="nav-link" href="/stats" style="margin:0 auto;text-align: center"><img src="/images/earth (2).png" class="photo" alt="Profile" style="width:3.5rem;margin-top:0.25rem"></a>
@endsection
@section('content')
	<div class="mt-2 secret-photo w-100 row no-gutters">
		<div class="col-1 no-white secret"></div>
	</div>
	<h5 class="description text-center p-1 mt-2">Монгольская Деревня</h5>
	<div class="progress">
	  <div class="progress-bar" role="progressbar" aria-valuenow="70"
	  aria-valuemin="0" aria-valuemax="100" style="width:70%">
	    
	  </div>
	  <h6 style="position:absolute;left:45%">70%</h6>
	</div>
	<div class="row mt-2" style="width:96%;margin-left:2%;">
		<div class="col-4 darkgrey-text white col-relax">
			Сумма
		</div>
		<div class="col-4 darkgrey-text white col-relax">
			Оплачено
		</div>
		<div class="col-4 darkgrey-text white col-relax col-inrelax">
			Меценаты
		</div>
		<div class="col-4 mt-1 grey-text white col-relax">
			50'000 руб.
		</div>
		<div class="col-4 mt-1 grey-text white col-relax">
			42'671 руб.
		</div>
		<div class="col-4 mt-1 grey-text white col-relax col-inrelax">
			14'263 людей
		</div>
	</div>
	<div class="mt-2 p-3 white text-content">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque praesentium, laudantium aspernatur quos doloremque optio distinctio, veniam voluptatum ipsa molestiae quidem aut doloribus animi. Explicabo obcaecati quisquam nobis earum porro?</p>
		<button type="button" class="btn btn-don btn-relax px-9 mt-5 darkgrey-text">Donate</button>
	</div>
@include('layout.blank')
<script>
	var secretphoto = document.querySelector(".secret-photo");
	var onesecret = document.querySelector(".secret");
	var offsetWidth = onesecret.offsetWidth;
	var a = Math.round(secretphoto.offsetHeight / offsetWidth) * 12;
	console.log(a);
	if(Number.isInteger(a / 12) == false){
		if(a % 12 > 6){
			console.log("true");
			a = a + (a % 12);
			console.log(a);
		} else {
			console.log("false");
			a = a - (a % 12);
			console.log(a);
		}
	}
	for(var i=0;i < a-1; i++){
		var div = document.createElement('div');
		div.className = "col-1 secret no-white";

		secretphoto.appendChild(div);
	}
	var secrets = document.querySelectorAll(".secret");
	for(var i=0;i < secrets.length; i++){
		secrets[i].style.height = offsetWidth + "px";
		secrets[i].onclick = function(){
			this.style.backgroundColor = "green";
		}
	}
</script>
@endsection