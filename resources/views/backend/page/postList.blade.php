@extends('backend.admin')
@section('content_admin')
<div class="x_title">
	<a href="{{ route('admin.addPost') }}">
		<button type="button" class="btn btn-primary">Thêm mới</button>
	</a>
	<div class="clearfix"></div>
</div>
<div class="x_content">
	<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Chuyên mục</th>
				<th>Tiêu đề</th>
				<th>Hình đại diện</th>
				<th>Thay đổi</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($news as $new)

			<!-- start form for validation -->
			<tr>
				<td>
					<div >{{$new->categoryTitle}}</div>
				</td>
				<td>
					<div ">{{$new->title}}</div>
				</td>
				<td>
					<div><img src="./uploads/{{$new->images}}" alt="" class="img-responsive" style="width: 100px;"></div>
				</td>
				<td>
					<a href="{{ route('admin.getEditPost',$new->slug) }}"><button type="button" class="btn btn-info btn-sm">Sửa</button></a>
					<a href="{{ route('admin.deleteNews',$new->id) }}"> <button type="button" class="btn btn-danger btn-sm">Xóa</button></a>
				</td>
			</tr>

			<!-- end form for validations -->
			@endforeach

		</tbody>
	</table>
	</div>
@endsection