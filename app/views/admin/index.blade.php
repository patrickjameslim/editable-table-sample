@extends('admin.template')
@section('head')
	{{HTML::style("stylesheets/index.css")}}
@stop

@section('content')
		<div class="container index-container">
			<div class="col-md-8">
					<h3>User Logs</h3>
					
					<div class="col-md-10">
						<form role="form">
						  <div class="form-group">
						    <div class="input-group">
						    	<div class="input-group-addon"><i class="fa fa-search"></i></div>
						    	<input type="text" class="form-control" id="search-user-logs" placeholder="Search">
						    </div>
						  </div>
						</form>	
					</div>
					
					<div class="col-md-2">
						<input type="submit" class="btn btn-primary" value="Search">
					</div>

					
					<div class="table-responsive">
							<table class="table table-striped">
							<thead>
								<th>Log Date</th>						
								<th>Last Name</th>						
								<th>First Name</th>
								<th>Username</th>
								<th>In</th>
								<th>Out</th>
								<th>Status</th>
							</thead>
							<tbody>
								<tr>
									<td>08/24/2014</td>
									<td>Lim</td>
									<td>Patrick James</td>
									<td>sysadminpat</td>
									<td>09:30</td>
									<td>11:30</td>
									<td>Logged Out</td>
								</tr>
								<tr>
									<td>08/26/2014</td>
									<td>Ramos</td>
									<td>Jose Mari</td>
									<td>jmsysadmin</td>
									<td>12:30</td>
									<td></td>
									<td>Active</td>
								</tr>
								<tr>
									<td>08/27/2014</td>
									<td>Ramos</td>
									<td>Jose Mari</td>
									<td>jmsysadmin</td>
									<td>16:42</td>
									<td></td>
									<td>Active</td>
								</tr>
								<tr>
									<td>08/27/2014</td>
									<td>Ramos</td>
									<td>Jose Mari</td>
									<td>jmsysadmin</td>
									<td>16:42</td>
									<td></td>
									<td>Active</td>
								</tr>
								<tr>
									<td>08/27/2014</td>
									<td>Ramos</td>
									<td>Jose Mari</td>
									<td>jmsysadmin</td>
									<td>16:42</td>
									<td></td>
									<td>Active</td>
								</tr>
								<tr>
									<td>08/27/2014</td>
									<td>Ramos</td>
									<td>Jose Mari</td>
									<td>jmsysadmin</td>
									<td>16:42</td>
									<td></td>
									<td>Active</td>
								</tr>
								<tr>
									<td>08/27/2014</td>
									<td>Ramos</td>
									<td>Jose Mari</td>
									<td>jmsysadmin</td>
									<td>16:42</td>
									<td></td>
									<td>Active</td>
								</tr>
							</tbody>
						</table>
					</div>
			</div>
			
			<div class="col-md-4">
				<h3>Notifications</h3>
				<div class="notif-container">
					<article>
						<h6>sysadmin3 has created a new customer.</h6>
						<p>3 hours ago</p>
					</article>
					<article>
						<h6>sysadmin3 has approved 3 new OEBRs.</h6>
						<p>5 hours ago</p>
					</article>
					<article>
						<h6>sysadmin3 has deleted a file.</h6>
						<p>6 hours ago</p>
					</article>
					<article>
						<h6>sysadmin3 has deleted a file.</h6>
						<p>7 hours ago</p>
					</article>
					<article>
						<h6>sysadmin3 has deleted a file.</h6>
						<p>7 hours ago</p>
					</article>

				</div>
			</div>
		</div>
@stop