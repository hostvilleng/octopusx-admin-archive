@extends('layouts.app')
@section('title', 'Login')
@section('body_content_main')
    <div class="container">
        <div class="row">
            <div class="col col-login mx-auto">
                <div class="text-center mb-6">
                    <img src="{{cdn('favicon_io/android-chrome-512x512.png')}}" class="h-9" alt="">
                </div>
                <form class="card" action="{{route('register')}}" method="post">
                    @csrf
                    <div class="card-body p-6">
                        <div class="card-title">Create new account</div>
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" name="email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" name="password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" />
                                <span class="custom-control-label">Agree the <a href=".">terms and policy</a></span>
                            </label>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block">Create new account</button>
                        </div>
                    </div>
                </form>
                <div class="text-center text-muted">
                    Already have account? <a href="{{route('login')}}">Sign in</a>
                </div>
            </div>
        </div>
    </div>
@endsection
