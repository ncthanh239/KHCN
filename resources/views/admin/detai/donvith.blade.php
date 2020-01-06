@extends('layouts.masterad')
@section('noidung')
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Quản Lý Đơn Vị Thực Hiện Đề Tài</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Admin</a></li>
			<li class="breadcrumb-item">Quản Lý Đề Tài</li>
			<li class="breadcrumb-item active" aria-current="page">Đơn Vị Thực Hiện Đề Tài</li>
		</ol>
	</div>

	<!-- Row -->
	<div class="row">
		<!-- Datatables -->
		
		<!-- DataTable with Hover -->
		<div class="col-lg-12">
			<div class="card mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addDv">Thêm mới</button></h6>
				</div>
				<div class="table-responsive p-3">
					<table class="table align-items-center table-flush table-hover" id="dataTableHover">
						<thead class="thead-light">
							<tr>
								<th>#</th>
								<th>Tên Đơn Vị</th>
								<th>Địa Chỉ</th>
								<th>Điện Thoại</th>
								<th>Email</th>
								<th>Created_at</th>
								<th>Updated_at</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>#</th>
								<th>Tên Đơn Vị</th>
								<th>Địa Chỉ</th>
								<th>Điện Thoại</th>
								<th>Email</th>
								<th>Created_at</th>
								<th>Updated_at</th>
								<th>Action</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach($donvis as $data)
							<tr>
								<td>{{$data['id']}}</td>
								<td>{{$data['ten_dv']}}</td>
								<td>{{$data['diachi']}}</td>
								<td>{{$data['dienthoai']}}</td>
								<td>{{$data['email']}}</td>
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
	<!--Row-->

	<!-- Documentation Link -->

	<div class="modal fade" id="addDv">
		<div class="modal-dialog" >
			<div class="modal-content" style="width: 650px;">
				<div class="modal-header" >
					

					<h4 class="modal-title" >Thêm mới đơn vị thực hiện</h4>
				</div>
				{{csrf_field()}}
				<div class="modal-body">
					<div class="form-group">
						<label>Tên đơn vị(<span style="color: red">*</span>)</label>
						<input  type="text" id="ten_dv" name="ten_dv"  class="form-control"  placeholder="Nhập tên đơn vị" ></input>
					</div>
					<div class="form-group">
						<label>Địa chỉ(<span style="color: red">*</span>)</label>
						<input  type="text" id="diachi" name="diachi"  class="form-control"  placeholder="Nhập địa chỉ" ></input>
					</div>
					<div class="form-group">
						<label>Điện thoại(<span style="color: red">*</span>)</label>
						<input  type="text" id="dienthoai" name="dienthoai" class="form-control"  placeholder="Nhập số điện thoại" ></input>
					</div>
					<div class="form-group">
						<label>Email(<span style="color: red">*</span>)</label>
						<input  type="email" id="email" name="email"  class="form-control"  placeholder="Nhập email" ></input>
					</div>
					<div class="form-group">
						<label>Lĩnh vực(<span style="color: red">*</span>)</label>
						<input  type="text" id="linhvuc" name="linhvuc"  class="form-control"  placeholder="Nhập lĩnh vực" ></input>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					<button type="button" class="btn btn-primary themdonvi">Lưu</button>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="editDv">
		<div class="modal-dialog">
			<div class="modal-content" style="width: 650px;">
				<div class="modal-header">
					
					<h4 class="modal-title">Sửa thông tin đơn vị thực hiện</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Tên đơn vị(<span style="color: red">*</span>)</label>
						<input  type="text" id="ten_dv1" name="ten_dv1"  class="form-control"  placeholder="Nhập tên đơn vị" ></input>
					</div>
					<div class="form-group">
						<label>Địa chỉ(<span style="color: red">*</span>)</label>
						<input  type="text" id="diachi1" name="diachi1"  class="form-control"  placeholder="Nhập địa chỉ" ></input>
					</div>
					<div class="form-group">
						<label>Điện thoại(<span style="color: red">*</span>)</label>
						<input  type="text" id="dienthoai1" name="dienthoai1" class="form-control"  placeholder="Nhập số điện thoại" ></input>
					</div>
					<div class="form-group">
						<label>Email(<span style="color: red">*</span>)</label>
						<input  type="email" id="email1" name="email1"  class="form-control"  placeholder="Nhập email" ></input>
					</div>
					<div class="form-group">
						<label>Lĩnh vực(<span style="color: red">*</span>)</label>
						<input  type="text" id="linhvuc1" name="linhvuc1"  class="form-control"  placeholder="Nhập lĩnh vực" ></input>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					<button type="button" class="btn btn-primary suadonvi">Lưu</button>
				</div>
			</div>
		</div>
	</div>
	<input type="hidden" id="hiddenedit">
	

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

	$('.themdonvi').on('click', function(e){
		e.preventDefault();
		var link = "{{asset('')}}/themdonvi";
		$ten = $('#ten_dv').val();
		$dc = $('#diachi').val();
		$dt = $('#dienthoai').val();
		$e = $('#email').val();
		$.ajax({
			url:link,
			type:'POST',
			data:{
				ten_dv: $('#ten_dv').val(),
				diachi: $('#diachi').val(),
				dienthoai: $('#dienthoai').val(),
				email:$('#email').val(),
				linhvuc:$('#linhvuc').val()
			},
			success:function(){
				toastr.success('Thêm mới thành công');
				window.location.href = "{{asset('')}}donvi";   
			},

			error:function(jqXHR,textStatus,errorThrown){
				if (jqXHR.responseJSON.errors.ten_dv!==undefined){
					toastr.error(jqXHR.responseJSON.errors.ten_dv[0]);
				}
				if (jqXHR.responseJSON.errors.diachi!==undefined){
					toastr.error(jqXHR.responseJSON.errors.diachi[0]);
				}
				if (jqXHR.responseJSON.errors.dienthoai!==undefined){
					toastr.error(jqXHR.responseJSON.errors.dienthoai[0]);
				}
				if (jqXHR.responseJSON.errors.email!==undefined){
					toastr.error(jqXHR.responseJSON.errors.email[0]);
				}
				if (jqXHR.responseJSON.errors.linhvuc!==undefined){
					toastr.error(jqXHR.responseJSON.errors.linhvuc[0]);
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
			url:"{{asset('')}}suadonvi/"+id,
			success: function(response){
				console.log(response);
				
				$('#ten_dv1').val(response.data.ten_dv);
				$('#diachi1').val(response.data.diachi);
				$('#dienthoai1').val(response.data.dienthoai);
				$('#email1').val(response.data.email);
				$('#linhvuc1').val(response.data.linhvuc);
			}
		});
	});

	$('.suadonvi').on('click', function(e){
		e.preventDefault();
		var id = $('#hiddenedit').attr('data-id');
		$.ajax({
			url:"{{asset('')}}updatedv/"+id,
			type:"POST",
			data:{
				ten_dv: $('#ten_dv1').val(),
				diachi: $('#diachi1').val(),
				dienthoai: $('#dienthoai1').val(),
				email:$('#email1').val(),
				linhvuc:$('#linhvuc1').val()
			},
			success:function(){
				toastr.success('Sửa thành công');
				window.location.href = "{{asset('')}}donvi";   
			},

			error:function(jqXHR,textStatus,errorThrown){
				if (jqXHR.responseJSON.errors.ten_dv!==undefined){
					toastr.error(jqXHR.responseJSON.errors.ten_dv[0]);
				}
				if (jqXHR.responseJSON.errors.diachi!==undefined){
					toastr.error(jqXHR.responseJSON.errors.diachi[0]);
				}
				if (jqXHR.responseJSON.errors.dienthoai!==undefined){
					toastr.error(jqXHR.responseJSON.errors.dienthoai[0]);
				}
				if (jqXHR.responseJSON.errors.email!==undefined){
					toastr.error(jqXHR.responseJSON.errors.email[0]);
				}
				if (jqXHR.responseJSON.errors.linhvuc!==undefined){
					toastr.error(jqXHR.responseJSON.errors.linhvuc[0]);
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
          url: "{{ asset('') }}deletedv/"+id,
          success: function(response){
            window.location.href = "{{asset('')}}/donvi";
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