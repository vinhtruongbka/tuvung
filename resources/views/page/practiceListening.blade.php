@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
      <div class="klpt">
        <div class="tabbed_area">
            <ul class="tabs">
                <li><a href="#" title="chaining" class="active tab">Hàn - Việt</a></li>
                <li><a href="{{ route('home.practiceListening',$desc2->categorychiSlug) }}" title="chaining" class="tab">Đảo câu</a></li>
                <li><a href="{{ route('home.LearningWords',['slug1' => $desc2->categorySlug, 'slug2' => $desc2->categorychiSlug])}}" class="tab">quay lại</a></li>
            </ul>
        <div class="title_test">{{ $desc2->categorychiTitle }}</div>
        <div class="success">Bạn chỉ cần click vào một nút nghe sau đó hệ thống tự chuyển, bạn chỉ việc nghe và luyện phát âm theo.</div>
        <br>
        <div id="chaining" class="contenttab">
          @php
            $i = 0;
            $items = 1;
          @endphp
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="learning"><p class="learning_number">{{ $items }}. </p>
            @foreach ($desc as $des)
                  <p class="learning_boder"><a href="./uploads/audio/{{$des->audio}} " class="sm2_button sound_button"></a>{{$des->koreantrue}}: {{$des->vietnamtrue}}</p>
                  @if (++$i == 5*$items)
                  @php
                    ++$items;
                  @endphp
                    </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="learning"><p class="learning_number">{{ $items }}. </p>
                  @endif
            @endforeach
             </div>
              </div>
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
