@extends('layout.app')
@section('content')
	<div class="white mt-2 p-2" style="width:100%">
		<img src="/images/setwalls.ru-9422.jpg" alt="" class="img-fluid">
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
@endsection