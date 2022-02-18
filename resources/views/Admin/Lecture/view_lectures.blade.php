@extends("Admin.layout")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Lectures</h3>
	<a href="{{url('add-lecture')}}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add Lecture</button></a>
		<div class="col-12 col-md-12 col-lg-12 col-xxl-12 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<select id="selectInput" style="width: 180px;height: 30px">
						<option value="0">ID</option>
						<option value="1">User Name</option>
						<option value="2">Title</option>
						<option value="4">Language</option>
						<option value="6">Publication Status</option>
					</select>
						<input type="text" name="myInput" id="myInput" onkeyup="myFunction()"  style="width: 180px;height: 30px">

				</div>
				
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>User Name</th>
							<th>Title</th>
							<th>Language</th>
							<th>Video URL</th>
							<th>Document URL</th>
							<th>Thumbnail</th>
							<!-- <th class="d-none d-xl-table-cell">Publication Status</th> -->
							<th>Publication Status</th>
							<th>Action</th>
						</tr>
					</thead>
					
					<tbody>
						@if(!empty($lectures))
						@foreach($lectures as $key => $lecture)
							<tr>
								<td>{{$lecture->id}}</td>
								<td>{{$lecture['user']->name ?? ''}}</td>
								<td>{{$lecture->title}}</td>
								<td>{{$lecture['language']->language_name}}</td>
								<td><a href="{{$lecture->video_link}}" target="_blank">Video Link</a></td>
								<td><a href="{{$lecture->document_url}}" target="_blank">Document URL</a></td>
								<td><img src="theme\img\LectureThumbnail\{{$lecture->thumbnail}}" width="90" height="50"></td>
								@if($lecture->publication_status == "1")
									<td><span class="badge bg-success">Active</span></td>
								@else
									<td><span class="badge bg-danger">In-active</span></td>
								@endif
								<td>
									@if($lecture->publication_status == "1")
										<a href="{{url('inactive-lecture',$lecture->id)}}" class="btn btn-secondary"><i class="align-middle" data-feather="thumbs-up"></i> <span class="align-middle"></span></a>
									@else
										<a href="{{url('active-lecture',$lecture->id)}}" class="btn btn-success"><i class="align-middle" data-feather="thumbs-down"></i> <span class="align-middle"></span></a>
									@endif
									<a href="{{url('edit-lecture',$lecture->id)}}" class="btn btn-info"><i class="align-middle" data-feather="edit"></i> <span class="align-middle"></span></a>
									<a href="{{url('delete-lecture',$lecture->id)}}" class="btn btn-danger"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle"></span></a>
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