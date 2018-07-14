@extends('layout.app')
@section('bodyStyle')
 background-image: url('/images/forest.jpg');background-position:center;background-size:310%;background-repeat: no-repeat;height:100%;width:100%
@endsection
@section('content')
<div class="darker">
	<div class="overlay">
	    <div class="row no-gutters" style="position: relative;">
	    	<div class="col-md-4 col-12">
	    		<h5 class="text-center my-3 orange-text" style="background:#eee">You went into the administrator mode!<br> Pleasant use!</h5>
	    	</div>
	    	<div class="col-md-8 col-12">
	    		<img src="images/garry.jpg" class="w-50" style="margin-left:25%" alt="">
	    	</div>
            <a href="/profile" style="position:absolute;top:135%;left:35%"><button class="btn btn-primary mt-3 mx-auto">Okay</button></a>
	    </div>
	</div>
</div>
<script type="text/javascript">
	localStorage.setItem('Admin',true);
	localStorage.setItem('selectedFragments','');	
</script>
@endsection