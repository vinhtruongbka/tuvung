@extends('backend.admin')
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
		           {{-- @foreach ($sidebars as $sidebar)
		              <option value="{{$sidebar->id}}">{{$sidebar->Title}}</option>
		           @endforeach --}}
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
		@endsection