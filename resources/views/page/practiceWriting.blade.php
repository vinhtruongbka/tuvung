@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
      <div class="klpt">
        <div class="tabbed_area">
            <ul class="tabs">
                <li><a href="#" title="chaining" class="active tab">Viết - Theo</a></li>
                <li><a href="{{ route('home.PracticeWriting',$desc2->categorychiSlug) }}" title="chaining" class="tab">Đảo câu</a></li>
                <li><a href="{{ route('home.LearningWords',['slug1' => $desc2->categorySlug, 'slug2' => $desc2->categorychiSlug])}}" class="tab">Quay lại</a></li>
            </ul>
        <div class="title_test">{{ $desc2->categorychiTitle }}</div>
        <div id="chaining" class="contenttab">
          @foreach ($desc as $des)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="margin-bottom: 10px">       
            <div class="itemtitle">
              <p class="vietsub">{{$des->koreantrue}}</p>
              <input id="menu" type="text" class="type_text_boder" placeholder="{{$des->vietnamtrue}}" tabindex="1" maxlength="100" size="20" value="" data-val="{{$des->koreantrue}}" name=""></div>
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
