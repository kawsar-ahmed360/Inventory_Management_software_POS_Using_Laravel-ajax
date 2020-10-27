	 <div class="col-12 ">
						 	
						<thead align="center">
							<tr><td colspan="2" align="center"><img src="{{ $us->photo?url('public/backend/profile/'.$us->photo):url("public/backend/images/avatar.png") }}" width="250px" alt="image"></td></tr>
					          <tr><th>Your Name</th><td>{{ $us->name }}</td></tr>
					          <tr><th>Email</th><td>{{ $us->email }}</td></tr>
					          <tr><th>Mobile</th><td>{{ $us->mobile }}</td></tr>
					          <tr><th>Address</th><td>{{ $us->address }}</td></tr>
					          <tr><th colspan="2">

					          	<button onclick="edite_profile('{{ $us->id }}','{{ $us->name }}','{{ $us->email }}','{{ $us->address }}','{{ $us->mobile }}')" class="btn btn-info">Edite Profile</button>
					          	<button onclick="passwordch('{{ $us->id }}')" class="btn btn-danger">Password Change</button>
					          	<button  data-toggle="modal" data-target="#editeImage" class="btn btn-drack">Change Photo</button>

					          </th></tr>
						</thead>

						 </div>