@extends('layout.app')
@section('content')
<div class="row no-gutters prof-main">
	<div class="col-5">
		<img src="/images/user.jpg" alt="User-photo" class="w-100 rounded">
	</div>
	<div class="col-7 pl-2">
		<h5>Фамилия: ЛуТорПова</h5>
		<h5>Имя: АнДуоНа</h5>
		<h5>E-mail: ltp-team@gmail.com</h5>
	</div>
</div>
<h5>Всего задонатено:<p class="float-right">320.5$</p></h5>
<h5>История донатов:</h5>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">№</th>
      <th scope="col">Время</th>
      <th scope="col">Деревня</th>
      <th scope="col">Сумма</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>3</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>1</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
@endsection