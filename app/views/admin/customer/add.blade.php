@extends('admin.template')
@section('content')
	<div class="container">
		<div class="row billing-title">
			<div class="col-md-12 column">
				<h2>Add New Account</h2>
			</div>
		</div>
		<div class="row">
		</div>
		<div class="row">
			{{Form::open(array('url' => 'admin/account'))}}

					<div class="error">{{$errors->first('account_number')}}</div>
					{{Form::label('account_number','Account Number')}}
					{{Form::text('account_number',Input::old('account_number'))}}
					
					<div class="error">{{$errors->first('meter_number')}}</div>
					{{Form::label('meter_number','Meter Number')}}
					{{Form::text('meter_number')}}
					
					<div class="error">{{$errors->first('billing_address')}}</div>
					{{Form::label('billing_address','Billing Address')}}
					{{Form::text('billing_address')}}
					
					{{Form::label('route_id','Brgy')}}
					{{Form::select('route_id',$routes)}}
				
					<div class="large-5 columns options-right">
						{{Form::submit('Add Account',array('class' => 'tiny button add-customer'))}}
					</div>
			{{Form::close()}}
		</div>
	</div>	
@stop