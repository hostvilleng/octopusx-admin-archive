@extends('layouts.app')
@section('title', 'Login')
@section('body_content_main')
    <div class="container">

        <div class="row">
            <div class="col col-login mx-auto">
                <div class="text-center mb-6">
                    <img src="{{cdn('favicon_io/android-chrome-512x512.png')}}" class="h-9" alt="">
                </div>
               @error('email')
                    <div class="alert alert-danger" role="alert">
                        <i class="fe fe-alert-triangle"></i>
                       Your Credentials were  not Found
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                    </div>
                @enderror
                @error('password')
                <div class="alert alert-danger" role="alert">
                    <i class="fe fe-alert-triangle"></i>
                   Password Required
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                </div>
                @enderror
                <form class="card" action="{{route('login')}}" method="post">
                    @csrf
                    <div class="card-body p-6">
                        <div class="card-title">Login to your account</div>
                        <div class="form-group">
                            <label class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label class="form-label">
                                Password
                                @if (Route::has('password.request'))
                                    <a class="float-right small" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="remember"/>
                                <span class="custom-control-label">Remember me</span>
                            </label>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </div>
                    </div>
                </form>
                <div class="text-center text-muted">
                    Don't have account yet? <a href="{{route('register')}}">Sign up</a>
                </div>
            </div>
        </div>
    </div>
@endsection
