@extends('backend.admin')
@section('content_admin')
<div class="x_content">

	<form class="form-horizontal form-label-left" action="{{ route('admin.updatePassword') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		<span class="section">Thay đổi mật khẩu</span>
		<div class="item form-group">
			<label for="password" class="control-label col-md-3">Mật khẩu mới <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input id="password" type="password" name="password" class="form-control col-md-7 col-xs-12" required="required">
				<input type="hidden" id="id" class="form-control col-md-7 col-xs-12" name="id" required="required" type="text" value="{{ Auth::user()->id }}">
			</div>
		</div>
		<div class="item form-group">
			<label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Nhập lại mật khẩu mới <span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<input id="password2" type="password" name="password2" class="form-control col-md-7 col-xs-12" required="required"
				>
			</div>
		</div>
		@if(Session::has('flag'))
		<div class="item form-group">
			<label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12 text-">
				<p class="warningr" style="color: red">{{Session::get('message')}}</p>
			</div>
		</div>  
		    @endif
		<div class="ln_solid"></div>
		<div class="form-group">
			<div class="col-md-6 col-md-offset-3">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button id="send" type="submit" class="btn btn-success">Thay đổi</button>
			</div>
		</div>
	</form>
</div>
@endsection