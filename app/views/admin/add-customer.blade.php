@extends('admin.template')
	@section('head')
		{{HTML::style("stylesheets/add-customer.css")}}
  	@stop
	
	@section('content')
		<div class="row">
			<div class="large-12 column">
				<h2>Customer Information</h2>
			</div>
		</div>		
		
		<div class="row">
			<div class="large-4 columns">
				<label for="lname">Last Name</label>
				<input type="text" name="fname">
			</div>
			<div class="large-4 columns">
				<label for="fname">First Name</label>
				<input type="text" name="fname">
			</div>
			<div class="large-4 columns">
				<label for="mname">Middle Name</label>
				<input type="text" name="fname">	
			</div>
		</div>

		<div class="row">
			<div class="large-8 column">
				<label for="address">Address</label>
				<input type="text" name="address">
			</div>
		</div>

		<div class="row">
			<div class="large-4 columns">
				<label for="lname">Book Number</label>
				<input type="text" name="book-num">
			</div>
			<div class="large-4 columns">
				<label for="fname">Seq. Number</label>
				<input type="text" name="seq-num">
			</div>
			<div class="large-4 columns">
				<label for="area">Area</label>
				<select name="area" id="area">
						<option value="">Area 1</option>
						<option value="">Area 2</option>
						<option value="">Area 3</option>
						<option value="">Area 4</option>
						<option value="">Area 5</option>
				</select>	
			</div>
		</div>

		<div class="row">
			<div class="large-12 column">
				<button class="small button">Save</button>
			</div>
		</div>
	@stop
