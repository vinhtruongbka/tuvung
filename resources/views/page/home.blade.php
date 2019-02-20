@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
    <img src="uploads/tieng-anh-giao-tiep-hai-phong-01.jpg" class="img-responsive" alt="Image" style="max-width: 100% !important">
    <hr /> 
 <!--<h2 class="main">Danh sách tham khỏa </h2>-->
    <?php foreach ($news as $new): ?>
    <div class="pageindex">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 padding">
            <a href="{{ route('home.detail',$new->slug) }}">
            <img  alt="day" class="img_des_new" id="tu vung tieng han quoc" src="uploads/{{$new->images}}"/></a>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 padding">
            <a href="{{ route('home.detail',$new->slug) }}">
            <h2>{{$new ->title}}</h2></a> 
            <div>
                {!!$new ->desc!!}
            </div>
        </div>
    </div>
    <?php endforeach ?>
<hr />   
  </div>
<div class="col-xs-12 col-md-3">
<div id="aside"><!--Start bside-->
    @include('page.sidebar')
    </div> 
 </div>
 @endsection
