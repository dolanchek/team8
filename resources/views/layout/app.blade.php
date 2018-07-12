<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Пост</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body style="background-color: orange">
<div class="container-fluid p-0">
	@yield('content')
</div>
<nav class="navbar navbar-expand navbar-light bg-light p-0 fixed-bottom sticky-bottom">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item float-right">
        <a class="nav-link" href="/home"><img src="/images/smile.png" alt="Home" style="height:2rem"></a>
      </li>
      <li class="nav-item float-right">
        <a class="nav-link" href="/profile"><img src="/images/profile.png" alt="Profile" style="height:2rem"></a>
      </li>
      <li class="nav-item float-right">
        <a class="nav-link" href="/stats"><img src="/images/earth (1).png" alt="Statistic" style="height:2rem"></a>
      </li>
    </ul>
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
</body>
</html>