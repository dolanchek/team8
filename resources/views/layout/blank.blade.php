<div class="darker">
	<div class="overlay">
		<ul class="navbar-nav ml-auto">
			<img src="/images/Крутая версия/Untitled.png" alt="" class="w-24 rounded my-4" style="margin:0 auto">
			@guest
        	<li class="nav-item elem-center">
                <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-wide darkgrey-text little-bold" style="background-color: lightgrey" type="button">{{ __('Register') }}</button></a>
            </li>
            <hr class="elem-center my-2 w-74" style="border-top-width: 1.5rem;">
        	<li class="nav-item elem-center w-74">
                <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-wide w-100 darkgrey-text little-bold" style="background-color: lightgrey;" type="button">{{ __('Login') }}
                </button></a>
            </li>
            <div class="mt-4 mb-1 elem-center row no-gutters w-74">
            	<div class="col-5"><hr></div>
            	<div class="col-2 text-center">or</div>
            	<div class="col-5"><hr></div>
            </div>
            @else
            <li class="nav-item dropdown">
                <form action="/donate/{{$post->id}}" method="post">
                    @csrf
                    <p class="orange-text text-center" style="font-size: 1.3rem"><b>Donate money:</b></p>
                    <input id="cash" class="elem-center" type="number" name="cash" required>
                    <button type="submit" class="btn orange elem-center">
                        {{ __('Donate') }}
                    </button>
                </form>
            </li>
            @endguest
        </ul>
            <button class="btn btn-primary" style="position: absolute;left:35%;bottom:0" id="cancel">Отмена</button>
	</div>
</div>
