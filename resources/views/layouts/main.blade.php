<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $wowServerName }} Wowserver - @yield('title')</title>
	<link link='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
	<link href="/css/wowserver.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="{{ asset('img/favicon-' . rand(1,9) . '.png') }}">
	@yield('head')
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-3 text-center">
					<img src="{{ asset('img/logo.png') }}" alt="World of Warcraft" class="img-responsive">
				</div>
				<div class="col-sm-9 text-right server-resume">
					<h1>{{ $wowServerName }} Wowserver</h1>
					<h2 class="muted">Classic Vanilla {{ $wowServerVersion }} World of warcraft server</h2>
					<p><strong>Untouched</strong> database, Blizzard rates, No item store, normal drops, etc.</p>
				</div>
			</div>

			{{-- language selector --}}
			<div class="col-md-2">
				{!!
					LaravelGettext::getSelector([
				        'en_US' => _('English'),
				        'es_ES' => _('Spanish')
				    ])->render() 
				!!}
			</div>
		</div>
	</header>

	<section id="content">
		<div class="container">
			@yield('content')
		</div>
	</section>

	<footer>
		<div class="container">
			<p>{{ $wowServerName }} wow server - {{ date('Y') }}</p>
			<script type="text/javascript" src="/vendor/jquery/dist/jquery.min.js"></script>
			<script type="text/javascript" src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="/js/bundle.js"></script>
			@yield('foot')
		</div>
	</footer>
</body>
</html>