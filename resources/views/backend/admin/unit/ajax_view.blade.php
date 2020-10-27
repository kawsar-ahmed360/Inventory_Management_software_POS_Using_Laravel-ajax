@php($sl=1);
@foreach ($unit as $uni)
              <tr align="center">
		         <td>{{ $sl++ }}</td>
		       <td>{{ $uni->name }}</td>
		      <td>
		      	@if ($uni->status=='1')
		      		<span class="badge badge-success">Active</span>
		      	@else
		      	<span class="badge badge-warning">Deactive</span>	
		      	@endif
		      </td>
		     <td>
		     	@if ($uni->status=='1')
		     	<button onclick="deactive('{{ $uni->id }}')" class="btn btn-warning"><i class="fa fa-arrow-alt-circle-up"></i></button>
		     	@else

		     	<button onclick="active('{{ $uni->id }}')" class="btn btn-success"><i class="fa fa-arrow-alt-circle-down"></i></button>
		     	@endif
		     	<button onclick="edtiesuni('{{ $uni->id }}','{{ $uni->name }}')" class="btn btn-info"><i class="fa fa-edit"></i></button>
		     	<button onclick="dele('{{ $uni->id }}')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
		     </td>
		                    
		 </tr>
@endforeach