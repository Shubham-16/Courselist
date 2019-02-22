<!doctype html>
<html>
<head>
	<title>@yield('title','Laravel class')</title>
</head>
<body>
	<ul>
		<li><a href="/">Home</a></li>
		<li><a href="/about">About</a></li>
		<li><a href="contact">Contact Us</a></li>
	</ul>
	@yield('content')
</body>
</html>