@extends('backend.admin')
@section('content_admin')
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
  <h2>Địa chỉ <small>sub title</small></h2>
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
  <div class="row">
    <div class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2">
       <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" novalidate action="{{ route('admin.updateAddress') }}" accept-charset="utf-8" enctype="multipart/form-data" method="post">
  <div class="form-group">
    <label for="">Nội dung</label>
      <textarea name="desc" id="desc">{{ $address->content }}</textarea>
      <input type="hidden"  name="id" class="form-control" value="{{ $address->id}}">
  </div>
  <div class="form-group upload">
    <label>Ảnh</label>
      <input type="hidden"  id="image_link_upload" name="images" class="form-control" value="{{ $address->images  }}">
    <img src="./uploads/{{ $address->images  }}" class="img-responsive modal_image" alt="Hình đại diện" data-toggle="modal" href='#modal-id' style="cursor: pointer;width: 150px">

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
   <input type="hidden" name="_token" value="{{csrf_token()}}">
  <button type="submit" class="btn btn-primary">Thay đổi</button>
</form>
    </div>
  </div>
</div>
</div>
@endsection