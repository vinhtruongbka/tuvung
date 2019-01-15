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
				<th>Tên danh mục từ vựng</th>
				<th>Đường dẫn</th>
				<th>Thay đổi</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($desc as $des)

			<!-- start form for validation -->
			<tr>
				<td>
					<div class="div{{$des->categorychiId}}">{{$des->categoryTitle}}</div>
				</td>
				<td>
					<div class="div{{$des->categorychiId}}">{{$des->categorychiTitle}}</div>
				</td>
				<td>
					<div class="div{{$des->categorychiId}}">{{$des->categorychiSlug}}</div>
				</td>
				<td>
					<a href="{{ route('admin.getCategoryListDetail',$des->categorychiId) }}" class="edit"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal4">Sửa</button></a>
				</td>
				<td>
					<a href="{{ route('admin.DeleteCategoryListDetail',$des->categorychiId) }}"> <button type="button" class="btn btn-danger btn-sm">Xóa</button></a>
				</td>

			</tr>

			<!-- end form for validations -->
			@endforeach

		</tbody>
	</table>

	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm mới danh mục con</h4>
      </div>
      <div class="modal-body">

      	<form id="demo-form" data-parsley-validate action="{{ route('admin.postQuesetion') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">

				<label for="fullname">Tiêu đề * :</label>
				<input type="text" id="name3" class="form-control" name="title" required />
				<br/>
				<label for="fullname">Đường dẫn * :</label>
				<input type="text" id="slug3" class="form-control" name="slug" required />
				<br/>
				<label for="fullname">Chuyên mục * :</label>
				<select id="heard" class="form-control" required name="idCategory">
					@foreach ($categorys as $category)
					<option value="{{$category->id}}">{{$category->Title}}</option>
					@endforeach
				</select>
				<br/>
				<div>
		        	<label class="radio-inline">
		        		<input type="radio" value="0" name="optradio" checked>Từ vựng
		        	</label>
		        	<label class="radio-inline">
		        		<input type="radio" value="1"  name="optradio">Hình ảnh
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

	<!-- Modal -->
	<div id="myModal4" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Modal Header</h4>
	      </div>
	      <div class="modal-body">
	      	<form id="editCategoryChi-form" data-parsley-validate action="{{ route('admin.updateCategogryChi') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">

				<label for="fullname">Tiêu đề * :</label>
				<input type="text" id="editTitle" class="form-control" name="title"  />
				<input type="hidden" id="editId"  class="form-control" name="id"  />
				<br/>
				<label for="fullname">Đường dẫn * :</label>
				<input type="text" id="editSlug" class="form-control" name="slug"  />
				<br/>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button class="btn btn-primary" type="submit">Thay đổi</button>

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