@extends('backend/admin/master')

@section('con')
	

<div class="col-12">
				<div class="box-content">
					<h4 class="box-title">User List  <button data-toggle="modal" data-target="#add_unit" class="btn btn-success">Add Unit</button> </h4>
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
								<th>Unit Name</th>
								
								<th>Status</th>
								
								<th>Action</th>
							</tr>
						</thead>

					

						<tbody id="all">
						
		                  
		                  @include('backend/admin/unit/ajax_view');  
						
						</tbody>



						

					</table>

						

					
				</div>
				<!-- /.box-content -->
			</div>


@endsection
		@include('backend/admin/unit/modal/add_units');
		@include('backend/admin/unit/modal/edite');


@section('footer')
	
	<script type="text/javascript">
          
         $('#addunits').submit(function(e){
         	e.preventDefault();

         	var url = $(this).attr('action');
         	var method = $(this).attr('method');
         	var data = $(this).serialize();

         	$('#add_unit').modal('hide');

         	$.ajax({
         		url:url,
         		type:method,
         		data:data,

         		success:function(){

         			$.get("{{ route('units_view_ajax') }}",function(data){
                           
                           $('#all').empty().html(data);
                         
         			});
         		}
         	});
         });

         function deactive(UnitId){

         	var alert = confirm('if you want to deactive this item,press ok');

         	if(alert){

         		$.ajax({
         			url:"{{ route('units_Deactive_ajax') }}",
         			type:"GET",
         			data:{UnitId:UnitId},

         			success:function(){

         				$.get("{{ route('units_view_ajax') }}",function(data){

         					$('#all').empty().html(data);

         				});
         			}
         		});
         	}
         }

         function active(UnitId){

         	var alert = confirm('if yor want to active this tiem, press ok');

         	if(alert){

         		$.ajax({

         			url:"{{ route('units_Active_ajax') }}",
         			type:"GET",
         			data:{UnitId:UnitId},

         			success:function(){
                     
                     	$.get("{{ route('units_view_ajax') }}",function(data){

         					$('#all').empty().html(data);

         				});

         			}
         		});
         	}
         }

         function dele(UniId){
         	var alert = confirm('if you want to delete this item,press ok');
         	if(alert){

         		$.ajax({
         			url:"{{ route('units_Delete_ajax') }}",
         			type:"GET",
         			data:{UniId:UniId},

         			success:function(){
                      
                      	$.get("{{ route('units_view_ajax') }}",function(data){

         					$('#all').empty().html(data);

         				});

         			}
         		});
         	}
         }

         function edtiesuni(UnitId,Name){

         	$('#edite_unit').modal('show');
         	$('#edite_unit').find('#UnitId').val(UnitId);
         	$('#edite_unit').find('#name').val(Name);
         }

         $('#editeunits').submit(function(e){
         	e.preventDefault();

         	var url = $(this).attr('action');
         	var method = $(this).attr('method');
         	var data = $(this).serialize();

         

         	$('#edite_unit').modal('hide');

         	$.ajax({
                url:url,
                type:method,
                data:data,

                success:function(){

                	$.get("{{ route('units_view_ajax') }}",function(data){

         					$('#all').empty().html(data);

         				});
                }
         	});

         });  



	</script>
@endsection
