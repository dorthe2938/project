@extends('layouts.app')

@section('content')

<style>
    
    .row {
        margin: 0;
    }
    .loginPage h2 {
        text-align:center;
    }
    
    .loginPage {
        width: 80%;
        margin: 100px auto;
    }
    
    .form-control:focus {
        border-color: #f39200;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(243,146,0,.6);
    }
    
    .btnLogin {
        color: #fff;
        background-color: #f39200;
        width: 100%;
    }
    
</style>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="loginPage">
                <h2>Login</h2>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input placeholder="Adgangskode" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btnLogin">
                                    Login
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
