@extends('layouts.auth')

@section('content')
    <p class="text-xs-center">RESET PASSWORD</p>
    <p class="text-muted text-xs-center"><small>Enter your email address to recover your password.</small></p>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form id="reset-form" action="{{route('auth.password.email')}}" method="POST" novalidate="">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email1">Email</label>
            <input type="email" class="form-control underlined" name="email1" id="email1" placeholder="Your email address" required value="{{ old('email1') }}">

            @if ($errors->has('email1'))
                <span class="help-block">
                    <strong>{{ $errors->first('email1') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">Send Password Reset Link</button>
        </div>
        <div class="form-group clearfix"> 
            <a class="pull-left" href="{{route('auth.login')}}">Return to Login</a> 
            <a class="pull-right" href="{{route('auth.register')}}">Sign Up!</a>
        </div>
    </form>
@endsection
