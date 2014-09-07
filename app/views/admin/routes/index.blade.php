@extends('admin.template')

@section('head')
	{{HTML::style('stylesheets/user-maintenance.css')}}
@stop  

@section('content')
	<div class="container">
		<div class="row billing-title">
			<div class="col-md-12 column">
				<h2>Location Setup</h2>
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
		{{Form::open(array('url' => 'admin/route/search'))}}
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
			      <th>Route Code</th>
			      <th>Route Name</th>
			      <th>District</th>
			      <th>Edit</th>
			    </tr>
			  </thead>
			  <tbody>
			  @foreach($routes as $route)
			    <tr>
			      <td>{{$route->id}}</td>
			      <td>{{$route->route_code}}</td>
			      <td>{{$route->route_name}}</td>
			      <td>{{$route->location()->first()->location_name}}</td>
			      <td>{{HTML::link('admin/edit-user/' . $route->id, 'Edit', array('style' => 'color:green'))}}</td>
			    </tr>
			   @endforeach
			  </tbody>
			</table>
			{{$routes->links()}}
		</div>
	</div>
@stop