	@php($sl=1);

							@foreach ($supliar as $sup)
								<tr align="center">
									<td>{{ $sl++ }}</td>
									<td>{{ $sup->name }}</td>
									<td>{{ $sup->email }}</td>
									<td>{{ $sup->mobile }}</td>
									<td>{{ $sup->address }}</td>
									<td>
										@if ($sup->status=='1')
											<span class="badge badge-success">Active</span>
											@else
											<span class="badge badge-danger">Deactive</span>
										@endif
									</td>

									<td>
										@if ($sup->status=='1')
										      <button onclick="deactive('{{ $sup->id }}')" class="btn btn-warning"><i class="fa fa-arrow-alt-circle-up"></i></button>
											@else
										      <button  onclick="active('{{ $sup->id }}')" class="btn btn-success"><i class="fa fa-arrow-alt-circle-down"></i></button>
										@endif
										      <button onclick="editeSup('{{ $sup->id }}','{{ $sup->name }}','{{ $sup->email }}','{{ $sup->mobile }}','{{ $sup->address }}')" class="btn btn-info"><i class="fa fa-edit"></i></button>
										      <button onclick="del('{{ $sup->id }}')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
									</td>
									
								</tr>
							@endforeach