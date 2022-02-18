@extends("Admin.layout")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Messages</h3>
	<!-- <a href="{{url('add-user')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add User</button></a> -->
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="0">ID</option>
						<option value="1">Name</option>
						<option value="2">Email</option>
						<option value="3">Mobile No</option>
						<option value="4">Message</option>
					</select>
						<input type="text" name="myInput" id="myInput" onkeyup="myFunction()"  style="width: 180px;height: 30px">

				</div>
				
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile No</th>
							<!-- <th class="d-none d-xl-table-cell">Publication Status</th> -->
							<th>Message</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($messages))
						@foreach($messages as $key => $message)
							<tr>
								<td>{{$message->id}}</td>
								<td>{{$message->name}}</td>
								<td>{{$message->email}}</td>
								<td>{{$message->mobile_no}}</td>
								<td>{{$message->message}}</td>
								<td>
									<a href="{{url('delete-message',$message->id)}}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
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