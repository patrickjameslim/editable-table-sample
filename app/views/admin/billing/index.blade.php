@extends('admin.template')
@section('head')
	{{HTML::style("stylesheets/billing.css")}}
@stop
@section('content')
	<div class="container">
		<div class="row billing-title">
			<div class="col-md-12 column">
				<h2>Billing</h2>
			</div>
		</div>

		<div class="row">
				<div class="col-md-7 options-left">
					{{Form::open(array('url' => 'admin/billing/search'))}}
						<div class="form-group">
							<div class="col-md-8">
								{{Form::label('searchKey','Search:')}}
								{{Form::text('searchKey')}}
								<input class="btn btn-primary" type="submit" value="Search">
							</div>
						</div>
					{{Form::close()}}
				</div>
				<div class="col-md-5 options-right">
					<button class="btn btn-primary"><a href="add-customer.html"><i class="fa fa-plus"></i>Enter Reading</a></button>
				</div>
				<!-- <div class="large-6 columns options-right">
					<button class="button tiny">Add Customer</button>
					<label>Page:</label>
					<select name="page" id="page">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					<button class="button tiny">Prev Page</button>
					<button class="button tiny">Next Page</button>
				</div>-->

		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-striped">
					  <thead>
					    <tr>
					      <th>#</th>
					      <th>Meter ID</th>
					      <th>OEBR Number</th>
					      <th>Area</th>
					      <th>Account Number</th>
					      <th>Name</th>
					      <th>Previous</th>
					      <th>Present</th>
					      <th>Due Date</th>
					      <th>Adjust Billing</th>
					    </tr>
					  </thead>
					  <tbody>
					    @foreach($bills as $bill)
							<tr>
								<td>{{$bill->id}}</td>
								<td>{{$bill->account()->first()->meter_number}}</td>
								<td>{{$bill->account()->first()->oebr_number}}</td>
								<td>{{$bill->account()->first()->routes()->first()->route_name}}</td>
								<td>{{$bill->account()->first()->account_number}}</td>
								<td>{{$bill->account()->first()->consumer()->first()->last_name}} , {{$bill->account()->first()->consumer()->first()->first_name}}</td>
								<td>{{$bill->account()->first()->previous_reading}}</td>
								<td>{{$bill->account()->first()->current_reading}}</td>
								<td>{{$bill->due_date}}</td>
								<td>{{HTML::link('admin/adjust-billing'. $bill->id, 'Adjust Billing')}}</td>
							</tr>
					    @endforeach
					  </tbody>
					</table>
				</div>
				
			</div>
		</div>

	</div>
@stop