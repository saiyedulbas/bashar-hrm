<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('we')</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
	
	
	<link href="{{asset('/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('/css/datepicker3.css')}}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

	<link href="{{asset('/css/styles.css')}}" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
</head>
<body>

	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	@auth
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
				
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li class="@yield('home')" ><a href="{{url('/home')}}"><em class="fa fa-dashboard">&nbsp;</em> {{__('Dashboard ')}}</a></li>
			<li class="@yield('department')"><a href="{{route('designation.index')}}"><em class="fa fa-dashboard">&nbsp;</em> {{__('Add department')}}</a></li>
			<li class="@yield('employee')"><a href="{{route('employee.index')}}"><em class="fa fa-dashboard">&nbsp;</em> {{__('Add employee')}}</a></li>
			<li style="width:200px" class="@yield('expense')"><a href="{{route('expense.index')}}"><em class="fa fa-dashboard">&nbsp;</em> {{__('Expense')}}</a></li>
			<li style="width:200px" class="@yield('notice')"><a href="{{url('/addnotice')}}"><em class="fa fa-dashboard">&nbsp;</em> {{__('Notice')}}</a></li>
			<li style="width:200px" class="@yield('attendance')"><a href="{{url('/attendance')}}"><em class="fa fa-dashboard">&nbsp;</em> {{__('Make Attendance')}}</a></li>
			<li style="width:200px" class="@yield('award')"><a href="{{url('/award')}}"><em class="fa fa-dashboard">&nbsp;</em> {{__('Award')}}</a></li>
			<li class="parent " style="width:100%"><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-cog">&nbsp;</em> {{__('Settings')}} <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"> <em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li class="" ><a class="@yield('email')" href="{{url('/setting/email')}}">
						<span class="fa fa-envelope">&nbsp;</span> Email Settings
					</a></li>
					<li><a class="@yield('language')" href="{{url('/setting/language')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Language Settings
					</a></li>
					<li><a class="@yield('permission')" href="{{url('/permission/setting')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Permission Settings
					</a></li>
				</ul>
			</li>
			
			<br>
			<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><em class="fa fa-power-off">&nbsp;</em>{{ __('Logout') }}</a>
													 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
													 </li>
		</ul>
	</div><!--/.sidebar-->
		@endauth
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{url('/home')}}">
					<em class="fa fa-home"></em>
				</a></li>
				@yield('bread')
			</ol>
		</div><!--/.row-->
		
		<!--/.row-->
		
		
				@yield('content')
			</div><!--/.row-->
		
		
		
			
			
			
		
		<!--/.main-->
	
	<script src="{{asset('/js/jquery-1.11.1.min.js')}}"></script>
	
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('/js/chart.min.js')}}"></script>
	<script src="{{asset('/js/chart-data.js')}}"></script>
	<script src="{{asset('/js/easypiechart.js')}}"></script>
	<script src="{{asset('/js/easypiechart-data.js')}}"></script>
	<script src="{{asset('/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('/js/custom.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};

	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('js/jquery.multifield.min.js')}}"></script>
	 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	 
	 
	 
	 
		<main class="py-4">
            @yield('content2')
        </main>
		
        
</body>
</html>