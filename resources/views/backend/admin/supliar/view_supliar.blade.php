@extends('backend/admin/master')

@section('con')
	

<div class="col-12">
				<div class="box-content">
					<h4 class="box-title">User List  <button data-toggle="modal" data-target="#add_supliar" class="btn btn-success">Add Supliar</button> </h4>
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
								<th>Supliar Name</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>Address</th>
								<th>Status</th>
								
								<th>Action</th>
							</tr>
						</thead>

					

						<tbody id="showAll">
						
		                    @include('backend/admin/supliar/view_ajax_show');
						
						</tbody>



						

					</table>

						

					
				</div>
				<!-- /.box-content -->
			</div>


@endsection
		@include('backend/admin/supliar/modal/add_supliar');
		@include('backend/admin/supliar/modal/edite');


@section('footer')
	
	<script type="text/javascript">

		$('#addSupliar').submit(function(e){
           
           e.preventDefault();

           var url = $(this).attr('action');
           var method = $(this).attr('method');
           var data = $(this).serialize();



           $('#add_supliar').modal('hide');
          
          $.ajax({
          	url:url,
          	type:method,
          	data:data,

          	success:function(){
            
             $.get("{{ route('supliarAjax') }}",function(data){

          		$('#showAll').empty().html(data);

             });


       
          	}
          });

      
		});


		function deactive(SupliarId){

			var alrm = confirm('do you want to this item deactive');

			if(alrm){
               
               $.ajax({

               	url:"{{ route('supliarAjaxdeactive') }}",
               	type:"GET",
               	data:{SupliarId:SupliarId},

               	success:function(){
                   $.get("{{ route('supliarAjax') }}",function(data){

          		$('#showAll').empty().html(data);

             });

                   
               	}
               });
 
			}
		}

		function active(sup_Id){

			var alrm = confirm('if you want to active this item');

			if(alrm){

				$.ajax({
					url:"{{ route('supliarAjaxactive') }}",
					type:"GET",
					data:{sup_Id:sup_Id},

					success:function(){

				$.get("{{ route('supliarAjax') }}",function(data){

          		    $('#showAll').empty().html(data);

                     });
					}
				});
			}
		}

		function del(DelID){

			var alrm = confirm('if you want to deleted this item');

			if(alrm){

				$.ajax({
					url:"{{ route('supliarAjaxdelete') }}",
					type:"GET",
					data:{DelID:DelID},

					success:function(){

				$.get("{{ route('supliarAjax') }}",function(data){

          		    $('#showAll').empty().html(data);

                     });
					}
				});
			}
		}

		function editeSup(SupId,Name,Email,Mobile,Address){
			$('#Edite_supliar').modal('show');
			$('#Edite_supliar').find('#name').val(Name);
			$('#Edite_supliar').find('#email').val(Email);
			$('#Edite_supliar').find('#mobile').val(Mobile);
			$('#Edite_supliar').find('#address').val(Address);
			$('#Edite_supliar').find('#supId').val(SupId);

		}

       
       $('#EditeSupliar').submit(function(e){

       	   e.preventDefault();

       	   var url = $(this).attr('action');
       	   var method = $(this).attr('method');
       	   var data = $(this).serialize();

       	   $('#Edite_supliar').modal('hide');

       	   $.ajax({
       	   	url:url,
       	   	type:method,
       	   	data:data,
       	   	success:function(){
       	   		$.get("{{ route('supliarAjax') }}",function(data){

          		    $('#showAll').empty().html(data);

                     });
       	   	}
       	   });
       });
		
	</script>
@endsection
