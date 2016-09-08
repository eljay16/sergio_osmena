@extends('layouts.login-layout')

@section('body')
<div class="container-fluid">
	<div class="row">
		<div id = "mainContent" class="col-md-12">
			<img  style="max-height:150px;" src="{{URL::asset('images/so.png')}}" class="img-responsive center">
			<h2 class="text-center">Sergio Osmeña Sr. Highschool Admin Login Page</h2>
			<div class="col-sm-6 col-md-offset-3 col-sm-offset-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Login</h3>
					</div>
					<div class="panel-body">
						<div class="col-md-6">
							<div class="errorLoginContainer">
								@if ($errors->first('error') != null)
								    {{ $errors->first('error') }}
								@endif
							</div>
							{{ Form::open(array('route' => 'cms.store','id'=>'adminLogin', 'class' => 'loginForm')) }}
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<!-- <input type="text" name="username" id="username" class="form-control" value="{{old('username')}}" placeholder="Admin Username"> -->
								{{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'Admin Username')) }}

							</div>
							<br>
							<div class="input-group">
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Admin Password')) }}
							</div>
							<br>
							<div class="btn-group">
								<input type="submit" class="btn btn-primary">
							</div>
							<input type="hidden" name="_token" value="{{ csrf_token() }}" >
							{{ Form::close() }}
						</div>
						<div class="col-md-6">
							<h3 style="margin-top:0px;">Admin can: </h3>
							<p>
								<span class="fa fa-users"></span>&nbsp<span>Manage Students</strong>
							</p>
							<p>
								<span class="glyphicon glyphicon-user"></span>&nbsp<span>Manage Teachers</strong>
							</p>
							<p>
								<span class="fa fa-bullhorn"></span>&nbsp<span>Post Announcement</strong>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		

@endsection

