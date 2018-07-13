@extends('layouts.app')

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
        <a class="navbar-brand mx-auto orange-text" style="font-weight: 450 !important;font-size:3.3vh" href="#">Register</a>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        </ul>
    </div>
</nav>
<div class="container p-0">
    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
    <div class="row no-gutters">
            @csrf
            <div class="col-5 h-100">
                <label for="surname" style="width:90%;margin-left:10%;background-color: white" class="col-md-4 p-2  rounded col-form-label text-md-right mt-1">{{ __('Surname') }}</label>
                <label for="name" style="width:90%;margin-left:10%;background-color: white" class="col-md-4 p-2  rounded col-form-label text-md-right mt-3">{{ __('Name') }}</label>
                <label for="email" style="width:90%;margin-left:10%;background-color: white" class="col-md-4 p-2 rounded col-form-label text-md-right mt-4">{{ __('E-Mail') }}</label>
                <label for="password" style="width:90%;margin-left:10%;background-color: white" class="col-md-4 p-2 rounded col-form-label text-md-right mt-4">{{ __('Password') }}</label>
                <label for="password-confirm" style="width:90%;margin-left:10%;background-color: white;" class="col-md-4 p-2 rounded col-form-label text-md-right mt-3">{{ __('Confirm Password')}}</label>
            </div>
            <div class="col-7">
                <div class="form-group row mt-1 no-gutters">
                    <div class="col-md-6">
                        <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus style="width:85%;margin-left:10%">
                        @if ($errors->has('surname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('surname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row mt-1 no-gutters">
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus style="width:85%;margin-left:10%">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                        <div class="form-group row  no-gutters" style="margin-top:1.6rem">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required style="width:85%;margin-left:10%">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row no-gutters" style="margin-top:1.7rem">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required style="width:85%;margin-left:10%">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row no-gutters" style="margin-top:2rem">

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required style="width:85%;margin-left:10%">
                            </div>
                        </div>
            </div>
            <div class="w-90 elem-center white mt-5" style="font-size:1rem">
                Нажимая кнопку "Зарегестрироваться", вы соглашаетесь с <span class="orange-text">Условиями использования</span> и <span class="orange-text">Политикой конфидициальности</span>
            </div>
            <div class="form-group row mb-0 elem-center mt-3">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn orange btn-relax">
                        <b>{{ __('Register') }}</b>
                    </button>
                </div>
            </div>
            <div class="form-group row mb-0 elem-center mt-3">
                <div class="col-md-6 offset-md-4">
                    <a href="/home">
                        <button type="submit" class="btn lightgrey btn-relax">
                            Отмена
                        </button>
                    </a>
                </div>
            </div>
    </div>
    </form>
</div>
@endsection
