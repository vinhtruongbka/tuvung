@extends('backend.admin')
@section('content_admin')
<div class="col-md-12 col-xs-12">
	<div class="x_title">
	 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm mới</button>
	<div class="clearfix"></div>
</div>
<div class="x_content">
	<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Chuyên mục</th>
				<th>Tên danh mục</th>
				<th>Đường dẫn</th>
				<th>Thay đổi</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($sidebars as $sidebar)

			<!-- start form for validation -->
			<tr>
				<td>
					@if ($sidebar->status == 0)
						{{"Sidebar"}}
					@else
						{{"Menu"}}
					@endif
				</td>
				<td style="text-transform: capitalize;">
					{{$sidebar->Title}}
				</td>
				<td >
					{{$sidebar->slug}}
				</td>
				<td>
					<a href="{{ route('admin.getIdSidebar',$sidebar->id) }}" class="editSidebar"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal2">Sửa</button></a>
				</td>
				<td>
					<a href="{{ route('admin.DeleteSidebar',$sidebar->id) }}"> <button type="button" class="btn btn-danger btn-sm">Xóa</button></a>
				</td>

			</tr>

			<!-- end form for validations -->
			@endforeach

		</tbody>
	</table>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm mới Menu chính</h4>
      </div>
      <div class="modal-body">
        <form id="demo-form" data-parsley-validate action="{{ route('adminPostSidebar') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<label for="fullname">Tiêu đề * :</label>
				<input type="text" id="name" class="form-control" name="title" required />
				<br/>
				<label for="fullname">Đường dẫn * :</label>
				<input type="text" id="slug" class="form-control" name="slug" required />
				<br/>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button class="btn btn-primary" type="submit">Thêm mới</button>

		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div>

  </div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sửa Menu chính</h4>
      </div>
      <div class="modal-body">
        <form id="demo-form" data-parsley-validate action="{{ route('admin.updateSidebar') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<label for="fullname">Tiêu đề * :</label>
				<input type="text" id="editTileSidebar" class="form-control" name="title" required />
				<input type="hidden" id="editIdSidebar"  class="form-control" name="id"  />
				<br/>
				<label for="fullname">Đường dẫn * :</label>
				<input type="text" id="editSlugSidebar" class="form-control" name="slug" required />
				<br/>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button class="btn btn-primary" type="submit">Cập nhật</button>

		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div>

  </div>
</div>
</div>

@endsection