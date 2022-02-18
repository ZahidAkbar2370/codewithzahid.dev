@extends("Admin.layout")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Interviews</h3>
	<a href="{{url('add-interview')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add Interview</button></a>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="0">ID</option>
						<option value="1">User Name</option>
						<option value="2">Guest Name</option>
						<option value="3">Pation</option>
						<option value="5">Short Intro</option>
						<option value="6">Publication Status</option>
					</select>
						<input type="text" name="myInput" id="myInput" onkeyup="myFunction()"  style="width: 180px;height: 30px">

				</div>
				
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>User Name</th>
							<th>Guest Name</th>
							<th>Pation</th>
							<th>Interview Video</th>
							<th>Short Intro</th>
							<!-- <th class="d-none d-xl-table-cell">Publication Status</th> -->
							<th>Publication Status</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($interviews))
						@foreach($interviews as $key => $interview)
							<tr>
								<td>{{$interview->id}}</td>
								<td>{{$interview['user']->name}}</td>
								<td>{{$interview->guest_name}}</td>
								<td>{{$interview->pation}}</td>
								<td><a href="{{$interview->video_url}}" target="_blank">Video URL</a></td>
								<td>{{$interview->short_introduction}}</td>

								@if($interview->publication_status == "1")
									<td><span class="badge bg-success">Active</span></td>
								@else
									<td><span class="badge bg-danger">In-active</span></td>
								@endif
								<td>
									@if($interview->publication_status == "1")
										<a href="{{url('inactive-interview',$interview->id)}}" class="btn btn-secondary"><i class="align-middle" data-feather="thumbs-up"></i> <span class="align-middle"></span></a>
									@else
										<a href="{{url('active-interview',$interview->id)}}" class="btn btn-success"><i class="align-middle" data-feather="thumbs-down"></i> <span class="align-middle"></span></a>
									@endif
									<a href="{{url('edit-interview',$interview->id)}}" class="btn btn-info"><i class="align-middle" data-feather="edit"></i> <span class="align-middle"></span></a>
									<a href="{{url('delete-interview',$interview->id)}}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
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