@extends('admin.template')

@section('head')
	{{HTML::style('stylesheets/user-maintenance.css')}}
@stop  

@section('content')
	<div class="container">
		<div class="row billing-title">
			<div class="col-md-12 column">
				<h2>Customer Enrollment</h2>
			</div>
		</div>
		@if(Session::has('message'))
			<div class="row billing-title">
				<div class="col-md-12 column">
					<p class="notification">{{Session::get('message')}}</p>
				</div>
			</div>
		@endif
		<div class="row">
		{{Form::open(array('url' => 'admin/search-customer'))}}
			<div class="col-md-7 options-left">
				<form role="form" action="">
					<div class="form-group">
						<div class="col-md-9">
							<form role="form">
							  <div class="form-group">
							    <div class="input-group">
							    	<div class="input-group-addon"><i class="fa fa-search"></i></div>
							    	{{Form::text('search_key','',array('class' => 'form-control','id' => 'search-user-logs', 'placeholder' => 'Search'))}}
							    </div>
							  </div>
							</form>
						</div>
						<div class="col-md-3 search-btn-container">
								{{Form::submit('Search',array('class' => 'btn btn-primary'))}}
						</div>
					</div>
				</div>
			{{Form::close()}}
		</div>

		<div class="row">
			<table class="responsive">
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>Username</th>
			      <th>First Name</th>
			      <th>Last Name</th>
			      <th>Contact Number</th>
			      <th>Status</th>
			      <th>Location/District</th>
			      <th>Route/Brgy</th>
			      <th>Deactivate</th>
			    </tr>
			  </thead>
			  <tbody>
			  @foreach($users as $user)
			    <tr>
			      <td>{{$user->id}}</td>
			      <td>{{$user->username}}</td>
			      <td>{{$user->first_name}}</td>
			      <td>{{$user->last_name}}</td>
			      <td>{{$user->contact_number}}</td>
			      <td>
			      	@if($user->activated == 1)
			      		Connected
			      	@else
			      		Disconnected
			      	@endif
			      </td>
			      <td>
			      	@foreach($user->locations as $location)	
						{{$location->location_name}}
			      	@endforeach
			      </td>
			      <td>
			      	@foreach($user->routes as $route)
						{{$route->route_name}}
			      	@endforeach
			      </td>
			      <td>
					@if($user->activated == 1)
			      		{{HTML::link('admin/activation-user/' . $user->id, 'Deactivate', array('style' => 'color:green'))}}
			      	@else
			      		{{HTML::link('admin/activation-user/' . $user->id, 'Activate', array('style' => 'color:green'))}}
			      	@endif
			      </td>
			    </tr>
			   @endforeach
			  </tbody>
			</table>
			{{$users->links()}}
		</div>
	</div>
@stop