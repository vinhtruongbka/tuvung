@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
       <p class="warning">Cộng thêm 50% khi chuyển khoản từ ngày 01-01-2019 đến hết ngày 05-01-2019. </p>
       <!-- <!--<p class="warning">Trịnh Văn Trinh chuyển khoản 146k vào xác nhận tại facebook hoăc zalo , 16h:00 19/04 sẽ hủy lệnh giao dịch. </p>-->
    <!--<p class="warning">Từ 18-04-2018 chuyển tiền phần nội dung bắt buộc phải ghi Mã số GD hoặc email, xem trong phần Hướng dẫn nạp tiền. </p>-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
      <div class="klpt">
        <div class="tabbed_area">
            <ul class="tabs">
                <li><a href="#" title="chaining" class="active tab">Viết - Theo</a></li>
                <li><a href="{{ route('home.PracticeWriting',$desc2->categorychiSlug) }}" title="chaining" class="tab">Đảo câu</a></li>
                <li><a href="{{ route('home.LearningWords',['slug1' => $desc2->categorySlug, 'slug2' => $desc2->categorychiSlug])}}" class="tab">Quay lại</a></li>
            </ul>
        <div class="title_test">Từ vựng tiếng hàn trong ngân hàng 2000 câu hỏi phần một</div>
        <div id="chaining" class="contenttab">
          @foreach ($desc as $des)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="margin-bottom: 10px">       
            <div class="itemtitle">
              <p class="vietsub">{{$des->korean}}</p>
              <input id="menu" type="text" class="type_text_boder" placeholder="{{$des->vietnamese}}" tabindex="1" maxlength="100" size="20" value="" data-val="{{$des->korean}}" name=""></div>
            </div>
          @endforeach
          </div> 
      </div>
      </div><!--end .tabbed_area-->
     </div>
  </div>
<div class="col-xs-12 col-md-3">
<div id="aside"><!--Start bside-->
    @include('page.sidebar')
    </div> 
 </div>
 @endsection
