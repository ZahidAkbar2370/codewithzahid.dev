@extends("Admin.layout")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Leave Requests</h3>
	<!-- <a href="{{url('add-interny')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add Attendance</button></a> -->
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="0">ID</option>
						<option value="1">Name</option>
						<option value="2">Email</option>
						<option value="3">Role</option>
						<option value="4">Publication Status</option>
					</select>
						<input type="text" name="myInput" id="myInput" onkeyup="myFunction()"  style="width: 180px;height: 30px">

				</div>
				
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Name</th>
							<th>Message</th>
							<th>Date</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($viewRequests))
						@foreach($viewRequests as $key => $request)
							<tr>
								<td>{{$request->id}}</td>
								<td>{{$request->users->name}}</td>
								<td>{{$request->message}}</td>
								<td>{{$request->leave_date}}</td>
								<td>{{$request->status}}</td>
								<td>

									<a href="{{url('destroy-requests',$request->id)}}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>

									<a href="{{url('approve-request',$request->id)}}" class="btn btn-success"><i class="align-middle" data-feather="thumbs-up"></i> <span class="align-middle"></span></a>
										
									<a href="{{url('cancel-request',$request->id)}}" class="btn btn-warning"><i class="align-middle" data-feather="thumbs-down"></i> <span class="align-middle"></span></a>

								</td>
							</tr>
						@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>


@endsection