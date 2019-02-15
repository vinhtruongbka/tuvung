@extends('backend.admin')
@section('content_admin')
<div class="x_content">

	<form class="form-horizontal form-label-left" action="{{ route('admin.updateAdmin') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		<span class="section">Thông tin admin</span>

		<div class="item form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input id="name" class="form-control col-md-7 col-xs-12" name="name" required="required" type="text" value="{{ Auth::user()->name }}">
				<input type="hidden" id="id" class="form-control col-md-7 col-xs-12" name="id" required="required" type="text" value="{{ Auth::user()->id }}">
			</div>
		</div>
		<div class="item form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email" >Email <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value="{{ Auth::user()->email }}">
			</div>
		</div>
		<div class="item form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Giới tính <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" id="birth" name="sex" required="required" class="form-control col-md-7 col-xs-12" value="{{Auth::user()->sex}}">
			</div>
		</div>
		<div class="item form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Năm sinh <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="text" id="birth" name="birth" required="required" class="form-control col-md-7 col-xs-12" value="{{ date('d-m-Y', strtotime(Auth::user()->birth))}}">
			</div>
		</div>
		<div class="item form-group">      
			<label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh đại diện</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input type="hidden"  id="image_link_upload" name="images" class="form-control" value="{{ Auth::user()->images }}">
   				<img src="./uploads/{{ Auth::user()->images}}" class="img-responsive modal_image" alt="Hình đại diện" data-toggle="modal" href='#modal-id' style="cursor: pointer;width: 150px">
			</div>
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
		<div class="ln_solid"></div>
		<div class="form-group">
			<div class="col-md-6 col-md-offset-3">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button id="send" type="submit" class="btn btn-success">Thay đổi</button>
				<a href="{{ route('admin.getPassword') }}">Thay đổi mật khẩu</a>
			</div>
		</div>
	</form>
</div>
@endsection