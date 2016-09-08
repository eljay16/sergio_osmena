@extends('layouts.admin-master-layout')

@section('body')
<p>{{$admin->info}}</p>
<div class="row">	
	<div class="container">	
		<div class="col-md-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Create a student account</h3>
				</div>
				<div class="panel-body">
					<div class="errorLoginContainer">
						@if ($errors->first('error') != null)
						{{ $errors->first('error') }}
						@endif
					</div>
					{{ Form::open(array('route' => 'cms.store','id'=>'adminLogin', 'class' => '')) }}
					<label for="firstname">Fullname</label>
					<div class="input-group hidden-md hidden-sm hidden-xs">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						{{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						{{ Form::text('middle', null, array('class'=>'form-control', 'placeholder'=>'Middle Name')) }}
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						{{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
					</div> 
					<label for="age">Birthdate</label>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						{{ Form::text('birthdate',null, array('class'=>'form-control', 'placeholder'=>'Birthdate','id'=>'birthdate')) }}
					</div>
					<br>
					<div class="btn-group">
						<input type="submit" class="btn btn-primary">
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}" >
					{{ Form::close() }}
				</div>
				<div class="panel-footer">	

				</div>
			</div>

		</div>
	</div>
</div>
@endsection

