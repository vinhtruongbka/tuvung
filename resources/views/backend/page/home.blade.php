@extends('backend.admin')
@section('content_admin')
<div class="x_title">
 <div class="clearfix"></div>
</div>
<div class="x_content">
<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
   <tr>
    <th>Tên</th>
    <th>Email</th>
    <th>Số tiền còn lại</th>
    <th>Ngày hết hạn</th>
    <th>Giới tính</th>
    <th>Ngày-tháng-năm sinh</th>
    <th>Quản lý</th>
 </tr>
</thead>
<tbody>
   @foreach ($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{number_format($user->money)}} VNĐ</td>
        <td>{{date('d-m-Y', strtotime($user->endDate))}}</td>
        <td>{{ $user->sex }}</td>
        <td>{{ date('d-m-Y', strtotime($user->birth)) }}</td>
        <td>
            <a href="{{ route('admin.getEditUser',$user->id) }}" id="recharge">
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Nạp tiền</button>
            </a>
            <a href="{{ route('admin.deleteUser',$user->id) }}">
              <button type="button" class="btn btn-danger btn-sm">Xóa</button>
            </a>
        </td>
    </tr>
   @endforeach
 <tbody/>
</table>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Nạp tiền</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" action="{{ route('admin.updateUser') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="control-label col-sm-2">Họ tên:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" disabled>
                      <input type="hidden" class="form-control" name="idUser" id="idUser">
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2">Email:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="email" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2">Số tiền nạp:</label>
                    <div class="col-sm-10"> 
                      <input type="number" class="form-control" name="money">
                    </div>
                  </div>
                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <button type="submit" class="btn btn-primary">Nạp tiền</button>
                    </div>
                  </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
</div>
@endsection