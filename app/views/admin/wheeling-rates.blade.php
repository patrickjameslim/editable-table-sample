@extends('admin.template')

@section('head')
	{{HTML::style('stylesheets/wheeling-rates.css')}}
@stop

@section('content')
	<!-- Main Content -->

	<div class="container">
		<form role="form" action="">	
		<div class="col-md-12">
			<h2>Wheeling Rates</h2>
		</div>
		
		<div class="col-md-12">
			<h5>GENERATION CHARGE</h5>
			
			<div class="col-md-4">
				<h6>System Charge</h6>
				<input type="text" class="form-control" value="6.1234"/>
			</div>

			<div class="col-md-4">
				<h6>Benefits HC</h6>
				<input type="text" class="form-control" value="0.123"/>
			</div>

			<div class="col-md-4">
				<h6>ICERA</h6>
				<input type="text" class="form-control" value="0.123"/>
			</div>
		</div>

		<div class="col-md-12">
			<h5>TRANSMISSION CHARGER</h5>
			
			<div class="col-md-4">
				<h6>Demand Charge</h6>
				<input type="text" class="form-control" value="0.123"/>
			</div>

			<div class="col-md-4">
				<h6>System Change</h6>
				<input type="text" class="form-control" value="0.123"/>
			</div>
		</div>

		<div class="col-md-12">
			<h5>DISTRIBUTION CHARGER</h5>
			
			<div class="col-md-4">
				<h6>Demand Charge</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>	

			<div class="col-md-4">
				<h6>System Charge</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>
		</div>
		
		<div class="col-md-12">
			<h5>SUPPLY CHARGER</h5>
			
			<div class="col-md-4">
				<h6>Retail End-Users</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>	

			<div class="col-md-4">
				<h6>System Charge</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>
		</div>

		<div class="col-md-12">
			<h5>OTHER CHARGES</h5>
			
			<div class="col-md-4">
				<h6>Members Cont 4 CAPEX</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>	

			<div class="col-md-4">
				<h6>Inter-class Subsidy</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>

			<div class="col-md-4">
				<h6>Loan Coordination/KWH</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>

			<div class="col-md-4">
				<h6>Loan Condination/Rebate</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>

			<div class="col-md-4">
				<h6>Loan Condination/Customer</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>

			<div class="col-md-4">
				<h6>Lifeline Subsidy</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>

			<div class="col-md-4">
				<h6>Missionary Elect</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>

			<div class="col-md-4">
				<h6>Environment Charge</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>
		</div>

		<div class="col-md-12">
			<h5>OTHER CHARGES ADJUSTMENTS</h5>
			
			<div class="col-md-4">
				<h6>Power Act Reduction</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>	

			<div class="col-md-4">
				<h6>Interest Rate</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>

			<div class="col-md-4">
				<h6>System Lost Adjustment</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>

			<div class="col-md-4">
				<h6>PPA Adjustment</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>

			<div class="col-md-4">
				<h6>Generation</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>

			<div class="col-md-4">
				<h6>Transmission</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>

			<div class="col-md-4">
				<h6>System Lost Gene</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>

			<div class="col-md-4">
				<h6>System Lost Tran</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>

			<div class="col-md-4">
				<h6>Distribution</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>

			<div class="col-md-4">
				<h6>Others</h6>
				<input type="text" class="form-control" value="0.123"/>	
			</div>
		</div>
			
			<div class="col-md-12">
				<input type="submit" class="btn btn-primary btn-lg" value="Save">
			</div>
		</form>
	</div>

@stop