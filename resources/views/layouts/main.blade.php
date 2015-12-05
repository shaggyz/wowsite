<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Nico's Wowserver - @yield('title')</title>

	<link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
	@yield('head')
</head>
<body>
	<div class="container">
		<header>
			<h1>Nico's Wowserver</h1>
			<h2 class="muted">Classic Vanilla World of warcraft server</h2>
			<p><strong>Untouched</strong> database, Blizzard rates, No item store, normal drops, etc.</p>
		</header>

		<section id="content">
			@yield('content')
		</section>

		<footer>
			<hr>
			<p>Nico's wow server - {{ date('Y') }}</p>
			<script type="text/javascript" src="/vendor/jquery/dist/jquery.min.js"></script>
			<script type="text/javascript" src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
			@yield('foot')
		</footer>
	</div>
</body>
</html>