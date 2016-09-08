<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Sergio Osmena</title>

	<!-- Bootstrap -->
	<link href="{{URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}"  rel="stylesheet" type="text/css">
	<link href="{{URL::asset('bower_components/bootstrap-sidebar/dist/css/sidebar.css')}}" rel="stylesheet" type="text/css">
	
	<link href="{{URL::asset('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav id="mainNavbar" class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" data-toggle="sidebar" data-target=".sidebar">
						<span style="font-size:1.5em" class="fa fa-bars vcenter" aria-hidden="true"></span> <span style="padding-left:5px"><img src="{{URL::asset('images/so.png')}}" style="height:50px;width:50px"></span> <span style="font-size: 15px;">Sergio Osmena Highschool</span>
					</a>
				</div>
			</div>
		</nav>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-7 col-sm-3 col-md-3 sidebar sidebar-left sidebar-animate sidebar-open">
					@section('sidebar-content')
					<ul class="nav navbar-stacked">
						<li style="border:none;">
							<div class="row">
								<div class="col-md-3">
									<img src="{{URL::asset('images/placeholder.png')}}" class="img-responsive img-circle center" style="max-height:100px;max-width:100px">
								</div>
								<div class="col-md-9">
									<h3 style="text-align:center;">Welcome {{$admin->info[0]->admin_info_lastname}}, {{$admin->info[0]->admin_info_firstname}}</h3>
								</div>
							</div>
						</li>
						<li class="{{ Request::is('admin/home/students/*') ? 'active' : '' }}">
							<a data-toggle="collapse" class="collapsed" href="#students""><i class="fa fa-home" aria-hidden="true"></i>Students <i class="fa fa-caret-right indicator" aria-hidden="true"></i></a>
						</li>
						<div id="students" class="panel-collapse collapse">
							<h4 class="{{ Request::is('admin/home/students/view') ? 'highlight' : '' }}"><a href="{{URL::route('view-students')}}">View Students Account</a></h4>
							<h4 class="{{ Request::is('admin/home/students/create') ? 'highlight' : '' }}"><a href="{{URL::route('create-students')}}">Create Student Account</a></h4>
							<h4 class="{{ Request::is('admin/home/students/update') ? 'highlight' : '' }}"><a href="{{URL::route('update-students')}}">Update Student Account</a></h4>
						</div>

						<li class="{{ Request::is('qwerty') ? 'active' : '' }}">
							<a data-toggle="collapse" class="collapsed" href="#"><i class="fa fa-bullhorn" aria-hidden="true"></i>Section </a>
						</li>

						<li class="{{ Request::is('qwerty') ? 'active' : '' }}">
							<a data-toggle="collapse" class="collapsed" href="#add"><i class="fa fa-plus" aria-hidden="true"></i> Teachers <i class="fa fa-caret-right indicator" aria-hidden="true"></i></a>
						</li>
						<div id="add" class="panel-collapse collapse">
							<a href="">Edit Profile</a>

						</div>
						<li class="{{ Request::is('qwerty') ? 'active' : '' }}">
							<a data-toggle="collapse" class="collapsed" href="#edit"><i class="fa fa-pencil" aria-hidden="true"></i> Post Announcement <i class="fa fa-caret-right indicator" aria-hidden="true"></i></a></a>
						</li>

						<li class="{{ Request::is('qwerty') ? 'active' : '' }}">
							<a data-toggle="collapse" class="collapsed" href="#delete"><i class="fa fa-minus" aria-hidden="true"></i> Manage pages <i class="fa fa-caret-right indicator" aria-hidden="true"></i></a></a>
						</li>
						<div id="delete" class="panel-collapse collapse">
							<a href="">Edit Profile</a>
						</div>

						<li><a href="{{URL::route('logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
					</ul>
					@show
				</div>
				<div id = "mainContent" class="main col-md-9 col-md-offset-3" style="margin-top:20px;">
					@yield('body')
				</div>
			</div>
		</div>		
		<footer>
			© 2016 Sergio Osmenia High School All Rights Reserved
<!-- 			<ul>
				<li>Mission and Vision</li>
				<li>Contact</li>	
				<li>Contact</li>
			</ul> -->
		</footer>
		<script type="text/javascript" src="{{URL::asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('bower_components/moment/min/moment.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('bower_components/jquery-validation/dist/jquery.validate.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('bower_components/bootstrap-sidebar/dist/js/sidebar.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>
	</body>
	</html>
