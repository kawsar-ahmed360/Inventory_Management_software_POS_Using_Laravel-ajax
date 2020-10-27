@php($sl=1);
@foreach ($cat as $ca)
	 
	 <tr align="center">
	 	<td>{{ $sl++ }}</td>
	 	<td>{{ $ca->name }}</td>
	 	<td>
	 		@if ($ca->status==1)
	 			<span class="badge badge-success">Active</span>
	 			@else
	 			<span class="badge badge-warning">Deactive</span>
	 		@endif
	 	</td>

	 	<td>
	 		@if ($ca->status=='1')
	 			<button onclick="deactive('{{ $ca->id }}')" class="btn btn-warning"><i class="fa fa-arrow-alt-circle-up"></i></button>
	 			@else
	 			<button onclick="active('{{ $ca->id }}')" class="btn btn-success"><i class="fa fa-arrow-alt-circle-down"></i></button>

	 		@endif
	 			<button onclick="" class="btn btn-info"><i class="fa fa-edit"></i></button>
	 			<button onclick="del('{{ $ca->id }}')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
	 	</td>
	 </tr>
@endforeach