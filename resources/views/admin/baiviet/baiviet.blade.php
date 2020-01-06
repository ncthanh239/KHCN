@extends('layouts.masterad')
@section('noidung')
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Quản Lý Bài Viết</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Admin</a></li>
			<li class="breadcrumb-item">Quản Lý Bài Biết</li>
			<li class="breadcrumb-item active" aria-current="page">Danh Sách Bài Viết</li>
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
								<th>Tên bài viết</th>
								<th>Tóm tắt</th>
								<th>Trạng thái</th>
								<th>Created_at</th>
								<th>Updated_at</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>#</th>
								<th>Tên bài viết</th>
								<th>Tóm tắt</th>
								<th>Trạng thái</th>
								<th>Created_at</th>
								<th>Updated_at</th>
								<th>Action</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach($baiviets as $data)
							<tr>
								<td>{{$data['id']}}</td>
								<td>{{$data['tenbv']}}</td>
								<td>{{$data['tomtat']}}</td>
								<td>{{$data['trangthai']}}</td>			
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


				<h4 class="modal-title" >Thêm mới bài viết</h4>
			</div>
			{{csrf_field()}}
			<div class="modal-body">
				<form enctype="multipart/form-data">
					<div class="form-group">
						<label>Tên bài viết(<span style="color: red">*</span>)</label>
						<input  type="text" id="tenbv" name="tenbv"  class="form-control"  placeholder="Nhập họ tên bài viết" ></input>
					</div>
					<div class="form-group">
						<label>Tóm tắt(<span style="color: red">*</span>)</label>
						<input  type="text" id="tomtat" name="tomtat"  class="form-control"  placeholder="Nhập tóm tắt" ></input>
					</div>

					<div class="form-group">
						<label>Nội dung(<span style="color: red">*</span>)</label>
						<textarea name="noidung" id="editor1" rows="10" cols="80"  class="form-control">

						</textarea>
					</div>
					<div class="form-group">
						<label>Trạng thái(<span style="color: red">*</span>)</label>
						<select name="trangthai" id="trangthai" class="form-control" required="required">	
							<option value="Bài đã đăng" name="">Bài đã đăng</option>
							<option value="Bài chưa đăng" name="">Bài chưa đăng</option>
						</select>
					</div>
					<div class="form-group">
						<label>Ảnh bài viết(<span style="color: red">*</span>)</label>
						<input type="file" name="path" class="form-control" id="path">
					</div>
				</form>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				<button type="button" class="btn btn-primary thembaiviet">Lưu</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="editDv">
	<div class="modal-dialog">
		<div class="modal-content" style="width: 650px;">
			<div class="modal-header">

				<h4 class="modal-title">Sửa thông tin bài viết</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Tên bài viết(<span style="color: red">*</span>)</label>
					<input  type="text" id="tenbv1" name="tenbv1"  class="form-control"  placeholder="Nhập họ tên bài viết" ></input>
				</div>
				<div class="form-group">
					<label>Tóm tắt(<span style="color: red">*</span>)</label>
					<input  type="text" id="tomtat1" name="tomtat1"  class="form-control"  placeholder="Nhập tóm tắt" ></input>
				</div>
				
				<div class="form-group">
					<label>Nội dung(<span style="color: red">*</span>)</label>
					<textarea name="noidung1" id="editor2" rows="10" cols="80"  class="form-control">

					</textarea>
				</div>
				<div class="form-group">
					<label>Trạng thái(<span style="color: red">*</span>)</label>
					<select name="trangthai1" id="trangthai1" class="form-control" required="required">	
						<option value="Bài đã đăng" name="">Bài đã đăng</option>
						<option value="Bài chưa đăng" name="">Bài chưa đăng</option>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				<button type="button" class="btn btn-primary suabaiviet">Lưu</button>
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

	$(function(){
		CKEDITOR.replace( 'editor1' );
		CKEDITOR.replace( 'editor2' );
	});

	$('.thembaiviet').on('click', function(e){
		e.preventDefault();
		
		var link = "{{asset('')}}/thembaiviet";

		var formData = new FormData();
		
		formData.append('tenbv', $('#tenbv').val());
		formData.append('tomtat', $('#tomtat').val());
		formData.append('noidung',CKEDITOR.instances['editor1'].getData());
		formData.append('trangthai', $('#trangthai').val());
		formData.append('path',$('#path')[0].files[0]);

		
		$.ajax({
			url:link,
			type:'POST',
			processData: false,
			contentType: false,
			data:formData,
			success:function(){
				toastr.success('Thêm mới thành công');
				 window.location.href = "{{asset('')}}baiviet";   
			},

			error:function(jqXHR,textStatus,errorThrown){
				if (jqXHR.responseJSON.errors.tenbv!==undefined){
					toastr.error(jqXHR.responseJSON.errors.tenbv[0]);
				}
				if (jqXHR.responseJSON.errors.tomtat!==undefined){
					toastr.error(jqXHR.responseJSON.errors.tomtat[0]);
				}
				if (jqXHR.responseJSON.errors.noidung!==undefined){
					toastr.error(jqXHR.responseJSON.errors.noidung[0]);
				}
				if (jqXHR.responseJSON.errors.path!==undefined){
					toastr.error(jqXHR.responseJSON.errors.path[0]);
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
			url:"{{asset('')}}suabaiviet/"+id,
			success: function(response){
				console.log(response);

				$('#tenbv1').val(response.data.tenbv);
				$('#tomtat1').val(response.data.tomtat);
				
				CKEDITOR.instances['editor2'].setData(response.data.noidung);
				$('#trangthai1').val(response.data.trangthai);
				
			}
		});
	});

	$('.suabaiviet').on('click', function(e){
		e.preventDefault();
		var id = $('#hiddenedit').attr('data-id');
		var formData1 = new FormData();
		formData1.append('tenbv', $('#tenbv1').val());
		formData1.append('tomtat', $('#tomtat1').val());
		formData1.append('noidung',CKEDITOR.instances['editor2'].getData());
		formData1.append('trangthai', $('#trangthai1').val());
		$.ajax({
			url:"{{asset('')}}updatebv/"+id,
			type:"POST",
			processData: false,
			contentType: false,
			data:formData1,
			success:function(){
				toastr.success('Sửa thành công');
				window.location.href = "{{asset('')}}baiviet";   
			},

			error:function(jqXHR,textStatus,errorThrown){
				if (jqXHR.responseJSON.errors.tenbv!==undefined){
					toastr.error(jqXHR.responseJSON.errors.tenbv[0]);
				}
				if (jqXHR.responseJSON.errors.tomtat!==undefined){
					toastr.error(jqXHR.responseJSON.errors.tomtat[0]);
				}
				if (jqXHR.responseJSON.errors.noidung!==undefined){
					toastr.error(jqXHR.responseJSON.errors.noidung[0]);
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
					url: "{{ asset('') }}deletebv/"+id,
					success: function(response){
						window.location.href = "{{asset('')}}baiviet";
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