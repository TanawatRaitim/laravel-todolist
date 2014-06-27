<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>{{ $title }}</title>
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" media="all" />
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>
