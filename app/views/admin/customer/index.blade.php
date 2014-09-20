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
		{{Form::open(array('url' => 'admin/account/search'))}}
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
			    <tr class = "normal">
			      <th>#</th>
			      <th>Account Number</th>
			      <th>Meter Number</th>
			      <th>First Name</th>
			      <th>Last Name</th>
			      <th>Brgy</th>
			      <th>Status</th>
			      <th>Billing Address</th>
			      <th>Change Status</th>
			      <th>Edit Information</th>
			    </tr>
			  </thead>
			  <tbody>
			  @foreach($accounts as $account)
			    <tr>
			      <td>{{$account->id}}</td>
			      <td>{{$account->account_number}}</td>
			      <td>{{$account->meter_number}}</td>
			      <td>{{$account->consumer()->first()->first_name}}</td>
			      <td>{{$account->consumer()->first()->last_name}}</td>
			      <td>{{$account->routes()->first()->route_name}}</td>
			      <td>
			      	@if($account->status == 1)
						<p class = "ok">Connected</p>
			      	@else
						<p class = "error">Disconnected</p>
			      	@endif
			      </td>
			      <td>{{$account->billing_address}}</td>
			      <td>{{HTML::link('admin/change-connection-status','Change Status',array('style' => 'color:green'))}}</td>
			      <td>{{HTML::link('admin/edit-information','Edit Information',array('style' => 'color:green'))}}</td>
			    </tr>
			   @endforeach
			  </tbody>
			</table>
			{{$accounts->links()}}
		</div>
	</div>
@stop