@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
    <img src="uploads/{{$slide->images}}" class="img-responsive" alt="Image" style="max-width: 100% !important">
    <hr /> 
 <!--<h2 class="main">Danh sách tham khỏa </h2>-->
   
    <div class="pageindex">
         <?php foreach ($news as $new): ?>
        <div class="col-xs-6 col-md-4 ">
            <div class="thumbnail" style="height: 335px;">
                <a href="{{ route('home.detail',$new->slug) }}">
                <img  alt="day" class=" img-responsive" id="tu vung tieng han quoc" src="uploads/{{$new->images}}" style="height: 173px" />
            </a>
                <div class="caption">
                    <a href="{{ route('home.detail',$new->slug) }}">
                        <h2 style="height: 54px;overflow: hidden;">{{$new ->title}}</h2></a> 
                    <p>
                        <a href="{{ route('home.detail',$new->slug) }}" class="btn btn-primary" style="float: right;background-color: #326C77">Xem chi tiết</a>
                    </p>
                </div>
            </div>
        </div>
         <?php endforeach ?>
        {{-- <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 padding">
            <a href="{{ route('home.detail',$new->slug) }}">
            <img  alt="day" class="img_des_new" id="tu vung tieng han quoc" src="uploads/{{$new->images}}"/></a>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 padding">
            <a href="{{ route('home.detail',$new->slug) }}">
            <h2>{{$new ->title}}</h2></a> 
            <div>
                {!!$new ->desc!!}
            </div>
        </div> --}}

    </div>
   <div class="text-center">
       {!! $news->links() !!}
   </div>
<hr />   
  </div>
<div class="col-xs-12 col-md-3">
<div id="aside"><!--Start bside-->
    @include('page.sidebar')
    </div> 
 </div>
 @endsection
