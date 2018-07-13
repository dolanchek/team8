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
                <form action="POST" method="/donate">
                    @csrf
                    <p class="orange-text text-center" style="font-size: 1.3rem"><b>Donate money:</b></p>
                    <input id="cash" type="text" class="form-control{{ $errors->has('cash') ? ' is-invalid' : '' }}" name="cash" required>
                    <!--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }} <span class="caret"></span></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div>-->
                    <a href="/donate">
                        <button type="submit" class="btn orange">
                            {{ __('Donate') }}
                        </button>
                    </a>
                </form>
            </li>
            @endguest
            <button class="btn btn-primary" style="position: absolute;left:35%;bottom:0" id="cancel">Отмена</button>
	</div>
</div>
