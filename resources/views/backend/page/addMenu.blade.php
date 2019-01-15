@extends('backend.admin')
@section('content_admin')
<div class="col-md-6 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2>Menu <small>Thêm mới menu</small></h2>
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
			<form id="demo-form3" data-parsley-validate action="{{ route('adminPostMenu') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<label for="fullname">Tiêu đề * :</label>
				<input type="text" id="name4" class="form-control" name="title" required />
				<br/>
				<label for="fullname">Đường dẫn * :</label>
				<input type="text" id="slug4" class="form-control" name="slug" required />
				<br/>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button class="btn btn-primary" type="submit">Thêm mới</button>

			</form>
			<!-- end form for validations -->

		</div>
	</div>
	<br/>
</div>
@endsection