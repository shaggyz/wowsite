<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $wowServerName }} Wowserver - @yield('title')</title>
	<link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="{{ asset('img/favicon-' . rand(1,9) . '.png') }}">
	@yield('head')
</head>
<body>
	<div class="container">

		{{-- Banner and future login header --}}
		<header class="row">
			{{-- banner --}}
			<div class="col-md-10">
				<h1>{{ $wowServerName }} Wowserver</h1>
				<h2 class="muted">{{ _('Classic Vanilla') . ' ' . $wowServerVersion . ' ' . _('World of warcraft server') }}</h2>
				<p><strong>{{ _('Untouched') }}</strong> {{ _('database, Blizzard rates, No item store, normal drops, etc.') }}</p>	
			</div>
			{{-- language selectort --}}
			<div class="col-md-2">
				{!!
					LaravelGettext::getSelector([
				        'en_US' => _('English'),
				        'es_ES' => _('Spanish')
				    ])->render() 
				!!}
			</div>
		</header>

		{{-- Main site section  --}}
		<section id="content">
			@yield('content')
		</section>

		{{-- foooooter --}}
		<footer>
			<hr>
			<p>{{ $wowServerName }} wow server - {{ date('Y') }}</p>
			<script type="text/javascript" src="/vendor/jquery/dist/jquery.min.js"></script>
			<script type="text/javascript" src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="/js/bundle.js"></script>
			@yield('foot')
		</footer>
	</div>
</body>
</html>