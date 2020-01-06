@extends('layouts.master')
@section('noidung')
<table>
  <tr>
    <th>ĐỀ TÀI LĨNH VỰC TRỒNG TRỌT-BVTV</th>
  </tr>
  <tr>
    <td style="padding: 0">
    <div>
  <div class="table-responsive">
    <table class="table table-bordered" style="background-color: #caceca; margin:0 ">
      <thead>
        <tr>
          <th style="width: 5%;color: white;background-color: #4a3c8c">STT</th>
          <th style="color: white;background-color: #4a3c8c">Tên đề tài</th>
           <th style="color: white;background-color: #4a3c8c;width: 20%">Chủ nhiệm</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Thời gian</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Trạng thái</th>

        </tr>
      </thead>
      <tbody>
        @foreach($detais as $data)
        <tr>
          <td>{{$data['id']}}</td>
          <td>{{$data['tendt']}}</td>
          <td>{{$data['chunhiem']}}</td>
          <td>{{$data['created_at']}}</td>
          <td>{{$data['trangthai']}}</td>
          @endforeach
        </tr>
      </tbody>
    </table>
    <a href="#">Xem tất cả</a>
  </div>
</div>
   </td>
</tr>
</table>
{{-- <table>
  <tr>
    <th>ĐỀ TÀI LĨNH VỰC TRỒNG TRỌT-BVTV</th>
  </tr>
  <tr>
    <td style="padding: 0">
    <div>
  <div class="table-responsive">
    <table class="table table-bordered" style="background-color: #caceca; margin:0 ">
      <thead>
        <tr>
          <th style="width: 5%;color: white;background-color: #4a3c8c">STT</th>
          <th style="color: white;background-color: #4a3c8c">Tên đề tài</th>
           <th style="color: white;background-color: #4a3c8c;width: 20%">Chủ nhiệm</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Thời gian</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Trạng thái</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Biển bản hội đồng thẩm định đề tài /dự án</td>
          <td>1</td>
          <td>NHóm1</td>
          <td>1</td>

        </tr>
      </tbody>
    </table>
    <a href="#">Xem tất cả</a>
  </div>
</div>
   </td>
</tr>
</table>
<table>
  <tr>
    <th>ĐỀ TÀI LĨNH VỰC TRỒNG TRỌT-BVTV</th>
  </tr>
  <tr>
    <td style="padding: 0">
    <div>
  <div class="table-responsive">
    <table class="table table-bordered" style="background-color: #caceca; margin:0 ">
      <thead>
        <tr>
          <th style="width: 5%;color: white;background-color: #4a3c8c">STT</th>
          <th style="color: white;background-color: #4a3c8c">Tên đề tài</th>
           <th style="color: white;background-color: #4a3c8c;width: 20%">Chủ nhiệm</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Thời gian</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Trạng thái</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Biển bản hội đồng thẩm định đề tài /dự án</td>
          <td>1</td>
          <td>NHóm1</td>
          <td>1</td>

        </tr>
      </tbody>
    </table>
    <a href="#">Xem tất cả</a>
  </div>
</div>
   </td>
</tr>
</table>
<table>
  <tr>
    <th>ĐỀ TÀI LĨNH VỰC TRỒNG TRỌT-BVTV</th>
  </tr>
  <tr>
    <td style="padding: 0">
    <div>
  <div class="table-responsive">
    <table class="table table-bordered" style="background-color: #caceca; margin:0 ">
      <thead>
        <tr>
          <th style="width: 5%;color: white;background-color: #4a3c8c">STT</th>
          <th style="color: white;background-color: #4a3c8c">Tên đề tài</th>
           <th style="color: white;background-color: #4a3c8c;width: 20%">Chủ nhiệm</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Thời gian</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Trạng thái</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Biển bản hội đồng thẩm định đề tài /dự án</td>
          <td>1</td>
          <td>NHóm1</td>
          <td>1</td>

        </tr>
      </tbody>
    </table>
    <a href="#">Xem tất cả</a>
  </div>
</div>
   </td>
</tr>
</table>
<table>
  <tr>
    <th>ĐỀ TÀI LĨNH VỰC TRỒNG TRỌT-BVTV</th>
  </tr>
  <tr>
    <td style="padding: 0">
    <div>
  <div class="table-responsive">
    <table class="table table-bordered" style="background-color: #caceca; margin:0 ">
      <thead>
        <tr>
          <th style="width: 5%;color: white;background-color: #4a3c8c">STT</th>
          <th style="color: white;background-color: #4a3c8c">Tên đề tài</th>
           <th style="color: white;background-color: #4a3c8c;width: 20%">Chủ nhiệm</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Thời gian</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Trạng thái</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Biển bản hội đồng thẩm định đề tài /dự án</td>
          <td>1</td>
          <td>NHóm1</td>
          <td>1</td>

        </tr>
      </tbody>
    </table>
    <a href="#">Xem tất cả</a>
  </div>
</div>
   </td>
</tr>
</table>
<table>
  <tr>
    <th>ĐỀ TÀI LĨNH VỰC TRỒNG TRỌT-BVTV</th>
  </tr>
  <tr>
    <td style="padding: 0">
    <div>
  <div class="table-responsive">
    <table class="table table-bordered" style="background-color: #caceca; margin:0 ">
      <thead>
        <tr>
          <th style="width: 5%;color: white;background-color: #4a3c8c">STT</th>
          <th style="color: white;background-color: #4a3c8c">Tên đề tài</th>
           <th style="color: white;background-color: #4a3c8c;width: 20%">Chủ nhiệm</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Thời gian</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Trạng thái</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Biển bản hội đồng thẩm định đề tài /dự án</td>
          <td>1</td>
          <td>NHóm1</td>
          <td>1</td>

        </tr>
      </tbody>
    </table>
    <a href="#">Xem tất cả</a>
  </div>
</div>
   </td>
</tr>
</table>
<table>
  <tr>
    <th>ĐỀ TÀI LĨNH VỰC TRỒNG TRỌT-BVTV</th>
  </tr>
  <tr>
    <td style="padding: 0">
    <div>
  <div class="table-responsive">
    <table class="table table-bordered" style="background-color: #caceca; margin:0 ">
      <thead>
        <tr>
          <th style="width: 5%;color: white;background-color: #4a3c8c">STT</th>
          <th style="color: white;background-color: #4a3c8c">Tên đề tài</th>
           <th style="color: white;background-color: #4a3c8c;width: 20%">Chủ nhiệm</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Thời gian</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Trạng thái</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Biển bản hội đồng thẩm định đề tài /dự án</td>
          <td>1</td>
          <td>NHóm1</td>
          <td>1</td>

        </tr>
      </tbody>
    </table>
    <a href="#">Xem tất cả</a>
  </div>
</div>
   </td>
</tr>
</table>
<table>
  <tr>
    <th>ĐỀ TÀI LĨNH VỰC TRỒNG TRỌT-BVTV</th>
  </tr>
  <tr>
    <td style="padding: 0">
    <div>
  <div class="table-responsive">
    <table class="table table-bordered" style="background-color: #caceca; margin:0 ">
      <thead>
        <tr>
          <th style="width: 5%;color: white;background-color: #4a3c8c">STT</th>
          <th style="color: white;background-color: #4a3c8c">Tên đề tài</th>
           <th style="color: white;background-color: #4a3c8c;width: 20%">Chủ nhiệm</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Thời gian</th>
            <th style="color: white;background-color: #4a3c8c;width: 20%">Trạng thái</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Biển bản hội đồng thẩm định đề tài /dự án</td>
          <td>1</td>
          <td>NHóm1</td>
          <td>1</td>

        </tr>
      </tbody>
    </table>
    <a href="#">Xem tất cả</a>
  </div>
</div>
   </td>
</tr>
</table> --}}
@endsection