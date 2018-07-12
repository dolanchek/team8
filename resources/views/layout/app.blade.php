<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Пост</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-light p-0">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/home"><button type="button" class="btn-larger red"></button></a>
      </li>
      <li class="nav-item">
      	<a class="nav-link" href="/profile"><button type="button" class="btn-larger yellow"></button></a>
      </li>
      <li class="nav-item">
      	<a class="nav-link" href="/stats"><button type="button" class="btn-larger green"></button></a>
      </li>
    </ul>
</nav>
<div class="container">
	@yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
</body>
</html>