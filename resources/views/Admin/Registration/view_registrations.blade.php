@extends("Admin.layout")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Registered Students</h3>
	<!-- <a href="{{url('add-user')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add User</button></a> -->
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="0">ID</option>
						<option value="1">Name</option>
						<option value="2">Email</option>
						<option value="3">Mobile No</option>
					</select>
						<input type="text" name="myInput" id="myInput" onkeyup="myFunction()"  style="width: 180px;height: 30px">

						<p>Total Registrations: <b>{{count($registeredStudents)}}</b></p>

				</div>
				
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile No</th>
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($registeredStudents))
						@foreach($registeredStudents as $key => $student)
							<tr>
								<td>{{$key}}</td>
								<td>{{$student->name}}</td>
								<td>{{$student->email}}</td>
								<td>{{$student->mobile_no}}</td>
							</tr>
						@endforeach
						@endif
					</tbody>
				</table>

			</div>
					{{$registeredStudents->links()}}
		</div>
	</div>


@endsection