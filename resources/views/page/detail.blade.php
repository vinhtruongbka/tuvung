@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
       <p class="warning">Cộng thêm 50% khi chuyển khoản từ ngày 01-01-2019 đến hết ngày 05-01-2019. </p>
        <div class="pageindex">
            @if ($desc !=null)
                <div class="desn"><div class="show_title_new"><h1>{{$desc->newsTitle}}</h1></div>
                <div class="show_content_new">
                    {{$desc->Content}}
                </div>
            </div>
            @else
               <div class="alert alert-danger" style="margin-top: 20px;">
                    Hiện tại chưa có bài viết nào!
              </div>
            @endif
        </div>
<hr />   
  </div>
<div class="col-xs-12 col-md-3">
<div id="aside"><!--Start bside-->
    @include('page.sidebar')
    </div> 
 </div>
 @endsection
