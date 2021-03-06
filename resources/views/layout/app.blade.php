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
<body>
<div class="container-fluid p-0" style="overflow: scroll; @yield('bodyStyle')">
	@yield('content')
  <nav class="navbar navbar-expand navbar-light p-0 mt-3" style="background:white;border-bottom:#232323 solid 2rem;padding-bottom: 0.25rem !important;padding-top: 0.25rem !important;position:relative;opacity: 0;z-index: 20 !important;">
  <div class="row no-gutters w-100">
      <div class="col-4">
        @yield('home')
      </div>
      <div class="col-4">
        @yield('profile')
      </div>
      <div class="col-4">
        @yield('stats')
      </div>
    </div>
  </nav>
</div>
<nav class="navbar navbar-expand navbar-light p-0 fixed-bottom sticky-bottom" style="background:white;border-bottom:#232323 solid 1rem;padding-bottom: 0.25rem !important;padding-top: 0.25rem !important;z-index: 20 !important;">
  <div class="row no-gutters w-100">
    <div class="col-4">
      @yield('home')
    </div>
    <div class="col-4">
      @yield('profile')
    </div>
    <div class="col-4">
      @yield('stats')
    </div>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
</body>
</html>