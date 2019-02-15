@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
        <div class="pageindex">
          <?php if ($desc !=null): ?>
            <div class="desn"><div class="show_title_new"><h1>{{$desc->newsTitle}}</h1></div>
                <div class="show_content_new">
                    {{$desc->content}}
                </div>
            </div>
          <?php elseif($desc2 !=null): ?>
             <div class="desn"><div class="show_title_new"><h1>{{$desc2->title}}</h1></div>
                <div class="show_content_new">
                    {!!$desc2->content!!}
                </div>
            </div>
          <?php else: ?>
            <div class="alert alert-danger" style="margin-top: 20px;">
                    Hiện tại chưa có bài viết nào!
              </div>
          <?php endif ?>
        </div>
<hr />   
  </div>
<div class="col-xs-12 col-md-3">
<div id="aside"><!--Start bside-->
    @include('page.sidebar')
    </div> 
 </div>
 @endsection
