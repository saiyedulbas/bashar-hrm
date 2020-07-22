<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('/css/styles.css')}}" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body style="background-image:url({{asset('/img/pac1.jpg')}});background-repeat: no-repeat;background-size:100%">
	<div class="row" style="">
	<div class="container">
	<div  style="float:left;margin-left: 7%;
margin-right: 10%;" >
			<div class="login-panel panel panel-default" style="float:left;width:118%">
				<div class="panel-heading">{{ __('Login') }}</div>
				<div class="panel-body">
					<form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
					
					<a href="{{route('register')}}">Want to register?</a>
					
					<hr>
					<a href="{{url('login/github')}}" class="btn btn-success">Login with Github</a>
					<a href="{{url('login/google')}}" class="btn btn-info">Login with Google</a>
				</div>
			</div>
			
			
			
		</div>
		<div style="width:30%;float:left">
			<div class="login-panel panel panel-default" style="float:left">
				<div class="panel-heading"><button class="btn btn-danger">Pleae read it carefully</button></div>
				<div class="panel-body">
					
					There are many types of user in this particular application. So, by default you have two ways to log yourself in. First way, you can login as default user using our socialite(Github, Google). Second way, you can register yourself in the register page and then you will be logged in automatically. If you wanna login as employee to see the employee interface then after logging in as default user go to the employee section and you will find necessary informations about that. For any query, just contact Bashar at 01834663387or see the documentation and visit site tour. Thank you.
					
				</div>
			</div>
			
			
			
		</div>
	</div>
		<!-- /.col-->
	</div><!-- /.row -->	
	

<script src="{{asset('/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>
