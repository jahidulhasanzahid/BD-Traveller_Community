@extends('layouts.app')

@section('content')
<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="page-title">
                            <h1>Register</h1>
                        </div><!-- /.page-title -->

                        <form method="post" action="{{ route('register') }}">
                        @csrf

                            <div class="form-group">
                                <label for="login-form-first-name">First name</label>
                                <input id="login-form-first-name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="login-form-email">E-mail</label>
                                <input id="login-form-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="login-form-last-name">Country</label>
                                <input id="login-form-last-name" type="text" class="form-control @error('country') is-invalid @enderror" name="country" required autocomplete="new-country">
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="login-form-last-name">Phone</label>
                                <input id="login-form-last-name" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="new-phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="login-form-password">Password</label>
                                <input id="login-form-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label for="login-form-password-retype">Retype password</label>
                                <input id="login-form-password-retype" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div><!-- /.form-group -->

                            <button type="submit" class="btn btn-primary pull-right">Register</button>
                        </form>
                    </div><!-- /.col-sm-4 -->
                </div><!-- /.row -->
            </div><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->

@endsection
