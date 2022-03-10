@extends("Admin.layout")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Internees</h3>
	<a href="{{url('add-internee')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add Internee</button></a>
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

				<!-- @if($message = Session::get('success'))
				<div class="alert alert-success">
					<p style="background-color: green;">{{ $message }}</p>
				</div>
				@endif -->
				
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Name</th>
							<th>Mobile No</th>
							<th>Degree Name</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Start Time</th>
							<th>End Time</th>
							<th>Technology</th>
							<!-- <th class="d-none d-xl-table-cell">Publication Status</th> --><!-- 
							<th>Publication Status</th> -->
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($internees))
						@foreach($internees as $key => $internee)
							<tr>
								<td>{{$internee->id}}</td>
								<td>{{$internee->name}}</td>
								<td>{{$internee->mobile_no}}</td>
								<td>{{$internee->degree_name}}</td>
								<td>{{$internee->start_date}}</td>
								<td>{{$internee->end_date}}</td>
								<td>{{$internee->start_time}}</td>
								<td>{{$internee->end_time}}</td>
								<td>{{$internee->languages->language_name}}</td>
								<!-- @if($internee->publication_status == "1")
									<td><span class="badge bg-success">Active</span></td>
								@else
									<td><span class="badge bg-danger">In-active</span></td>
								@endif -->
								<td>
									<!-- @if($internee->publication_status == "1")
										<a href="{{url('inactive-internee',$internee->id)}}" class="btn btn-secondary"><i class="align-middle" data-feather="thumbs-up"></i> <span class="align-middle"></span></a>
									@else
										<a href="{{url('active-internee',$internee->id)}}" class="btn btn-success"><i class="align-middle" data-feather="thumbs-down"></i> <span class="align-middle"></span></a>
									@endif -->
									<a href="{{url('edit-internee',$internee->id)}}" class="btn btn-info"><i class="align-middle" data-feather="edit"></i> <span class="align-middle"></span></a>
									<a href="{{url('delete-internee',$internee->id)}}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
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