@extends('backend.layouts.auth')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5 col-md-6">
        <div class="card mb-0 h-auto">
            <div class="card-body">
                <div class="text-center mb-3">
                    <a href="index.html"><img class="logo-auth" src="{{asset('/')}}omah/images/logo-full.png" alt=""></a>
                </div>
                <h4 class="text-center mb-4">Sign in your account</h4>
                @if(Session::has('error'))
                    <div class="alert alert-danger text-center">{{Session::get('error')}}</div>
                @endif
                <form action="{{route('admin.authenticate')}}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Enter username" id="username" name="username" value="{{ old('username') }}" required>
                        @error('username')<div class="text-danger">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group mb-3 mb-sm-4">
                        <label class="form-label" for="dz-password">Password</label>
                        <div class="position-relative">
                            <div class="position-relative">
                                <input type="password" id="dz-password" class="form-control @error('password') is-invalid @enderror" placeholder="*******" name="password" required>
                                <span class="show-pass eye">
                                    <i class="fa fa-eye-slash"></i>
                                    <i class="fa fa-eye"></i>
                                </span>
                            </div>
                            @error('password')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
