@extends('layouts.auth')

@section('content')
    <p class="text-xs-center">SIGNUP TO GET INSTANT ACCESS</p>
    @if(Session::has('flash_message'))
        <div class="alert alert-{{Session::get('flash_message')}}">
            <button class="close" data-close="alert"></button>
            <span><center>{{Session::get('flash_message')}}</center></span>
        </div>            
    @endif
    <form id="signup-form" action="{{ route('auth.register') }}" method="POST" novalidate="">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="firstname">Name</label>
            <div class="row">
                <div class="col-sm-12"> <input type="text" class="form-control underlined" name="name" id="name" placeholder="Enter fullname" required="" value="{{ old('name') }}"> </div>
                <!-- <div class="col-sm-6"> <input type="text" class="form-control underlined" name="lastname" id="lastname" placeholder="Enter lastname" required="" value="{{ old('lname') }}"> </div> -->
            </div>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">Email</label> 
            <input type="email" class="form-control underlined" name="email" id="email" placeholder="Enter email address" required="" value="{{ old('email') }}">
        
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">Password</label>
            <div class="row">
                <div class="col-sm-12{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control underlined" name="password" id="password" placeholder="Enter password" required=""> 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" class="form-control underlined" name="password_confirmation" id="password_confirmation" placeholder="Re-type password" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
                </div>
            </div>
        </div>
        <!-- <div class="form-group"> 
            <label for="agree">
                <input class="checkbox" name="agree" id="agree" type="checkbox" required=""> 
                <span>Agree the terms and <a href="#">policy</a></span>
            </label> 
        </div> -->
        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">Sign Up</button> 
        </div>
        <div class="form-group">
            <p class="text-muted text-xs-center">Already have an account? <a href="{{route('auth.login')}}">Login!</a></p>
        </div>
    </form>
@endsection