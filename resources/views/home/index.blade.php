@extends('layouts.main')

@section('title', 'Home')

@section('content')

	<div class="row">
		<div class="col-sm-9">
			<div class="create-account">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#newAccount" aria-controls="newAccount" role="tab" data-toggle="tab">{{ _('New Account') }}</a>
					</li>
					<li role="presentation">
						<a href="#listAccounts" aria-controls="listAccounts" role="tab" data-toggle="tab">{{ _('List accounts') }}</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active well" id="newAccount">
						<div class="row">
							<div class="col-sm-3 hidden-xs">
								<img src="{{ asset('/img/gnome.png') }}" alt="Create it!">
							</div>
							<div class="col-sm-9">
								<h3>{{ _('Create new account') }}</h3>

								{{-- Action messages: the good news :D --}}
								@if (session()->has('message'))
									<div class="alert alert-success">
								        <p>{{ session()->get('message') }}</p>
								    </div>
								@endif

								{{-- Validation error list --}}
								@if (isset($errors) && count($errors) > 0)
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
										<div class="form-line">
											<div class="form-group">
												<label class="sr-only" for="username">{{ _('Username') }}</label>
												<input type="text" name="username" class="form-control" id="username" placeholder="{{ _('Username') }}" required>
											</div>
											<div class="form-group">
												<label class="sr-only" for="email">{{ _('Email address') }}</label>
												<input type="email" name="email" class="form-control" id="email" placeholder="{{ _('Email') }}" required>
											</div>
										</div>
										<div class="form-line">
											<div class="form-group">
												<label class="sr-only" for="password">{{ _('Password') }}</label>
												<input type="password" name="password" class="form-control" id="password" placeholder="{{ _('Password') }}" required>
											</div>
											<div class="form-group">
												<label class="sr-only" for="repassword">{{ _('Repeat Password') }}</label>
												<input type="password" name="repassword" class="form-control" id="repassword" placeholder="{{ _('Repeat Password') }}" required>
											</div>
										</div>
										<button type="submit" class="btn btn-primary">{{ _('Create account') }}</button>
									</form>
								@endif
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="listAccounts">
						<h3>{{ _('List accounts') }}</h3>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>{{ _('Username') }}</th>
									<th>{{ _('Locked') }}</th>
									<th>{{ _('Realm ID') }}</th>
									<th class="text-right">{{ _('Last login') }}</th>
								</tr>
							</thead>
							<tbody>
							@foreach($accounts as $account)
								<tr>
									<td>{{ $account->id }}</td>
									<td>{{ $account->username }}</td>
									<td>{{ $account->locked }}</td>
									<td>#{{ $account->active_realm_id }}</td>
                                    @if ($account->last_login->timestamp > 0)
									    <td class="text-right">{{ $account->last_login->format('d/m/Y') }}</td>
                                    @else
                                        <td class="text-right">{{ _('Never logged in') }}</td>
                                    @endif
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>

				<hr>

				<div class="help">
					<h3>{{ _('Help') }}</h3>

					<h4>{{ _('Howto play?') }}</h4>
					<ul>
						<li>
							<p>{{ _('Create a new account') }}</p>
						</li>
						<li>
							<p>{{ _('Download game client') }}</p>
						</li>
						<li>
							<p>{{ _('Uncompress game client in folder named') }} <i>World of Warcraft</i></p>
						</li>
						<li>
							<p>{{ _('Run the game always with wow.exe (never with launcher.exe)') }}</p>
						</li>
						<li>
							<p>{{ _('At logon screen enter your credentials. Enjoy :D') }}</p>
						</li>
					</ul>

					<h4>{{ _('Classic wow tools') }}</h4>

					<ul>
						<li>
							<h5>{{ _('Talent calculator') }}</h5>
							<a href="http://rpgworld.altervista.org/classic_vanilla_talent/" rel="external">http://rpgworld.altervista.org/classic_vanilla_talent/</a>
						</li>
						<li>
							<h5>{{ _('World database') }}</h5>
							<a href="http://db.vanillagaming.org/" rel="external">http://db.vanillagaming.org/</a>
						</li>
						<li>
							<h5>{{ _('Addons') }} 1</h5>
							<a href="https://drive.google.com/drive/u/0/folders/0ByAxutR4jmqfVFA4cGNkRG5ZdDQ" rel="external">https://drive.google.com/drive/u/0/folders/0ByAxutR4jmqfVFA4cGNkRG5ZdDQ</a>
						</li>
						<li>
							<h5>{{ _('Addons') }} 2</h5>
							<a href="https://drive.google.com/drive/u/0/folders/0ByAxutR4jmqfQ2QxZV9Qc0RnR28" rel="external">https://drive.google.com/drive/u/0/folders/0ByAxutR4jmqfQ2QxZV9Qc0RnR28</a>
						</li>
					</ul>

				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="server-statistics">
				<h3>{{ _('Server statistics') }}</h3>
				<dl>
					<dt>{{ _('Characters') }}</dt>
						<dd>{{ _('Total characters on server') }} <strong>{{ !is_null($characters) ? $characters : 0 }}</strong></dd>
					<dt>{{ _('Players online') }}</dt>
						<dd>{{ _('Total players online') }} <strong>{{ $online }}</strong></dd>
					<dt>{{ _('Created accounts') }}</dt>
						<dd>{{ _('Total accounts on server') }} <strong>{{ count($accounts) }}</strong></dd>
				</dl>
			</div>

			<div class="client-download">
				<h3>{{ _('Download game client') }}</h3>
				<p><a href="/downloads/wow-1.12.1.7z">World of Warcraft 1.12.1 EN</a></p>

				<h4>{{ _('Extra downloads') }}</h4>
				<p><a href="#">{{ _('Server VirtualBox image') }}</a></p>
			</div>
		</div>
	</div>

@stop
