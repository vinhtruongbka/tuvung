@extends('backend.admin')
@section('content_admin')
<div class="x_content">

	<form class="form-horizontal form-label-left" action="{{ route('admin.updateSlide') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		<span class="section">Thay đổi banner</span>
		<div class="item form-group">      
			<div class="col-md-12 col-sm-12 col-xs-12">
				<input type="hidden"  id="image_link_upload" name="images" class="form-control" value="{{ $slide->images }}">
				<input type="hidden" name="id" value="{{ $slide->id}}">
   				<img src="./uploads/{{ $slide->images}}" class="img-responsive modal_image" alt="Hình đại diện" data-toggle="modal" href='#modal-id' style="cursor: pointer;">
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
			<div class="col-md-12">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button id="send" type="submit" class="btn btn-success">Thay đổi</button>
			</div>
		</div>
	</form>
</div>
@endsection