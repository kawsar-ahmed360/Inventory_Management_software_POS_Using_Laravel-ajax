@extends('backend/admin/master')

@section('con')
	

<div class="col-12">
				<div class="box-content">
					<h4 class="box-title">Your Profile </h4>
					<!-- /.box-title -->
				
					<!-- /.dropdown js__dropdown -->
					<table class="table table-bordered  offset-2" id="show" style="width:50%">

					

					@include('backend/admin/user/include/profile_data');


					</table>
				</div>
				<!-- /.box-content -->
			</div>


@endsection

			@include('backend/admin/user/modal/edite_profile');
			@include('backend/admin/user/modal/image');
			@include('backend/admin/user/modal/change_pass');

@section('footer')
	<script type="text/javascript">
		function edite_profile(profileId,Name,Email,Address,Mobile){

			$('#editeprofile').modal('show');
			$('#editeprofile').find('#name').val(Name);
			$('#editeprofile').find('#email').val(Email);
			$('#editeprofile').find('#mobile').val(Mobile);
			$('#editeprofile').find('#address').val(Address);
			$('#editeprofile').find('#profileId').val(profileId);

		}

		$('#profile_edite').submit(function(e){
			e.preventDefault();

			var url = $(this).attr('action');
			var method = $(this).attr('method');
			var data = $(this).serialize();

			$('#editeprofile').modal('hide');

			$.ajax({
				url:url,
				type:method,
				data:data,

				success:function(){

					$.get("{{ route('profile_Incl_view') }}",function(data){

					$('#show').empty().html(data);
					});

				}
			});

		});


  function passwordch(UserId){

  	$('#changedPass').modal('show');
  	
  }

  $('#password_edite').submit(function(e){
  	e.preventDefault();
  	var url = $(this).attr('action');
  	var method = $(this).attr('method');
  	var data = $(this).serialize();

  	$('#changedPass').modal('hide');

  	$.ajax({
  		url:url,
  		type:method,
  		data:data,
       
       
  	success:function(){

  		$.get("{{ route('profile_Incl_view') }}",function(data){

		   $('#show').empty().html(data);
		});

  	}
 
  	});


  });

	
	</script>
@endsection