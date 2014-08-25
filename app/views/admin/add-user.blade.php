@extends('admin.template')

@section('content')
	<div class="container">
		<div class="row billing-title">
			<div class="col-md-12 column">
				<h2>Add New User</h2>
			</div>
		</div>
		<div class="row">
			{{Form::open(array('url' => 'admin/user-maintenance'))}}
					{{Form::label('username','Username')}}
					{{Form::text('username','')}}
					{{Form::label('password','Password')}}
					{{Form::password('password')}}
					{{Form::label('email','Email Address')}}
					{{Form::email('email')}}
					{{Form::label('first_name','First Name')}}
					{{Form::text('first_name','')}}
					{{Form::label('last_name','Last Name')}}
					{{Form::text('last_name','')}}
					{{Form::label('role','Role')}}
					{{Form::select('role',$roles)}}
					<div class="large-5 columns options-right">
						{{Form::submit('Add User',array('class' => 'tiny button add-customer'))}}
					</div>
			{{Form::close()}}
		</div>
	</div>	
@stop