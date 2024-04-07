<!doctype html>
<html>
	<head>
		@include('includes.head')
	</head>
	<body>
		<div class="container">
			<header class="row">
				@include('includes.header')
			</header>
			<br>
			<br>
			<div id="main" class="row">
				@yield('content')
			</div>
			<footer class="row" style="">
				@include('includes.footer')
			</footer>
		</div>
	</body>
</html>
