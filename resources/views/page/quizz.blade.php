@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
      <div class="klpt">
       <div class="tabbed_area">
         <ul class="tabs">                
           <li><a href="javascript:#chaining" title="chaining" class="active tab">Việt - Hàn</a></li>
           <li><a href="javascript:#news" title="news" class="tab">Hàn - Việt</a></li>
           <li><a href="javascript:#popular" title="popular" class="tab">Trắc.N - Nghe</a></li>
           <li><a href="{{ route('home.getQuizz',$desc2->categorychiSlug) }}" title="chaining" class="tab">Đảo câu</a></li>
           <li><a href="{{ route('home.LearningWords',['slug1' => $desc2->categorySlug, 'slug2' => $desc2->categorychiSlug])}}" class="tab">quay lại</a></li>
           
        </ul>
        <div id="chaining" class="contenttab">
          @foreach ($desc as $des)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">        
                         <div class="itemtitle">
                          <p class="vietsub"><img class="ses" title="" src="https://tuvungtienghan.com/themes/css/images/hoi.png" name="{{ $des->id }}v">{{$des->vietnamtrue}}</p>
                       @foreach (randomVietnam( $des,$desc3,'koreantrue') as $element)
                           <div class="itemchildenk">
                                <input type="radio" value="{{$element }}" name="{{ $des->id }}v" data-val="{{ $des->koreantrue }}">
                                <label class="lbtest" for="{{ $des->id }}v{{ $element}}">{{$element}}</label>
                          </div>
                        @endforeach               
                    </div>
                </div>
            @endforeach
        </div>

        <div id="news" class="contenttab">
            @foreach ($desc as $des)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">        
                         <div class="itemtitle">
                          <p class="vietsub"><img class="ses" title="" src="https://tuvungtienghan.com/themes/css/images/hoi.png" name="{{ $des->id }}h">{{$des->koreantrue}}</p>
                       @foreach (randomVietnam( $des,$desc3,'vietnamtrue') as $element)
                           <div class="itemchildenk">
                                <input type="radio" value="{{$element }}" name="{{ $des->id }}h" data-val="{{ $des->vietnamtrue }}">
                                <label class="lbtest" for="{{ $des->id }}h{{ $element}}">{{$element}}</label>
                          </div>
                        @endforeach               
                    </div>
                </div>
            @endforeach
        </div>
        <div id="popular" class="contenttab">
           @foreach ($desc as $des)
             <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="itemtitle">
                <p class="koreansub"><img class="ses" title="" src="https://tuvungtienghan.com/themes/css/images/hoi.png" name="{{ $des->id }}a"><a href="./uploads/audio/{{$des->audio}}" class="sm2_button sound_button"></a></p>
              </div>
              @foreach (randomVietnam( $des,$desc3,'vietnamtrue') as $element)
                  <div class="itemradio">
                      <div class="itemchildenv"><input type="radio" value="{{$element }}" name="{{ $des->id }}a" data-val="{{ $des->vietnamtrue }}"><label class="lbtest" for="{{ $des->id }}a{{$element}}">{{$element}}</label>
                      </div>
                  </div>
               @endforeach
            </div>
           @endforeach
        </div>

    </div>
 </div><!--end .tabbed_area-->
</div>
<hr />   
</div>
<div class="col-xs-12 col-md-3">
   <div id="aside"><!--Start bside-->
     @include('page.sidebar')
  </div> 
</div>
@endsection
