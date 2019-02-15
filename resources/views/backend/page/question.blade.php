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
			<select id="heard" class="form-control" name="idCategorychi">
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
					<?php for ($i=0; $i < 6; $i++): ?>
						<tr>
							<th scope="row">{{$i}}</th>
							<td><input type="text" name="koreantrue{{$i}}" class="form-control" /></td>
							<td><input type="text" name="vietnamtrue{{$i}}" class="form-control"/></td>
							<td>
								<input type="file" name="images{{$i}}"  class="form-control"/>
							</td>
							<td>
								<input type="file" name="audio{{$i}}"  class="form-control"/>
							</td>
						</tr>
					<?php endfor ?>
				</tbody>
			</table>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<button class="btn btn-primary" type="submit">Thêm mới</button>

	</form>
	 <div class="modal fade my-modal" id="modal-id">
         <div class="modal-dialog  modal-lg">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title">Upload ảnh</h4>
                 </div>
                 <div class="modal-body">
                     <iframe   src="file/dialog.php?field_id=image_link_upload" style="border: none;width: 100%;height: 400px;">
                      </iframe>
                 </div>
             </div>
         </div>
     </div>
		</div>
	</div>
</div>
@endsection