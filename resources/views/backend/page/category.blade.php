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
				<th>Chức năng</th>
				<th>Đường dẫn</th>
				<th>Thay đổi</th>
				<th>Xóa</th>
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
					{{$des->Title}}
				</td>
				<td >
					@if ($des->Status == 0)
						{{"Danh mục"}}
					@elseif ($des->Status == 1)
						{{"Bài viết"}}
					
					@endif
				</td>
				<td >
					{{$des->Slug}}
				</td>
				<td>
					<a href="{{ route('admin.getIdCategory',$des->id) }}" class="editCategory"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal3">Sửa</button></a>
				</td>
				<td>
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
				<select id="heard" class="form-control" required name="SidebarID" style="text-transform: capitalize;">
		           @foreach ($sidebars as $sidebar)
		              <option value="{{$sidebar->id}}" style="text-transform: capitalize;">{{$sidebar->Title}}</option>
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

{{-- @extends('backend.admin')
@section('content_admin')
<div class="col-md-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2>Danh mục <small>Thêm mới danh mục</small></h2>
			<ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Settings 1</a>
						</li>
						<li><a href="#">Settings 2</a>
						</li>
					</ul>
				</li>
				<li><a class="close-link"><i class="fa fa-close"></i></a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">

			<!-- start form for validation -->
			<form id="demo-form2" data-parsley-validate action="{{ route('adminPostCategory') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<label for="fullname">Tiêu đề * :</label>
				<input type="text" id="name2" class="form-control" name="title" required />
				<br/>
				<label for="fullname">Đường dẫn * :</label>
				<input type="text" id="slug2" class="form-control" name="slug" required />
				<br/>
				<label for="fullname">Chuyên mục * :</label>
				<select id="heard" class="form-control" required name="SidebarID">
		           @foreach ($sidebars as $sidebar)
		              <option value="{{$sidebar->id}}">{{$sidebar->Title}}</option>
		           @endforeach
		        </select>
		        <br/>
		        <label >Thể loại * :</label>
		        <div>
		        	<label class="radio-inline">
		        		<input type="radio" value="1" checked name="optradio">Thông báo
		        	</label>
		        	<label class="radio-inline">
		        		<input type="radio" value="0" name="optradio">Từ vựng
		        	</label>
		        	<label class="radio-inline">
		        		<input type="radio" value="2" name="optradio">Đề thi
		        	</label>
		        	<label class="radio-inline">
		        		<input type="radio" value="3" name="optradio">Câu hỏi
		        	</label>
		        </div>
  				<br/>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button class="btn btn-primary" type="submit">Thêm mới</button>

					</form>
					<!-- end form for validations -->

				</div>
			</div>
		</div>
		@endsection --}}