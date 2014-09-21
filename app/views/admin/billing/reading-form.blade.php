@extends('admin.template')
@section('content')
	<div class="container">
		<div class="row billing-title">
			<div class="col-md-12 column">
				<h2>Enter Reading</h2>
			</div>
		</div>
		<div class="row">
		</div>
		<div class="row">
			<div class="dtBox">
			{{Form::open(array('url' => 'admin/billing/' . $id))}}

					<div class="error">{{$errors->first('new_reading')}}</div>
					{{Form::label('new_reading','New Reading')}}
					{{Form::text('new_reading')}}
					
					<div class="error">{{$errors->first('start_date')}}</div>
					{{Form::label('start_date','Reading From: ')}}
					{{Form::text('start_date','',array('class' => 'datepicker'))}}
					
					<div class="error">{{$errors->first('end_date')}}</div>
					{{Form::label('end_date','Reading To:')}}
					{{Form::text('end_date','',array('class' => 'datepicker'))}}
				
					<div class="large-5 columns options-right">
						{{Form::submit('Submit Reading',array('class' => 'tiny button add-customer'))}}
					</div>
			{{Form::close()}}
			</div>
		</div>
	</div>	
@stop