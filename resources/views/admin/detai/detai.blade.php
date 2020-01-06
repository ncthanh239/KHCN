@extends('layouts.masterad')
@section('noidung')
<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Quản Lý Đề Tài</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Admin</a></li>
			<li class="breadcrumb-item">Quản Lý Đề Tài</li>
			<li class="breadcrumb-item active" aria-current="page">Danh sách đề tài</li>
		</ol>
	</div>

	<!-- Row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="card mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addDt">Thêm mới</button></h6>
				</div>
				<div class="table-responsive p-3">
					<table class="table align-items-center table-flush table-hover" id="dataTableHover">
						<thead class="thead-light">
							<tr>
								<th>#</th>
								<th>Mã đề tài</th>
								<th>Tên đề tài</th>
								<th>Trạng thái</th>
								<th>Chủ nhiệm đề tài</th>
								<th>Created_at</th>
								<th>Updated_at</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>#</th>
								<th>Mã đề tài</th>
								<th>Tên đề tài</th>
								<th>Trạng thái</th>
								<th>Chủ nhiệm đề tài</th>
								<th>Created_at</th>
								<th>Updated_at</th>
								<th>Action</th>
							</tr>
						</tfoot>
						<tbody>
							@foreach($detais as $data)
							<tr>
								<td>{{$data['id']}}</td>
								<td>{{$data['ma']}}</td>
								<td>{{$data['tendt']}}</td>
								<td>{{$data['trangthai']}}</td>			
								<td>{{$data['chunhiem']}}</td>			
								<td>{{$data['created_at']}}</td>
								<td>{{$data['updated_at']}}</td>
								<td>
									<button type="button" class="btn btn-primary btn-sua" data-id="{{$data['id']}}" data-toggle="modal" data-target="#editDt"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
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

<div class="modal fade" id="addDt">
	<div class="modal-dialog">
		<div class="modal-content" style="width: 650px;">
			<div class="modal-header">
				
				<h4 class="modal-title">Thêm mới đề tài</h4>
			</div>
			{{csrf_field()}}
			<div class="modal-body">
				<div class="form-group">
					<label>Mã số(<span style="color: red">*</span>)</label>
					<input  type="text" id="ma" name="ma"  class="form-control"  placeholder="Nhập mã đề tài" ></input>
				</div>
				<div class="form-group">
					<label>Tên đề tài(<span style="color: red">*</span>)</label>
					<input  type="text" id="tendt" name="tendt"  class="form-control"  placeholder="Nhập tên đề tài" ></input>
				</div>
				<div class="form-group">
					<label>Mục tiêu(<span style="color: red">*</span>)</label>
					<input  type="text" id="muctieu" name="muctieu"  class="form-control"  placeholder="Nhập mục tiêu đề tài" ></input>
				</div>
				<div class="form-group">
					<label>Kết quả đạt được(<span style="color: red">*</span>)</label>
					<input  type="text" id="ketqua" name="ketqua"  class="form-control"  placeholder="Nhập kết quả đạt được" ></input>
				</div>
				<div class="form-group">
					<div style="width: 49%;display: inline-block;margin-left: 10px;">
						

					<label>Chủ nhiệm đề tài(<span style="color: red">*</span>)</label>
						<select name="chunhiem" id="chunhiem" class="form-control" required="required">
							@if(count($chunhiems)>0) @foreach ($chunhiems as $data)
							<option value="{{$data->hoten}}" name="chunhiem_id">{{$data->hoten}}</option>
							@endforeach @endif 
						</select>

						<label>Loại đề tài(<span style="color: red">*</span>)</label>
						<select name="loaidt" id="loaidt" class="form-control" required="required">
							
							<option value="Tuyển chọn" name="">Tuyển chọn</option>
							
							
						</select>

						<label>Lĩnh vực(<span style="color: red">*</span>)</label>
						<select name="linhvuc" id="linhvuc" class="form-control" required="required">
							@if(count($donvis)>0) @foreach ($donvis as $data)
							<option value="{{$data->linhvuc}}" name="">{{$data->linhvuc}}</option>
							@endforeach @endif 
						</select>
					</div>
					<div style="width: 49%; float: left;">
						<label>Đơn vị(<span style="color: red">*</span>)</label>
						<select name="donvi" id="donvi" class="form-control" required="required">
							@if(count($donvis)>0) @foreach ($donvis as $data)
							<option value="{{$data->ten_dv}}" name="donvi_id">{{$data->ten_dv}}</option>
							@endforeach @endif 
						</select>

						<label>Cấp thực hiện(<span style="color: red">*</span>)</label>
					<select name="capth" id="capth" class="form-control" required="required">	
						<option value="Nhà nước" name="">Nhà nước</option>
						<option value="Doanh nghiệp" name="">Doanh nghiệp</option>
					</select>
					<label>Trạng thái(<span style="color: red">*</span>)</label>
					<select name="trangthai" id="trangthai" class="form-control" required="required">	
						<option value="Chưa triển khai" name="">Chưa triển khai</option>
						<option value="Đã triển khai" name="">Đã triển khai</option>
					</select>
					</div>
				</div>


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				<button type="button" class="btn btn-primary themdetai">Lưu</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="editDt">
	<div class="modal-dialog">
		<div class="modal-content" style="width: 650px;">
			<div class="modal-header">
				
				<h4 class="modal-title">Sửa chi tiết đề tài</h4>
			</div>
			{{csrf_field()}}
			<div class="modal-body">
				<div class="form-group">
					<label>Mã số(<span style="color: red">*</span>)</label>
					<input  type="text" id="ma1" name="ma1"  class="form-control"  placeholder="Nhập mã đề tài" ></input>
				</div>
				<div class="form-group">
					<label>Tên đề tài(<span style="color: red">*</span>)</label>
					<input  type="text" id="tendt1" name="tendt1"  class="form-control"  placeholder="Nhập tên đề tài" ></input>
				</div>
				<div class="form-group">
					<label>Mục tiêu(<span style="color: red">*</span>)</label>
					<input  type="text" id="muctieu1" name="muctieu1"  class="form-control"  placeholder="Nhập mục tiêu đề tài" ></input>
				</div>
				<div class="form-group">
					<label>Kết quả đạt được(<span style="color: red">*</span>)</label>
					<input  type="text" id="ketqua1" name="ketqua1"  class="form-control"  placeholder="Nhập kết quả đạt được" ></input>
				</div>
				<div class="form-group">
					<div style="width: 49%;display: inline-block;margin-left: 10px;">
						

					<label>Chủ nhiệm đề tài(<span style="color: red">*</span>)</label>
						<select name="chunhiem1" id="chunhiem1" class="form-control" required="required">
							@if(count($chunhiems)>0) @foreach ($chunhiems as $data)
							<option value="{{$data->hoten}}" name="chunhiem_id">{{$data->hoten}}</option>
							@endforeach @endif 
						</select>

						<label>Loại đề tài(<span style="color: red">*</span>)</label>
						<select name="loaidt1" id="loaidt1" class="form-control" required="required">
							
							<option value="Tuyển chọn" name="">Tuyển chọn</option>
							
							
						</select>

						<label>Lĩnh vực(<span style="color: red">*</span>)</label>
						<select name="linhvuc1" id="linhvuc1" class="form-control" required="required">
							@if(count($donvis)>0) @foreach ($donvis as $data)
							<option value="{{$data->linhvuc}}" name="">{{$data->linhvuc}}</option>
							@endforeach @endif 
						</select>
					</div>
					<div style="width: 49%; float: left;">
						<label>Đơn vị(<span style="color: red">*</span>)</label>
						<select name="donvi1" id="donvi1" class="form-control" required="required">
							@if(count($donvis)>0) @foreach ($donvis as $data)
							<option value="{{$data->ten_dv}}" name="donvi_id">{{$data->ten_dv}}</option>
							@endforeach @endif 
						</select>

						<label>Cấp thực hiện(<span style="color: red">*</span>)</label>
					<select name="capth1" id="capth1" class="form-control" required="required">	
						<option value="Nhà nước" name="">Nhà nước</option>
						<option value="Doanh nghiệp" name="">Doanh nghiệp</option>
					</select>
					<label>Trạng thái(<span style="color: red">*</span>)</label>
					<select name="trangthai1" id="trangthai1" class="form-control" required="required">	
						<option value="Chưa triển khai" name="">Chưa triển khai</option>
						<option value="Đã triển khai" name="">Đã triển khai</option>
					</select>
					</div>
				</div>


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				<button type="button" class="btn btn-primary suadetai">Lưu</button>
			</div>
		</div>
	</div>
</div>
<input type="hidden" id="hiddenedit">
@endsection
@section('foot')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$('.themdetai').on('click', function(e){
		e.preventDefault();
		var link = "{{asset('')}}/themdetai";
		$.ajax({
			url:link,
			type:'POST',
			data:{
				ma: $('#ma').val(),
				tendt: $('#tendt').val(),
				muctieu: $('#muctieu').val(),
				ketqua: $('#ketqua').val(),
				donvith: $('#donvi').val(),
				capth: $('#capth').val(),
				trangthai: $('#trangthai').val(),
				chunhiem: $('#chunhiem').val(),
				loaidt: $('#loaidt').val(),
				linhvuc: $('#linhvuc').val()
			},
		success:function(){
				toastr.success('Thêm mới thành công');
				window.location.href = "{{asset('')}}detai";   
			},
		error:function(jqXHR,textStatus,errorThrown){
				if (jqXHR.responseJSON.errors.ma!==undefined){
					toastr.error(jqXHR.responseJSON.errors.ma[0]);
				}
				if (jqXHR.responseJSON.errors.tendt!==undefined){
					toastr.error(jqXHR.responseJSON.errors.tendt[0]);
				}
				if (jqXHR.responseJSON.errors.muctieu!==undefined){
					toastr.error(jqXHR.responseJSON.errors.muctieu[0]);
				}
				if (jqXHR.responseJSON.errors.ketqua!==undefined){
					toastr.error(jqXHR.responseJSON.errors.ketqua[0]);
				}
				if (jqXHR.responseJSON.errors.donvi!==undefined){
					toastr.error(jqXHR.responseJSON.errors.donvi[0]);
				}
				if (jqXHR.responseJSON.errors.capth!==undefined){
					toastr.error(jqXHR.responseJSON.errors.capth[0]);
				}
				if (jqXHR.responseJSON.errors.trangthai!==undefined){
					toastr.error(jqXHR.responseJSON.errors.trangthai[0]);
				}
				if (jqXHR.responseJSON.errors.chunhiem!==undefined){
					toastr.error(jqXHR.responseJSON.errors.chunhiem[0]);
				}
				if (jqXHR.responseJSON.errors.loaidt!==undefined){
					toastr.error(jqXHR.responseJSON.errors.loaidt[0]);
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
			url:"{{asset('')}}suadetai/"+id,
			success: function(response){
				console.log(response);
				$('#ma1').val(response.data.ma);
				$('#tendt1').val(response.data.tendt);
				$('#muctieu1').val(response.data.muctieu);
				$('#ketqua1').val(response.data.ketqua);
				$('#donvi1').val(response.data.donvith);
				$('#capth1').val(response.data.capth);
				$('#trangthai1').val(response.data.trangthai);
				$('#chunhiem1').val(response.data.chunhiem);
				$('#loaidt1').val(response.data.loaidt);
				$('#linhvuc1').val(response.data.linhvuc);
			}
		});
	});

$('.suadetai').on('click', function(e){
	e.preventDefault();
	var id = $('#hiddenedit').attr('data-id');
	$.ajax({
		url:"{{asset('')}}updatedt/"+id,
			type:"POST",
			data:{
				ma: $('#ma1').val(),
				tendt: $('#tendt1').val(),
				muctieu: $('#muctieu1').val(),
				ketqua: $('#ketqua1').val(),
				donvith: $('#donvi1').val(),
				capth: $('#capth1').val(),
				trangthai: $('#trangthai1').val(),
				chunhiem: $('#chunhiem1').val(),
				loaidt: $('#loaidt1').val(),
				linhvuc: $('#linhvuc1').val()
			},
		success:function(){
				toastr.success('Sửa thành công');
				window.location.href = "{{asset('')}}detai";   
			},
		error:function(jqXHR,textStatus,errorThrown){
				if (jqXHR.responseJSON.errors.ma!==undefined){
					toastr.error(jqXHR.responseJSON.errors.ma[0]);
				}
				if (jqXHR.responseJSON.errors.tendt!==undefined){
					toastr.error(jqXHR.responseJSON.errors.tendt[0]);
				}
				if (jqXHR.responseJSON.errors.muctieu!==undefined){
					toastr.error(jqXHR.responseJSON.errors.muctieu[0]);
				}
				if (jqXHR.responseJSON.errors.ketqua!==undefined){
					toastr.error(jqXHR.responseJSON.errors.ketqua[0]);
				}
				if (jqXHR.responseJSON.errors.donvi!==undefined){
					toastr.error(jqXHR.responseJSON.errors.donvi[0]);
				}
				if (jqXHR.responseJSON.errors.capth!==undefined){
					toastr.error(jqXHR.responseJSON.errors.capth[0]);
				}
				if (jqXHR.responseJSON.errors.trangthai!==undefined){
					toastr.error(jqXHR.responseJSON.errors.trangthai[0]);
				}
				if (jqXHR.responseJSON.errors.chunhiem!==undefined){
					toastr.error(jqXHR.responseJSON.errors.chunhiem[0]);
				}
				if (jqXHR.responseJSON.errors.loaidt!==undefined){
					toastr.error(jqXHR.responseJSON.errors.loaidt[0]);
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
          url: "{{ asset('') }}deletedt/"+id,
          success: function(response){
            window.location.href = "{{asset('')}}/detai";
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