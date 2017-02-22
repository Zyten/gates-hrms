@extends('layouts.auth')

@section('content')
	<p class="text-xs-center">LOGIN TO CONTINUE</p>
	<form id="login-form" action="{{ route('auth.login') }}" method="POST" novalidate="">
		{{ csrf_field() }}
		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="username">Username</label> 
			<input type="text" class="form-control underlined" name="email" id="username" placeholder="Your email" value="{{ old('email') }}" required/> 
			
			@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
			@endif
		</div>
		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"> 
			<label for="password">Password</label>
			<input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password" required />
		
			@if ($errors->has('password'))
				<span class="help-block">
					<strong>{{ $errors->first('password') }}</strong>
				</span>
			@endif
		</div>
		<div class="form-group"> 
			<label for="remember">
				<input class="checkbox" id="remember" type="checkbox"> 
				<span>Remember me</span>
			</label> 
			<a href="{{ route('auth.password.reset') }}" class="forgot-btn pull-right">Forgot password?</a>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-block btn-primary">Login</button>
		</div>
		<div class="form-group">
			<p class="text-muted text-xs-center">Do not have an account? <a href="{{ route('auth.register') }}">Sign Up!</a></p>
		</div>
	</form>
@endsection
