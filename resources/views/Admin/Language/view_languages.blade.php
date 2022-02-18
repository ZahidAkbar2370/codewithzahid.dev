@extends("Admin.layout")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Languages</h3>
	<a href="{{url('add-language')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add Language</button></a>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="0">ID</option>
						<option value="1">Language Name</option>
					</select>
						<input type="text" name="myInput" id="myInput" onkeyup="myFunction()"  style="width: 180px;height: 30px">

				</div>
				
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Language Name</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($languages))
						@foreach($languages as $key => $language)
							<tr>
								<td>{{$language->id}}</td>
								<td>{{$language->language_name}}</td>
								
								<td>
									<a href="{{url('edit-language',$language->id)}}" class="btn btn-info"><i class="align-middle" data-feather="edit"></i> <span class="align-middle"></span></a>
									<a href="{{url('delete-language',$language->id)}}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
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