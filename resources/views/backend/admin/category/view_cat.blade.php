@extends('backend/admin/master')

@section('con')
	

<div class="col-12">
				<div class="box-content">
					<h4 class="box-title">User List  <button data-toggle="modal" data-target="#add_category" class="btn btn-success">Add Category</button> </h4>
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

					

						<tbody id="show">
						
		           @include('backend/admin/category/view_ajax');
						
						</tbody>



						

					</table>

						

					
				</div>
				<!-- /.box-content -->
			</div>


@endsection
		@include('backend/admin/category/modal/add_category');
		@include('backend/admin/category/modal/edite');


@section('footer')
	
	<script type="text/javascript">
          
     $('#addcategory').submit(function(e){
      e.preventDefault();

      var url = $(this).attr('action');
      var method = $(this).attr('method');
      var data = $(this).serialize();

        $('#add_category').modal('hide');

        $.ajax({
         url:url,
         type:method,
         data:data,

         success:function(){

            $.get("{{ route('viewcategory_ajax') }}",function(data){
               $('#show').empty().html(data);
            });
         }
        });
     });

     function deactive(CatId){



      var alrm = confirm('if your want to deactive this item,press ok');
      if(alrm){

         $.ajax({
            url:"{{ route('Deactivecategory_ajax') }}",
            type:"GET",
            data:{CatId:CatId},

            success:function(){

            $.get("{{ route('viewcategory_ajax') }}",function(data){
               $('#show').empty().html(data);
            });

            }
         });
      }

     }

     function active(CardId){

      var alerm = confirm('if your wnant to active this item,press ok');

      if(alerm){
          
          $.ajax({
            url:"{{ route('Activecategory_ajax') }}",
            type:"GET",
            data:{CardId:CardId},
            success:function(){

                 $.get("{{ route('viewcategory_ajax') }}",function(data){
               $('#show').empty().html(data);
            });
            }
          });
          
      }
     }

     function del(CatId){

      var alrm = confirm('if you want to delete this item,press ok');
      if(alrm){
         $.ajax({
            url:"{{ route('Deletecategory_ajax') }}",
            type:"GET",
            data:{CatId:CatId},

            success:function(){
             
                 $.get("{{ route('viewcategory_ajax') }}",function(data){
               $('#show').empty().html(data);
            });

            }
         });
      }
     }


	</script>
@endsection
