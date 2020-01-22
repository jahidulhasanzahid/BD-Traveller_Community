@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4">
                            <div class="page-title">
                                <h1>Password Reset...</h1>
                            </div><!-- /.page-title -->

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="post" action="{{ route('password.email') }}">
                            @csrf
                                <div class="form-group">
                                    <label for="login-form-email">E-mail</label>
                                    <input id="login-form-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div><!-- /.form-group -->
                                <button type="submit" class="btn btn-primary pull-right">{{ __('Send Password Reset Link') }}</button>
                            </form>
                        </div><!-- /.col-sm-4 -->
                    </div><!-- /.row -->
                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

@endsection
