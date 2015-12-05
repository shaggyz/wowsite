@extends('layouts.main')

@section('title', 'Home')

@section('content')

	<div class="create-account">
		<h3>Create new account</h3>
		<form class="form-inline" method="post" action="{{ route('accounts.create') }}">
			<div class="form-group">
				<label class="sr-only" for="exampleInputEmail3">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" required>
			</div>
			<div class="form-group">
				<label class="sr-only" for="exampleInputPassword3">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" required>
			</div>
			<div class="form-group">
				<label class="sr-only" for="exampleInputPassword3">Repeat Password</label>
				<input type="repassword" class="form-control" id="exampleInputPassword3" placeholder="Repeat Password" required>
			</div>
			<button type="submit" class="btn btn-primary">Create account</button>
		</form>
	</div>

	<div class="server-statistics">
		<h3>Server statistics</h3>
		<dl>
			<dt>Characters</dt>
				<dd>Total characters on server <strong>{{ $characters }}</strong></dd>
			<dt>Players online</dt>
				<dd>Total players online <strong>{{ $online }}</strong></dd>
			<dt>Created accounts</dt>
				<dd>Total accounts on server <strong>{{ $accounts }}</strong></dd>
		</dl>
	</div>

	<div class="client-download">
		<h3>Download game client</h3>
		<p><a href="/downloads/wow-1.12.1.zip">World of Warcraft 1.12.1 EN</a></p>
	</div>

	<div class="help">
		<h3>Help</h3>

		<h4>Howto play?</h4>
		<ul>
			<li>
				<p>Create an account</p>
			</li>
			<li>
				<p>Download game client</p>
			</li>
			<li>
				<p>Uncompress game client in folder named <i>World of Warcraft</i></p>
			</li>
			<li>
				<p>Run the game always with wow.exe (never with launcher.exe)</p>
			</li>
			<li>
				<p>At logon screen enter your credentials. Enjoy :D</p>
			</li>
		</ul>

	</div>

@stop