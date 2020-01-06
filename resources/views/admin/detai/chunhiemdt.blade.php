@extends('layouts.masterad')
@section('noidung')
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Quản Lý Chủ Nhiệm</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Admin</a></li>
			<li class="breadcrumb-item">Quản Lý Đề Tài</li>
			<li class="breadcrumb-item active" aria-current="page">Chủ Nhiệm Đề Tài</li>
		</ol>
	</div>

	<!-- Row -->
	<div class="row">
		
		<div class="col-lg-12">
			<div class="card mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCn">Thêm mới</button></h6>
				</div>
				<div class="table-responsive p-3">
					<table class="table align-items-center table-flush table-hover" id="dataTableHover">
						<thead class="thead-light">
							<tr>
								<th>#</th>
								<th>Họ tên</th>
								<th>Tên đăng nhập</th>
								<th>Đơn vị</th>
								<th>Created_at</th>
								<th>Updated_at</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>#</th>
								<th>Họ tên</th>
								<th>Tên đăng nhập</th>
								<th>Đơn vị</th>
								<th>Created_at</th>
								<th>Updated_at</th>
								<th>Action</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach($chunhiems as $data)
							<tr>
								<td>{{$data['id']}}</td>
								<td>{{$data['hoten']}}</td>
								<td>{{$data['tendangnhap']}}</td>
								<td>{{$data['donvi']}}</td>			
								<td>{{$data['created_at']}}</td>
								<td>{{$data['updated_at']}}</td>
								<td>
									<button type="button" class="btn btn-primary btn-sua" data-id="{{$data['id']}}" data-toggle="modal" data-target="#editDv"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
									<button type="button" class="btn btn-danger btn-xoa" data-id="{{$data['id']}}"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
								</td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="hiddenedit">

<div class="modal fade" id="addCn">
	<div class="modal-dialog" >
		<div class="modal-content" style="width: 650px;">
			<div class="modal-header" >


				<h4 class="modal-title" >Thêm mới chủ nhiệm đề tài</h4>
			</div>
			{{csrf_field()}}
			<div class="modal-body">
				<div class="form-group">
					<label>Họ tên(<span style="color: red">*</span>)</label>
					<input  type="text" id="hoten" name="hoten"  class="form-control"  placeholder="Nhập họ tên chủ nhiệm đề tài" ></input>
				</div>
				<div class="form-group">
					<label>Nhập tên đăng nhập(<span style="color: red">*</span>)</label>
					<input  type="text" id="tendangnhap" name="tendangnhap"  class="form-control"  placeholder="Nhập tên đăng nhập" ></input>
				</div>
				<div class="form-group">
					<label>Đơn vị(<span style="color: red">*</span>)</label>
					<select name="donvi" id="donvi" class="form-control" required="required">
						@if(count($donvis)>0) @foreach ($donvis as $data)
						<option value="{{$data->ten_dv}}" name="donvi_id">{{$data->ten_dv}}</option>
						@endforeach @endif 

					</select>
				</div>
				<div class="form-group">
					<label>Nhập mật khẩu(<span style="color: red">*</span>)</label>
					<input  type="password" id="password" name="password"  class="form-control"  placeholder="Nhập password" ></input>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				<button type="button" class="btn btn-primary themchunhiem">Lưu</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="editDv">1
	<div class="modal-dialog">
		<div class="modal-content" style="width: 650px;">
			<div class="modal-header">

				<h4 class="modal-title">Sửa thông tin chủ nhiệm đề tài</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Họ tên(<span style="color: red">*</span>)</label>
					<input  type="text" id="hoten1" name="hoten1"  class="form-control"  placeholder="Nhập họ tên chủ nhiệm đề tài" ></input>
				</div>
				<div class="form-group">
					<label>Nhập tên đăng nhập(<span style="color: red">*</span>)</label>
					<input  type="text" id="tendangnhap1" name="tendangnhap1"  class="form-control"  placeholder="Nhập tên đăng nhập" ></input>
				</div>
				<div class="form-group">
					<label>Đơn vị(<span style="color: red">*</span>)</label>
					<select name="donvi1" id="donvi1" class="form-control" required="required">
						@if(count($donvis)>0) @foreach ($donvis as $data)
						<option value="{{$data->ten_dv}}" name="donvi_id">{{$data->ten_dv}}</option>
						@endforeach @endif 

					</select>
				</div>
				<div class="form-group">
					<label>Nhập mật khẩu(<span style="color: red">*</span>)</label>
					<input  type="password" id="password1" name="password1"  class="form-control"  placeholder="Nhập password" ></input>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				<button type="button" class="btn btn-primary suachunhiem">Lưu</button>
			</div>
		</div>
	</div>
</div>
@endsection

@section('foot')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$('.themchunhiem').on('click', function(e){
		e.preventDefault();
		var link = "{{asset('')}}/themchunhiem";
		$.ajax({
			url:link,
			type:'POST',
			data:{
				hoten: $('#hoten').val(),
				tendangnhap: $('#tendangnhap').val(),
				donvi: $('#donvi').val(),
				password: $('#password').val()
			},
			success:function(){
				toastr.success('Thêm mới thành công');
				window.location.href = "{{asset('')}}chunhiem";   
			},

			error:function(jqXHR,textStatus,errorThrown){
				if (jqXHR.responseJSON.errors.hoten!==undefined){
					toastr.error(jqXHR.responseJSON.errors.hoten[0]);
				}
				if (jqXHR.responseJSON.errors.tendangnhap!==undefined){
					toastr.error(jqXHR.responseJSON.errors.tendangnhap[0]);
				}
				if (jqXHR.responseJSON.errors.password!==undefined){
					toastr.error(jqXHR.responseJSON.errors.password[0]);
				}
				


			}
		});
	});

	$('.btn-sua').on('click', function(e){
		e.preventDefault();
		var id = $(this).attr('data-id');
		$('#hiddenedit').attr('data-id', id);

		$.ajax({
			type:'GET',
			url:"{{asset('')}}suachunhiem/"+id,
			success: function(response){
				console.log(response);
				
				$('#hoten1').val(response.data.hoten);
				$('#tendangnhap1').val(response.data.tendangnhap);
				$('#donvi1').val(response.data.donvi);
				
			}
		});
	});

	$('.suachunhiem').on('click', function(e){
		e.preventDefault();
		var id = $('#hiddenedit').attr('data-id');
		$.ajax({
			url:"{{asset('')}}updatecn/"+id,
			type:"POST",
			data:{
				hoten: $('#hoten1').val(),
				tendangnhap: $('#tendangnhap1').val(),
				donvi: $('#donvi1').val(),
				password: $('#password1').val()
			},
			success:function(){
				toastr.success('Sửa thành công');
				window.location.href = "{{asset('')}}chunhiem";   
			},

			error:function(jqXHR,textStatus,errorThrown){
				if (jqXHR.responseJSON.errors.hoten!==undefined){
					toastr.error(jqXHR.responseJSON.errors.hoten[0]);
				}
				if (jqXHR.responseJSON.errors.tendangnhap!==undefined){
					toastr.error(jqXHR.responseJSON.errors.tendangnhap[0]);
				}
				if (jqXHR.responseJSON.errors.donvi!==undefined){
					toastr.error(jqXHR.responseJSON.errors.donvi[0]);
				}
				if (jqXHR.responseJSON.errors.password!==undefined){
					toastr.error(jqXHR.responseJSON.errors.password[0]);
				}


			}


		});

	});



	$('.btn-xoa').on('click', function(e){
		var id = $(this).attr('data-id');
		alert
		swal({
			title: "Bạn có muốn xóa không?",
			text: "Sau khi xóa bạn sẽ không thể khôi phục được tệp!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					type: 'delete',
					url: "{{ asset('') }}deletecn/"+id,
					success: function(response){
						window.location.href = "{{asset('')}}chunhiem";
					}
				}); 
				swal("Tệp của bạn đã được xóa!", {
					icon: "success",
				});
			} else {
				swal("Hủy xóa thành công!!");
			}
		});
	});
</script>
@endsection