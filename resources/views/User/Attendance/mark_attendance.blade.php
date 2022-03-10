@extends("User/user_layout")
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Mark Attendance</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
					<div class="panel-heading">Mark Attendance</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"></p>
		<div class="col-md-12">

							
			<form role="form" method="post" action="{{URL::to('mark-attendance')}}">
				@csrf
				
				
				<div class="form-group">
					<label>Today Attendace</label>						
				<div class="form-group has-success">
					<button type="submit" class="btn btn-primary" name="submit">Mark Prenset</button>
				</div>
								
			</form>
					
		</div>
								
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->

@endsection