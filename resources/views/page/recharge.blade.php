@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
   <div class="account_itf">
    <div class="title_itf">HƯỚNG DẪN CHUYỂN TIỀN VÀO TẠI KHOẢN</div>
     {!!$address->rech!!} 
    </div>
 </div>
  </div>
<div class="col-xs-12 col-md-3">
   <div id="aside"><!--Start bside-->
     @include('page.sidebar')
  </div> 
</div>
@endsection
