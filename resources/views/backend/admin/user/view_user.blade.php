@extends('backend/admin/master')

@section('con')
	

<div class="col-12">
				<div class="box-content">
					<h4 class="box-title">User List </h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
						<tr align="center">
								<th>Sl</th>
								<th>User Name</th>
								<th>Email</th>
								
								<th>Action</th>
							</tr>
						</thead>

					

						<tbody>
							@php($sl=1);
							@foreach ($user as $us)
								<tr align="center">
									<td>{{ $sl++ }}</td>
									<td>{{ $us->name }}</td>
									<td>{{ $us->email }}</td>
									<td>
										<button class="btn btn-success"><i class="fa fa-edit"></i></button>
										<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
									</td>
								</tr>
							@endforeach
						</tbody>



						

					</table>
				</div>
				<!-- /.box-content -->
			</div>

@endsection