@extends('backend.admin')
@section('content_admin')
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
				<th>Chức năng</th>
				<th>Đường dẫn</th>
				<th>Thay đổi</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($desc as $des)

			<!-- start form for validation -->
			<tr>
				<td style="text-transform: capitalize;">
					{{$des->sidebarTitle}}
				</td>
				<td style="text-transform: capitalize;">
					{{$des->title}}
				</td>
				<td >
					@if ($des->status == 0)
						{{"Danh mục"}}
					@elseif ($des->status == 1)
						{{"Bài viết"}}
					
					@endif
				</td>
				<td >
					{{$des->slug}}
				</td>
				<td>
					<a href="{{ route('admin.getIdCategory',$des->id) }}" class="editCategory"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal3">Sửa</button></a>
					<a href="{{ route('admin.DeleteCategory',$des->id) }}"> <button type="button" class="btn btn-danger btn-sm">Xóa</button></a>
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
        <h4 class="modal-title">Thêm mới danh mục</h4>
      </div>
      <div class="modal-body">
        <form id="demo-form2" data-parsley-validate action="{{ route('adminPostCategory') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<label for="fullname">Tiêu đề * :</label>
				<input type="text" id="name2" class="form-control" name="title" required />
				<br/>
				<label for="fullname">Đường dẫn * :</label>
				<input type="text" id="slug2" class="form-control" name="slug" required />
				<br/>
				<label for="fullname">Chuyên mục * :</label>
				<select id="heard" class="form-control" required name="idSidebar" style="text-transform: capitalize;">
		           @foreach ($sidebars as $sidebar)
		              <option value="{{$sidebar->id}}" style="text-transform: capitalize;">{{$sidebar->title}}</option>
		           @endforeach
		        </select>
		        <br/>
		        <label >Chức năng * :</label>
		        <div>
		        	<label class="radio-inline">
		        		<input type="radio" value="0" name="optradio" checked>Tạo danh mục con
		        	</label>
		        	<label class="radio-inline">
		        		<input type="radio" value="1"  name="optradio">Bài viết
		        	</label>
		        </div>
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

<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sửa danh mục</h4>
      </div>
      <div class="modal-body">
        <form id="demo-form" data-parsley-validate action="{{ route('admin.updateCategogry') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<label for="fullname">Tiêu đề * :</label>
				<input type="text" id="editTileCategory" class="form-control" name="title" required />
				<input type="hidden" id="editIdCategory"  class="form-control" name="id"  />
				<br/>
				<label for="fullname">Đường dẫn * :</label>
				<input type="text" id="editSlugCategory" class="form-control" name="slug" required />
				<br/>
				<select id="heardCategory" class="form-control" required name="idSidebar">
			           {{-- @foreach ($sidebars as $sidebar)
			              <option value="{{$sidebar->id}}" >{{$sidebar->Title}}</option>
			           @endforeach --}}
		        </select>
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
@endsection