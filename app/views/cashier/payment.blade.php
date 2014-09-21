@extends('cashier.template')
@section('head')
	{{HTML::style("stylesheets/cashier.css")}}
@stop
@section('content')

	<!-- Main Content -->
	
	<div class="container">
		
		<h2>Cashier</h2>
		<div class="col-md-12">
		{{Form::open(array('url' =>'cashier/accept-payment/' . $bill->id))}}
			<div class="col-md-4">
				<h6>Total Due</h6>
				{{Form::text('due_payment', $bill->total_payment,array('class' => 'form-control', 'id' => 'change', 'readonly' => 'true'))}}
			</div>
			 <div class="col-md-4">
				<h6>Enter Payment</h6>
				{{Form::text('payment','',array('class' => 'form-control', 'id' => 'payment'))}}
			</div>
			<div class="col-md-4">
				<h6>Change</h6>
				{{Form::text('change','',array('class' => 'form-control', 'id' => 'change', 'readonly' => 'true'))}}
			</div>
			<div class="col-md-12">	
				<input type="submit" class="btn btn-primary btn-lg" value="Save">
			</div>
		{{Form::close()}}
		</div>
	</div>
@stop