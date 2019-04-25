<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-fav.png')}}">
    <title>Login Admin</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/material-design-icons/css/material-design-iconic-font.min.css')}}"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" type="text/css"/>
  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading"><img src="assets/img/logo-xx.png" alt="logo" width="102" height="27" class="logo-img"><span class="splash-description">Please enter your user information.</span></div>
              <div class="panel-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                        <div class="col-md-12">
                            <input id="password" placeholder="{{ __('Password') }}" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>
                            <div class="form-group row login-tools">
                              <div class="col-xs-6 login-remember">
                                <div class="be-checkbox">
                                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <label for="remember">{{ __('Remember Me') }}</label>
                                </div>
                              </div>
                              @if (Route::has('password.request'))
                              <div class="col-xs-6 login-forgot-password"><a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></div>
                            @endif
                            </div>
                            <div class="form-group login-submit">
                              <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">{{ __('Login') }}</button>
                            </div>
                    </div>
                </form>
              </div>
            </div>
            <div class="splash-footer"><span>Don't have an account? <a href="#">Sign Up</a></span></div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('assets/lib/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/main.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });
      
    </script>
  </body>
</html>