@extends('admin.template')
@section('head')
	{{HTML::style("stylesheets/cashier.css")}}
@stop
@section('content')

	<!-- Main Content -->
	
	<div class="container">
		
		<h2>Cashier</h2>
		<div class="col-md-12">
			<div class="col-md-12">
				<h6>Account Number</h6>
				{{Form::text('account_number','',array('class' => 'form-control'))}}
			</div>
			<div class="col-md-12">
				<input type="submit" class="btn btn-primary" value="Search">
			</div>
			<div class="col-md-12">
				<h6>OEBR</h6>
				{{Form::text('oebr','',array('class' => 'form-control'))}}
			</div>
			<!--
			<div class="col-md-12">
				<input type="submit" class="btn btn-primary" value="Search">
			</div>-->

			<div class="col-md-4">
				<h6>Last Name</h6>
				<input type="text" class="form-control">	
			</div>

			<div class="col-md-4">
				<h6>First Name</h6>
				<input type="text" class="form-control">	
			</div>

			<div class="col-md-4">
				<h6>Middle Name</h6>
				<input type="text" class="form-control">	
			</div>
				
			<div class="col-md-12">
				<h6>Address</h6>
				<input type="text" class="form-control">
			</div>
			
			<div class="col-md-4">
				<h6>Amount</h6>
				<input type="text" class="form-control">	
			</div>

			<div class="col-md-4">
				<h6>Enter Payment</h6>
				<input type="text" class="form-control">	
			</div>

			<div class="col-md-4">
				<h6>Change</h6>
				<input type="text" class="form-control">	
			</div>
			
			<div class="col-md-12">	
				<input type="submit" class="btn btn-primary btn-lg" value="Save">
			</div>
		</div>
	</div>
@stop