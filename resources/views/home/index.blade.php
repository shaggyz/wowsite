@extends('layouts.main')

@section('title', 'Home')

@section('content')

	<div class="create-account">
		<h3>Create new account</h3>

		{{-- Action messages: the good news :D --}}
		@if (session()->has('message'))
			<div class="alert alert-success">
		        <p>{{ session()->get('message') }}</p>
		    </div>
		@endif

		{{-- Validation error list --}}
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		{{-- If account was created the form isn't needed --}}
		@if (! session()->has('message'))
			<form class="form-inline" method="post" action="{{ route('accounts.create') }}" autocomplete="off">
				{{ csrf_field() }}
				<div class="form-group">
					<label class="sr-only" for="email">Email address</label>
					<input type="email" name="username" class="form-control" id="email" placeholder="Email" required>
				</div>
				<div class="form-group">
					<label class="sr-only" for="password">Password</label>
					<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
				</div>
				<div class="form-group">
					<label class="sr-only" for="repassword">Repeat Password</label>
					<input type="password" name="repassword" class="form-control" id="repassword" placeholder="Repeat Password" required>
				</div>
				<button type="submit" class="btn btn-primary">Create account</button>
			</form>
		@endif
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

		<h4>Extra downloads</h4>
		<p><a href="#">Server VirtualBox image</a></p>
	</div>

	<div class="help">
		<h3>Help</h3>

		<h4>Howto play?</h4>
		<ul>
			<li>
				<p>Create a new account</p>
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

		<h4>Classic wow tools</h4>

		<ul>
			<li>
				<h5>Talent calculator</h5>
				<a href="http://rpgworld.altervista.org/classic_vanilla_talent/" rel="external">http://rpgworld.altervista.org/classic_vanilla_talent/</a>
			</li>
			<li>
				<h5>World database</h5>
				<a href="http://db.vanillagaming.org/" rel="external">http://db.vanillagaming.org/</a>
			</li>
			<li>
				<h5>Addons 1</h5>
				<a href="https://drive.google.com/drive/u/0/folders/0ByAxutR4jmqfVFA4cGNkRG5ZdDQ" rel="external">https://drive.google.com/drive/u/0/folders/0ByAxutR4jmqfVFA4cGNkRG5ZdDQ</a>
			</li>
			<li>
				<h5>Addons 2</h5>
				<a href="https://drive.google.com/drive/u/0/folders/0ByAxutR4jmqfQ2QxZV9Qc0RnR28" rel="external">https://drive.google.com/drive/u/0/folders/0ByAxutR4jmqfQ2QxZV9Qc0RnR28</a>
			</li>
		</ul>

	</div>

@stop