@extends('layouts.auth')

@section('content')
    <p class="text-xs-center">RESET PASSWORD</p>
    <form id="reset-form-confirm" action="{{ route('auth.password.reset') }}" method="POST" novalidate="">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="username">Username</label> 
            <input type="text" class="form-control underlined" name="username" id="username" placeholder="Your email" value="{{ old('email') }}" required/> 
            
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
         <div class="form-group">
            <label for="new_password">Password</label>
            <div class="row">
                <div class="col-sm-6{{ $errors->has('new_password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control underlined" name="new_password" id="new_password" placeholder="Enter password" required=""> 
                </div>

                @if ($errors->has('new_password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('new_password') }}</strong>
                    </span>
                @endif

                <div class="col-sm-6{{ $errors->has('retype_new_password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control underlined" name="retype_new_password" id="retype_new_password" placeholder="Re-type password" required="">
                </div>

                @if ($errors->has('retype_new_password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('retype_new_password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">Reset Password</button>
        </div>
    </form>
@endsection
