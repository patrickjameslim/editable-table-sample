@extends('consumer.template')
@section('head')
	{{HTML::style("stylesheets/cashier.css")}}
@stop
@section('content')

	<!-- Main Content -->
	
	<div class="container">
		<h1>Welcome! {{$user->last_name}}, {{$user->first_name}}</h1>
		<h6>SMS Enrollment</h6>
		<div class="col-md-4">
			{{Form::open(array('url' => 'consumer/enroll/'. $id))}}
			<div class="error">{{$errors->first('number')}}</div>
			{{Form::label('number','Ten Digit Number')}}
			{{Form::text('number','',array('maxlength' => '10'))}}
			{{Form::submit('Submit!',array('class' => 'btn btn-primary btn-lg'))}}
		{{Form::close()}}
		</div>
		
		@if(Session::has('message'))
			<div class="row billing-title">
				<div class="col-md-12 column">
					<p class="notification">{{Session::get('message')}}</p>
				</div>
			</div>
		@endif
	</div>
@stop