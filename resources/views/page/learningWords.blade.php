@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
    @if ($desc !=null && $desc2 !=null)
      <div class="pageindex">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
    <div class="klpt">
    <div class="tabbed_area">
    <ul class="tabs">
        <li><a href="javascript:" title="featured" class="tab witch_tabs">Học Từ Vựng</a></li>
        <li><a href="{{ route('home.PracticeWriting',$desc2->categorychiSlug) }}" title="featured" class="tab witch_tabs">Luyện Viết</a></li>
        <li><a href="{{ route('home.getQuizz',$desc2->categorychiSlug) }}" title="news" class="tab witch_tabs">Trắc Nghiệm</a></li>
        <li><a href="{{ route('home.practiceListening',$desc2->categorychiSlug) }}" class="tab witch_tabs">Luyện Nghe</a></li>
        <li><a href="{{ route('home.Quesetion',$desc2->categoryslug)}}" class="tab">quay lại</a></li>
    </ul>
    </div>
    <div class="title_test">{{ $desc2->categorychiTitle }}</div>

         @if ($desc2->categorychiStatus == 0)
            @foreach ($desc as $des)
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding">
            <div class="voca_children">
              <a href="./uploads/audio/{{$des->audio}}" class="sm2_button sound_button">
              </a><span style="padding-left: 10px">{{$des->koreantrue}}: {{$des->vietnamtrue}}</span></div>
            </div>
          @endforeach
         @else
           <div class="list_show_img"> 
          <div class="voca_list">
            @foreach ($desc as $des)
                  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 padding">
                  <div class="voca_list_show_img">
                         <div class="voca_show_img"><img class="vcimg" src="./uploads/images/{{$des->images}}"></div>
                         <div class="voca_children_img"><a href="./uploads/audio/{{$des->audio}}" class="sm2_button sound_button"></a>{{ $des->koreantrue }}</div>
                         <div class="voca_childrenb_img">{{$des->vietnamtrue}}</div>
                   </div>
             </div>
            @endforeach
          </div>
      </div>
         @endif

    </div>
    </div>
  </div>
    @else
      <div class="alert alert-danger" style="margin-top: 20px;">
          Hiện tại chưa có từ vựng nào!
      </div>
    @endif
<hr />   
  </div>
<div class="col-xs-12 col-md-3">
<div id="aside"><!--Start bside-->
    @include('page.sidebar')
    </div> 
 </div>
 @endsection
