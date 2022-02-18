@extends("Admin.layout")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Messages</h3>
	<!-- <a href="{{url('add-user')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add User</button></a> -->
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<!-- <div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="0">ID</option>
						<option value="1">Name</option>
						<option value="2">Email</option>
						<option value="3">Mobile No</option>
						<option value="4">Message</option>
					</select>
						<input type="text" name="myInput" id="myInput" onkeyup="myFunction()"  style="width: 180px;height: 30px">

				</div> -->
				
				<div class="container">
					<div class="row">
						@if(!empty($images))
						@foreach($images as $key => $image)
							<div class="col-md-4">
								
							</div>
						@endforeach
						@endif
					</div>
					
				</div>
					
			</div>
		</div>
	</div>


@endsection