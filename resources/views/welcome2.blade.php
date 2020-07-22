<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to HRM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Welcome to HRM
					@if(session('success'))
					  <p>{{session('success')}}</p>
					@endif
					@if(session('error'))
					  <p>{{session('error')}}</p>
						  
					@endif
					{{session()->forget('success')}}
					
                </div>
            <form style="display:none" action="{{url('/intervention')}}" method="POST" enctype="multipart/form-data">
			@csrf
			     <input type="file" name="image" />
				 <input type="submit" value="submit" />
			</form>
			<form style="display:none" class="w3-container w3-display-middle w3-card-4 " method="POST" id="payment-form"  action="{{url('/paypal')}}">
		  {{ csrf_field() }}
		  <h2 class="w3-text-blue">Payment Form</h2>
		  <p>Demo PayPal form - Integrating paypal in laravel</p>
		  <p>      
		  <label class="w3-text-blue"><b>Enter Amount</b></label>
		  <input class="w3-input w3-border" name="amount" type="text"></p>      
		  <button class="w3-btn w3-blue">Pay with PayPal</button></p>
</form>

                
            </div>
        </div>
		<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c778111a726ff2eea59d95d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </body>
</html>
