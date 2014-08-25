@extends('admin.template')
@section('head')
	{{HTML::style('stylesheets/report.css')}}
@stop

@section('content')
	<div class="row">
		<div class="large-12 column">
			<h2>Disconnected Bills</h2>
		</div>		
	</div>				
	
	<div class="row report-container">
		<div class="large-12 column report-name">
			<button class="small button">Generate Disconnected Bills</button>
		</div>
	</div>
	
	<div class="row report-container">
			<div class="large-6 columns report-name">
				<button class="small button">Disconnected Bills Report</button>
			</div>
			<div class="large-6 columns report-paremeters">
				<select name="month" class="month">
					<option value="jan">Jan</option>
					<option value="feb">Feb</option>
					<option value="mar">Mar</option>
					<option value="apr">Apr</option>
					<option value="may">May</option>
					<option value="jun">Jun</option>
					<option value="jul">Jul</option>
					<option value="aug">Aug</option>
					<option value="sep">Sep</option>
					<option value="oct">Oct</option>
					<option value="nov">Nov</option>
					<option value="dec">Dec</option>
				</select>
				<select name="year" class="year">
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
				</select>
			</div>
		</div>
@stop