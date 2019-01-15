@extends('backend.admin')
@section('content_admin')
<div class="col-md-12 col-sm-6 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2>Thêm mới từ vựng <small>Thêm từ vựng theo danh sách</small></h2>
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
	<form id="demo-form5" data-parsley-validate action="{{ route('admin.postLearningWords') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<select id="heard" class="form-control" required name="idCategory">
				@foreach ($desc as $des)
					<option value="{{$des->categorychiId}}">{{$des->categorychiTitle}}</option>
				@endforeach
			</select>
			<br>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Tiếng hàn</th>
						<th>Tiếng việt</th>
						<th>Hình ảnh</th>
						<th>Audio</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td><input type="text" name="korean1"  /></td>
						<td><input type="text" name="vietnamese1"  /></td>
						<td><input type="file" name="image1"  /></td>
						<td><input type="file" name="audio1"  /></td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td><input type="text" name="korean2"  /></td>
						<td><input type="text" name="vietnamese2"  /></td>
						<td><input type="file" name="image2"  /></td>
						<td><input type="file" name="audio2"  /></td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td><input type="text" name="korean3"  /></td>
						<td><input type="text" name="vietnamese3"  /></td>
						<td><input type="file" name="image3"  /></td>
						<td><input type="file" name="audio3"  /></td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td><input type="text" name="korean4"  /></td>
						<td><input type="text" name="vietnamese4"  /></td>
						<td><input type="file" name="image4"  /></td>
						<td><input type="file" name="audio4"  /></td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td><input type="text" name="korean5"  /></td>
						<td><input type="text" name="vietnamese5"  /></td>
						<td><input type="file" name="image5"  /></td>
						<td><input type="file" name="audio5"  /></td>
					</tr>
				</tbody>
			</table>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<button class="btn btn-primary" type="submit">Thêm mới</button>

	</form>
		</div>
	</div>
</div>
@endsection