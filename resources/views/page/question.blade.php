@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
       <p class="warning">Cộng thêm 50% khi chuyển khoản từ ngày 01-01-2019 đến hết ngày 05-01-2019. </p>
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
          <div class="clause">
            <p class="warning_title">CHÚ Ý: </p>
            <p class="warning_content">- Muốn nhớ từ vựng nhanh khi vào từng phần nhỏ để học các bạn nên vào xem hướng dẫn ở các tab HỌC TỪ VỰNG, T.NGHIỆM NHANH, T.NGHIỆM NGHE, LUYỆN NGHE và làm theo, ngoài ra khi thuộc nên vào luyện tập lại hàng ngày khoảng 2 đến 3 lần rồi chuyển qua học tiếp những phần chưa thuộc.</p>
            <p class="warning_content">- Ví dụ: các bạn thuộc 3000 từ vựng với hiểu được 100 ngữ pháp thì hoàn toàn có thể nghe hiểu và đọc hiểu được trên 3000.000 câu hỏi khác nhau (đây là cách sắp xếp và đặt câu hỏi). Cho nên khi đề thi không nằm trong 2000 câu và trong các bài tập ở giáo trình eps-topik thì các bạn hoàn toàn có thể làm tốt.</p>
            <p class="warning_content">- Ở đây là phần từ vựng dành cho các bạn học để đi xklđ cho cả người mới và người hết hạn hợp đồng về nước, tuy không phải đầy đủ 100% những cũng phải đến 80%, khi ôn luyện còn từ nào mới thì các bạn tự học thêm.</p>
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
