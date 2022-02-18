@extends("Admin.layout")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Users</h3>
	<a href="{{url('add-user')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add User</button></a>
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
							<th>Email</th>
							<th>Role</th>
							<!-- <th class="d-none d-xl-table-cell">Publication Status</th> -->
							<th>Publication Status</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($users))
						@foreach($users as $key => $user)
							<tr>
								<td>{{$user->id}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->role}}</td>
								@if($user->publication_status == "1")
									<td><span class="badge bg-success">Active</span></td>
								@else
									<td><span class="badge bg-danger">In-active</span></td>
								@endif
								<td>
									@if($user->publication_status == "1")
										<a href="{{url('inactive-user',$user->id)}}" class="btn btn-secondary"><i class="align-middle" data-feather="thumbs-up"></i> <span class="align-middle"></span></a>
									@else
										<a href="{{url('active-user',$user->id)}}" class="btn btn-success"><i class="align-middle" data-feather="thumbs-down"></i> <span class="align-middle"></span></a>
									@endif
									<a href="{{url('edit-user',$user->id)}}" class="btn btn-info"><i class="align-middle" data-feather="edit"></i> <span class="align-middle"></span></a>
									<a href="{{url('delete-user',$user->id)}}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
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