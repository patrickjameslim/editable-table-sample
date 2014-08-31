@extends('admin.template')

@section('head')
	{{HTML::style('stylesheets/wheeling-rates.css')}}
@stop

@section('content')
	<!-- Main Content -->

	<div class="container">
		{{Form::model($rates, array('url' => 'admin/wheeling-rates','role' => 'form'))}}	
		<div class="col-md-12">
			<h2>Wheeling Rates</h2>
		</div>
		
		<div class="col-md-12">
			<h5>CHARGES</h5>
			
			<div class="col-md-4">
				<h6>Generation System Charge</h6>
				<div class="error">{{$errors->first('generation_system_charge')}}</div>
				{{Form::text('generation_system_charge',$rates->generation_system_charge,array('class' => 'form-control'))}}
				<!--<input type="text" class="form-control" value="6.1234"/>-->
			</div>

			<div class="col-md-4">
				<h6>Transmission System Charge</h6>
				{{Form::text('transmission_system_charge',$rates->transmission_system_charge,array('class' => 'form-control'))}}
			</div>

			<div class="col-md-4">
				<h6>System Loss Charge</h6>
				{{Form::text('system_loss_charge',$rates->system_loss_charge,array('class' => 'form-control'))}}
			</div>
		</div>
		<div class="col-md-12">
			
			<div class="col-md-4">
				<h6>Distribution System Charge</h6>
				{{Form::text('dist_system_charge',$rates->dist_system_charge,array('class' => 'form-control'))}}
			</div>

			<div class="col-md-4">
				<h6>Retail End User Charge</h6>
				{{Form::text('retail_end_user_charge',$rates->retail_end_user_charge,array('class' => 'form-control'))}}
			</div>

			<div class="col-md-4">
				<h6>Retail Customer Charge</h6>
				{{Form::text('retail_customer_charge',$rates->retail_customer_charge,array('class' => 'form-control'))}}
			</div>
		</div>
		<div class="col-md-12">
			
			<div class="col-md-4">
				<h6>Life Line Subsidy</h6>
				{{Form::text('lifeline_subsidy',$rates->lifeline_subsidy,array('class' => 'form-control'))}}
			</div>

			<div class="col-md-4">
				<h6>Prv Yrs Adj-Pwr Cost</h6>
				{{Form::text('prev_yrs_adj_pwr_cost',$rates->prev_yrs_adj_pwr_cost,array('class' => 'form-control'))}}
			</div>

			<div class="col-md-4">
				<h6>Contribution for Capex</h6>
				{{Form::text('contribution_for_capex',$rates->contribution_for_capex,array('class' => 'form-control'))}}
			</div>
		</div>


		<div class="col-md-12">
			<h5>Value Added Tax</h5>
			
			<div class="col-md-4">
				<h6>Generation</h6>
				{{Form::text('generation_vat',$rates->generation_vat,array('class' => 'form-control'))}}
			</div>	

			<div class="col-md-4">
				<h6>Transmission</h6>
				{{Form::text('transmission_vat',$rates->transmission_vat,array('class' => 'form-control'))}}	
			</div>

			<div class="col-md-4">
				<h6>System Loss</h6>
				{{Form::text('system_loss_vat',$rates->system_loss_vat,array('class' => 'form-control'))}}	
			</div>
		</div>
		
		<div class="col-md-12">
			
			<div class="col-md-4">
				<h6>Distribution</h6>
				{{Form::text('distribution_vat',$rates->distribution_vat,array('class' => 'form-control'))}}
			</div>	

			<div class="col-md-4">
				<h6>Others</h6>
				{{Form::text('others',$rates->others,array('class' => 'form-control'))}}
			</div>
		</div>
		<div class="col-md-12">
			<h5>Universal Charges</h5>
			
			<div class="col-md-4">
				<h6>Missionary Electrification</h6>
				{{Form::text('missionary_electrificxn',$rates->missionary_electrificxn,array('class' => 'form-control'))}}
			</div>	

			<div class="col-md-4">
				<h6>Environmental Charge</h6>
				{{Form::text('environmental_charge',$rates->environmental_charge,array('class' => 'form-control'))}}
			</div>

			<div class="col-md-4">
				<h6>NPC Stranded Cont. Cost</h6>
				{{Form::text('npc_stranded_cont_cost',$rates->npc_stranded_cont_cost,array('class' => 'form-control'))}}
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-4">
				<h6>Senior Citizen Subsidy</h6>
				{{Form::text('sr_citizen_subsidy',$rates->sr_citizen_subsidy,array('class' => 'form-control'))}}
			</div>
		</div>		
		<div class="col-md-12">
			<input type="submit" class="btn btn-primary btn-lg" value="Save">
		</div>
		{{Form::close()}}
	</div>

@stop