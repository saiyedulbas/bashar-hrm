<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to HRM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    <body style="background-image:url({{asset('/img/pac1.jpg')}});background-repeat: no-repeat;background-size:100%">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
						<a href="{{ route('register') }}">Documentation</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                            <a href="{{ route('register') }}">Documentation</a>
						    
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content" >
                <div class="title m-b-md">
				<button class="btn btn-success">Welcome to StandardHRM</button>
                    
					@if(session('success'))
					  <p>{{session('success')}}</p>
					@endif
					@if(session('error'))
					  <p>{{session('error')}}</p>
						  
					@endif
					{{session()->forget('success')}}
					
                </div>
				<div class="card" style="width:50%; margin:auto;float:left;height:480px">
  <div class="card-header">
  <button class="btn btn-danger">Donate Bashar with PayPal</button>
    
  </div>
  <div class="card-body">
    <form method="POST" id="payment-form"  action="{{url('/paypal')}}">
		  {{ csrf_field() }}
		  <div class="form-group">
		  <h2>Donation Form</h2>
		  <p>Paypal Integrated In StandardHRM</p>
    <label for="exampleInputEmail1">Enter Amount In $$</label>
    <input type="text" name="amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter amount in $$" required>
    <button type="submit" class="btn btn-primary">Donate with PayPal</button>
  </div>  
</form>
  </div>
</div>
            
			<div class="card" style="width:50%; margin:auto">
  <div class="card-header">
  <button class="btn btn-danger">Please read it first</button>
    
  </div>
  <div class="card-body">
        At first, read the full documentation to know about the application thoroughly.<br>
		Some Features (mail, DB bandwidth, cross page simulation, access control management etc.) may currently be disabled or partially enabled by Bashar because of some security and cost related issues because all the features used in this particular appliacation are paid tools. Another thing to reminder is that this application is using mailtrap as mail service provider. So, as it is mentioned before this is fully paid service and this is by default disabled by bashar. To enjoy the full paid features just contact Bashar at 01834663387 or via email smuhammad457@gmail.com and he will enable full features within 20 seconds. Otherwise, you won't be able to see any mail and other specified services in action. If any part of the documentation or project can't be understood, please feel free to contact at the above contact number. Bashar will be very happy to help you. Now, try to donate bashar via paypal as much as you can. It will also help you understand how paypal works and it is pretty simple. Just name the amount and hit the button. It is a great payment gateway integrated with this application. Thank you.  <br><a target="_blank" class="btn btn-primary" href="" role="button">See Full Documentation Here</a>
  </div>
</div>


                
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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--End of Tawk.to Script-->
    </body>
</html>
