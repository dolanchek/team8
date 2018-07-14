@extends('layout.app')
@section('bodyStyle')width:100%@endsection
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
        <a class="navbar-brand mx-auto orange-text" style="font-weight: 450 !important;font-size:3.3vh" href="#">Create Post</a>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        </ul>
    </div>
</nav>
<div class="container">
	<form method="POST" action="/redirect-vil">
    <div class="row no-gutters">
            @csrf
            <div class="col-5 h-100">
                <label for="surname" style="width:90%;margin-left:10%;background-color: white" class="col-md-4 p-2  rounded col-form-label text-md-right mt-1">{{ __('Village name') }}</label>
                <label for="name" style="width:90%;margin-left:10%;background-color: white" class="col-md-4 p-2  rounded col-form-label text-md-right mt-3">{{ __('Village description') }}</label>
                <label for="email" style="width:90%;margin-left:10%;background-color: white" class="col-md-4 p-2 rounded col-form-label text-md-right mt-4">{{ __('Amount collected') }}</label>
                <label for="password" style="width:90%;margin-left:10%;background-color: white" class="col-md-4 p-2 rounded col-form-label text-md-right mt-4">{{ __('Image url') }}</label>
            </div>
            <div class="col-7">
                <div class="form-group row mt-1 no-gutters">
                    <div class="col-md-6">
                    	<input type="text" name="name" class="form-control" style="width:85%;margin-left:10%">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row no-gutters" style="margin-top:1.5rem">
                    <div class="col-md-6">
                    	<input type="text" name="content" class="form-control" style="width:85%;margin-left:10%">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('content') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row  no-gutters" style="margin-top:3.5rem">
                    <div class="col-md-6">
                        <input type="number" name="amount" class="form-control" style="width:85%;margin-left:10%">
						@if ($errors->has('amount'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('amount') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row  no-gutters" style="margin-top:2.4rem">
                    <div class="col-md-6">
                        <input type="text" name="image" class="form-control" style="width:85%;margin-left:10%">
						@if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group row mb-0 elem-center mt-3">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn orange btn-relax">
                        <b>{{ __('Create') }}</b>
                    </button>
                </div>
            </div>
    </div>
    </form>
</div>
@endsection