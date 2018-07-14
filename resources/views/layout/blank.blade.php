<div class="darker">
	<div class="overlay">
		<ul class="navbar-nav ml-auto">
			<img src="/images/Крутая версия/Untitled.png" alt="" class="w-24 rounded my-4" id="logo" style="margin:0 auto">
			@guest
        	<li class="nav-item elem-center" id="over-btn">
                <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-wide darkgrey-text little-bold" style="background-color: lightgrey" type="button">{{ __('Register') }}</button></a>
            </li>
            <hr class="elem-center my-2 w-74" style="border-top-width: 1.5rem;">
        	<li class="nav-item elem-center" id="over-btn">
                <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-wide w-100 darkgrey-text little-bold" style="background-color: lightgrey;" type="button">{{ __('Login') }}
                </button></a>
            </li>
            <div class="mt-4 mb-1 elem-center row no-gutters w-74">
            	<div class="col-5"><hr></div>
            	<div class="col-2 text-center">or</div>
            	<div class="col-5"><hr></div>
            </div>
            <div class="row no-gutters w-40 " style="margin-left:30%">
                <div class="col-3 float-left">
                    <img src="/images/Крутая версия/facebook 2.png" class="w-100" alt="">
                </div>
                <div class="col-3 float-left">
                    <img src="/images/Крутая версия/google-plus.png" class="w-100" alt="">
                </div>
                <div class="col-3 float-left">
                    <img src="/images/Крутая версия/telegram.png" class="w-100" alt="">
                </div>
                <div class="col-3 float-left">
                    <img src="/images/Крутая версия/twitter.png" class="w-100" alt="">
                </div>
            </div>
            @else
            <li class="nav-item dropdown">
                <form action="/donate/{{$post->id}}" method="post">
                    @csrf
                    <p class="orange-text text-center" style="font-size: 1.3rem" id="amounted"><b>Donate amount: $0.00</b></p>
                    <input name="cash" value="0" type="hidden" id="phpamount" />
                    <button type="submit" class="btn orange" style="margin-left:33%;width:35% !important;margin-top: 50%;">
                        {{ __('Donate') }}
                    </button>
                </form>
            </li>
            @endguest
            <button class="btn btn-primary mt-3" style="margin:0 auto;" id="cancel">Cancel</button>
        </ul>
            
	</div>
</div>
