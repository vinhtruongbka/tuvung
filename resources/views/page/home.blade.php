@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
       <p class="warning">Cộng thêm 50% khi chuyển khoản từ ngày 01-01-2019 đến hết ngày 05-01-2019. </p>
    
 <!--<h2 class="main">Danh sách tham khỏa </h2>-->
    <?php foreach ($news as $new): ?>
        <div class="pageindex">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 padding">
            <a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/diem-thi-cbt-cua-mot-so-ban-thi-dau-quy-2-thang-nam-2018-19.htm">
            <img  alt="day" class="img_des_new" id="tu vung tieng han quoc" src="uploads/{{$new->Image}}"/></a>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 padding">
            <a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/diem-thi-cbt-cua-mot-so-ban-thi-dau-quy-2-thang-nam-2018-19.htm">
            <h2>{{$new -> Title}}</h2></a> 
            <p style="max-height: 80px;overflow: hidden;">{{$new -> Summary}}</p>
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
