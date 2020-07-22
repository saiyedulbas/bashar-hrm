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
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
		
			<div class="login-panel panel panel-default">
				<div class="panel-heading bg-danger" style="background:#f41b1b;color:white">Please read it carefully</div>
				<div class="panel-body">
					Remember, this application is using Mailtrap as mail service provider. So, if you wanna see the mail service working you have to contact Bashar at 01834663387 to give you access to the mailtrap. And, then you will be able to see password reset link in your mail otherwise you won't be able to see any mail service of this application. So, please contact with Bashar at 01834663387. And, he will give you access within 20 seconds. Thank you.
					
				</div>
			</div>
			<div class="login-panel panel panel-default">
				<div class="panel-heading ">{{ __('Change password') }}</div>
				<div class="panel-body">
					<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
					
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="{{asset('/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>
