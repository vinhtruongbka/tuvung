@extends('backend.admin')
@section('content_admin')
<div class="x_title">
	<div class="clearfix"></div>
</div>
<div class="x_content">
	<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Chuyên mục</th>
				<th>Hàn</th>
				<th>Việt</th>
				<th>Ảnh</th>
				<th>Audio</th>
				<th>Thay đổi</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($desc as $des)

			<!-- start form for validation -->
			<tr>
				<td>
					{{$des->categorychiTitle}}
				</td>
				<td>
					{{$des->koreantrue}}
				</td>
				<td>
					{{$des->vietnamtrue}}
				</td>
				<td>
					<img src="./uploads/images/{{$des->images}}" class="img-responsive">
				</td>
				<td>
					<div class="voca_children">
		              <a href="./uploads/audio/{{$des->audio}}" class="sm2_button sound_button">
		              </a>
		          	</div>
				</td>
				<td>
					<a href="{{ route('admin.editVocabulary',$des->id) }}" class="editVocabulary"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal4">Sửa</button></a>
				</td>
				<td>
					<a href="{{ route('admin.deleteVocabulary',$des->id) }}"> <button type="button" class="btn btn-danger btn-sm">Xóa</button></a>
				</td>

			</tr>

			<!-- end form for validations -->
			@endforeach

		</tbody>
	</table>

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
	      	<form id="" data-parsley-validate action="{{ route('admin.updateVocabulary') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<label for="fullname">Tiếng Hàn * :</label>
				<input type="text" name="koreantrue" class="form-control" id="editKoreaVocabulary" />
				<input type="hidden" id="editIdVocabulary"  class="form-control" name="id"  />
				<br/>
				<label for="fullname">Tiếng Việt * :</label>
				<input type="text" name="vietnamtrue" class="form-control" id="editVietVocabulary" />
				<br/>
				<label for="fullname">Chuyên mục * :</label>
				<select id="heardVocabulary" class="form-control" required name="idCategorychi">
				</select>
				<br/>
				<label for="fullname">Hình ảnh * :</label>
				<input type="file" name="images" class="form-control"  id="editImageVocabulary" />
				<br/>
				<label for="fullname">Audio * :</label>
				<input type="file" name="audio" class="form-control" />
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