<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bashar^HRM</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->

<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{asset('/frontend/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/frontend/fonts/font-awesome/css/font-awesome.css')}}">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/nivo-lightbox/nivo-lightbox.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/nivo-lightbox/default.css')}}">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Bashar^HRM</a>
      
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
	  @if (Route::has('login'))
		  
		  @auth
		  <li><a href="#contact" class="page-scroll">Donate Bashar</a></li>
        <li><a href="#about" class="page-scroll">Read It First</a></li> 
		  <li><a href="{{ url('/home') }}" class="page-scroll">Home</a></li>
          <li><a href="https://bashar-hrm-app-documentation.000webhostapp.com/" class="page-scroll">Documentation</a></li>
		  <li><a target="_blank" href="https://findbashar.com/" class="page-scroll">Bashar's Portfolio</a></li>
	  @else
                 <li><a href="#contact" class="page-scroll">Donate Bashar</a></li>
        <li><a href="#about" class="page-scroll">Read It First</a></li>       
          <li><a href="{{ route('login') }}" class="page-scroll">Login</a></li>
                        @if (Route::has('register'))
                           <li><a href="{{ route('register') }}" class="page-scroll">Register</a></li> 
					   <li><a href="https://bashar-hrm-app-documentation.000webhostapp.com/" target="_blank" class="page-scroll">Documentation</a></li>
					   <li><a target="_blank" href="https://findbashar.com/" class="page-scroll">Bashar Portfolio</a></li>
						    
                        @endif
						
	  @endauth
	  
	   @endif
        
        
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro" style="background-image: ;background-size:cover;">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1>Welcome To<br>
              Bashar^HRM</h1>
            <p>At first, visit the site tour and see the documentation to know about this application thoroughly.</p>
            <a target="_blank" href="https://www.youtube.com/watch?v=ymBmPUd74WY&t=2067s"  class="btn btn-custom btn-lg page-scroll">Visit Site Tour</a> 
			<a target="_blank" href="https://www.youtube.com/watch?v=7LaOvSN2R4Y&t=871s"  class="btn btn-custom btn-lg page-scroll">Visit API Tour</a>
			<a target="_blank" href="https://findbashar.com"  class="btn btn-custom btn-lg page-scroll">Visit Bashar's Portfolio</a>
			</div>
             </div>
             </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Get Touch Section -->
<div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3>Please make a donation to Bashar</h3>
        <p>Your donation will make it easier for Bashar </p>
      </div>
      <div class="col-xs-12 col-md-4 text-center"><a href="#contact" class="btn btn-custom btn-lg page-scroll">Donate Now</a></div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="{{asset('/frontend/img/darun.jpg')}}" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Read It first</h2>
          <p>At first, read the full documentation and visit the site tour to know about the application thoroughly.<br>
		Some Features (mail, DB bandwidth, cross page simulation, access control management etc.) may currently be disabled or partially enabled by Bashar because of some security and cost related issues because all the features used in this particular appliacation are paid tools. Another thing to reminder is that this application is using mailtrap as mail service provider. So, as it is mentioned before this is fully paid service and this is by default disabled by bashar. To enjoy the full paid features just contact Bashar at 01834663387 or via email smuhammad457@gmail.com and he will enable full features within 20 seconds. Otherwise, you won't be able to see any mail and other specified services in action. If any part of the documentation or project can't be understood, please feel free to contact at the above contact number. Bashar will be very happy to help you. Now, try to donate bashar via paypal as much as you can. It will also help you understand how paypal works and it is pretty simple. Just name the amount and hit the button. It is a great payment gateway integrated with this application. Thank you.  <br><br><a target="_blank" class="btn btn-primary" href="https://bashar-hrm-app-documentation.000webhostapp.com/" role="button">See Full Documentation Here</a><a target="_blank" class="btn btn-primary" style="margin-left: 26px;" href="https://www.youtube.com/watch?v=ymBmPUd74WY&t=2067s" role="button">Visit Site Tour</a><a target="_blank" class="btn btn-primary" style="margin-left: 26px;" href="https://findbashar.com" role="button">Bashar's Portfolio</a></p>
          
          
        </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->

<div class="paginatewrap" style="width:150px;margin:auto;">

</div>
<!-- Gallery Section -->

<!-- Testimonials Section -->

<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Donate Bashar with Paypal</h2>
          <p>Please try to donate as much as you can because it it too easy to donate via paypal and it will make you familiar with paypal payment gateway</p>
        </div>
		@if(session('status'))
					 <div class="alert alert-success">
				 {{ session('status')}}
				 </div>
				 @endif
		         
        <form name="sentMessage" method="POST" id="payment-form"  action="{{url('/paypal')}}" >
		{{ csrf_field() }}
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Enter amount in $$"  name="amount" required>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            
          </div>
          
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Donate with PayPal</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Address</span>Ashuganj, Brahmanbaria<br>
          Brahmanbaria</p>
      </div>
      <div class="contact-item">
        <p><span>Phone</span>01834663387</p>
      </div>
      <div class="contact-item">
        <p><span>Email</span> smuhammad457@gmail.com</p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p><span class="copyright">Copyright &copy;All rights reserved by  <a style="color:blue" target="_blank" href="https://findbashar.com/">Bashar</a></span></p>
  </div>
</div>
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
<script type="text/javascript" src="{{asset('/frontend/js/jquery.1.11.1.js')}}"></script> 
<script type="text/javascript" src="{{asset('/frontend/js/bootstrap.js')}}"></script> 
<script type="text/javascript" src="{{asset('/frontend/js/SmoothScroll.js')}}"></script> 
<script type="text/javascript" src="{{asset('/frontend/js/nivo-lightbox.js')}}"></script> 
<script type="text/javascript" src="{{asset('/frontend/js/jqBootstrapValidation.js')}}"></script> 

<script type="text/javascript" src="{{asset('/frontend/js/main.js')}}"></script>
</body>
</html>