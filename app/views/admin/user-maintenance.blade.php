@extends('admin.template')

@section('head')
	{{HTML::style('stylesheets/user-maintenance.css')}}
@stop  

@section('content')
<div class="container">
		<div class="row billing-title">
			<div class="col-md-12 column">
				<h2>User Maintenance</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-7 options-left">
				<form role="form" action="">
					<div class="form-group">
						<div class="col-md-9">
							<form role="form">
							  <div class="form-group">
							    <div class="input-group">
							    	<div class="input-group-addon"><i class="fa fa-search"></i></div>
							    	<input type="text" class="form-control" id="search-user-logs" placeholder="Search">
							    </div>
							  </div>
							</form>
						</div>
						<div class="col-md-3 search-btn-container">
							<input class="btn btn-primary" type="submit" value="Search">
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-5 options-right">
				<button class="btn btn-primary"><a href="{{URL::to('admin/add-user')}}"><i class="fa fa-plus"></i> Add Customer</a></button>
			</div>
		</div>

		<div class="row">
			<table class="responsive">
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>Username</th>
			      <th>Email Address</th>
			      <th>First Name</th>
			      <th>Last Name</th>
			      <th>Last Login</th>
			      <th>Role</th>
			      <th>Edit</th>
			      <th>Delete</th>
			    </tr>
			  </thead>
			  <tbody>
			  @foreach($users as $user)
			    <tr>
			      <td>{{$user->id}}</td>
			      <td>{{$user->username}}</td>
			      <td>{{$user->email}}</td>
			      <td>{{$user->first_name}}</td>
			      <td>{{$user->last_name}}</td>
			      <td>{{$user->last_login}}</td>
			      <td>{{Sentry::findUserByID($user->id)->getGroups()[0]->name}}</td>
			      <td><a href = "" style="color:green">Edit</a></td>
			      <td><a href = "" style="color:green">Delete</a></td>
			    </tr>
			   @endforeach
			  </tbody>
			</table>
			{{$users->links()}}
		</div>
	</div>
@stop