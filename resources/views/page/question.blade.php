@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
       <div class="pageindex">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
          <div class="klpt">
            <div class="title_show_all">
              <div class="title_show_list_h1"><h1>danh sách từ vựng tiếng hàn xuất khẩu lao động</h1></div>
            </div>  
            <ul class="listz_two"> 
             @php
               $flag = 0;
             @endphp
              @foreach ($desc as $des)
              @php
                 $flag = $flag+1;
               @endphp 
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding">
                <li>
                  <a href="{{ route('home.LearningWords',['slug1' => $des->categorySlug, 'slug2' => $des->categorychiSlug])}}">@php
                    echo $flag;
                  @endphp. {{$des->categorychiTitle}}</a>
                </li>
              </div>
              @endforeach
            </ul>
          </div> 
        </div>
      </div>
<hr />   
  </div>
<div class="col-xs-12 col-md-3">
<div id="aside"><!--Start bside-->
    @include('page.sidebar')
    </div> 
 </div>
 @endsection
