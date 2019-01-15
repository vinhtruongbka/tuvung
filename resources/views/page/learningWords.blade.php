@extends('master')
@section('content')
<div class="row ali">
   <div class="col-xs-12 col-md-9">
       <p class="warning">Cộng thêm 50% khi chuyển khoản từ ngày 01-01-2019 đến hết ngày 05-01-2019. </p>
        <div class="pageindex">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">
    <div class="klpt">
    <div class="tabbed_area">
    <ul class="tabs">
        <li><a href="https://tuvungtienghan.com/xuat-khau-lao-dong/hoc-tu-vung/tu-vung-tieng-han-trong-ngan-hang-2000-cau-hoi-phan-mot-326.html" title="featured" class="tab witch_tabs">Học Từ Vựng</a></li>
        <li><a href="{{ route('home.PracticeWriting',$desc2->categorychiSlug) }}" title="featured" class="tab witch_tabs">Luyện Viết</a></li>
        <li><a href="https://tuvungtienghan.com/xuat-khau-lao-dong/luyen-tap-tu-vung/tu-vung-tieng-han-trong-ngan-hang-2000-cau-hoi-phan-mot-326.html" title="news" class="tab witch_tabs">Trắc Nghiệm</a></li>
        <li><a href="https://tuvungtienghan.com/xuat-khau-lao-dong/nghe-tu-vung-tieng-han/tu-vung-tieng-han-trong-ngan-hang-2000-cau-hoi-phan-mot-326.html" class="tab witch_tabs">Luyện Nghe</a></li>
    </ul>
    </div>
    <div class="title_test">Từ vựng tiếng hàn trong ngân hàng 2000 câu hỏi phần một</div>

          @foreach ($desc as $des)
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding">
            <div class="voca_children">
              <a href="./uploads/audio/{{$des->audio}}" class="sm2_button sound_button">
              </a><span style="padding-left: 10px">{{$des->korean}}: {{$des->vietnamese}}</span></div>
            </div>
          @endforeach

    <div class="des"><div class="title_lq"><u>Tham Khảo</u></div>
        <ul class="square"><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/cach-dang-ky-tai-khoan-theo-doi-tien-trinh-ho-so-xuat-khau-lao-dong-21.html">Cách đăng ký tài khoản theo dõi tiến trình hồ sơ xuất khẩu lao động</a></li><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/huong-dan-xem-diem-thi-va-xem-lich-thi-tieng-han-xuat-khau-lao-dong-20.html">Hướng dẫn xem điểm thi và xem lịch thi tiếng Hàn xuất khẩu lao động</a></li><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/diem-thi-cbt-cua-mot-so-ban-thi-dau-quy-2-thang-nam-2018-19.html">Điểm thi CBT của một số bạn thi đậu quý 2 tháng năm 2018</a></li><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/nhan-xet-va-cam-on-cua-mot-so-ban-thi-tieng-han-xkld-thang-06-nam-2018-18.html">Nhận xet và cảm ơn của một số bạn thi tiếng Hàn xklđ tháng 06 năm 2018</a></li><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/nhung-ban-thi-do-tieng-han-dac-biet-tren-may-tinh-quy-1-nam-2018-17.html">Những bạn thi đỗ tiềng Hàn đăc biệt trên máy tính quý 1 năm 2018</a></li><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/mot-so-diem-thi-cbt-cac-ban-on-tren-web-thi-trong-cac-ngay-08-den-11-16.html">Một số điểm thi CBT các bạn ôn trên web thi trong các ngày 08 đến 11</a></li><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/tong-hop-lai-ket-qua-thi-tieng-han-xuat-khau-lao-dong-cua-mot-so-ban-15.html">Tổng hợp lại kết quả thi tiếng Hàn xuất khẩu lao động của một số bạn</a></li><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/quy-trinh-hoc-tieng-han-va-on-thi-tieng-han-xuat-khau-lao-dong-14.html">Quy trình học tiếng Hàn và ôn thi tiếng Hàn xuất khẩu lao động</a></li><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/gioi-thieu-chuc-nang-loc-tu-vung-tieng-han-da-thuoc-trong-website-13.html">Giới thiệu chức năng lọc từ vựng tiếng hàn đã thuộc trong website</a></li><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/hoc-tieng-han-quoc-chung-ta-nen-hoc-chac-chan-theo-tung-phan-12.html">Học tiếng Hàn Quốc chúng ta nên học chắc chắn theo từng phần</a></li><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/giam-gia-mot-nua-de-tao-dieu-kien-cho-cac-ban-hoc-tieng-han-10.html">Giảm giá một nửa để tạo điều kiện cho các bạn học tiếng hàn</a></li><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/chinh-sach-va-quy-dinh-chung-cho-tat-ca-cac-thanh-vien-9.html">Chính sách và quy định chung cho tất cả các thành viên</a></li><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/phuong-phap-rut-ngan-thoi-gian-hoc-tu-vung-tieng-han-quoc-toi-da-nhat-8.html">Phương pháp rút ngắn thời gian học từ vựng tiếng hàn quốc tối đa nhất</a></li><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/tieng-han-xuat-khau-lao-dong-va-de-thi-tieng-han-xuat-khau-lao-dong-7.html">Tiếng hàn xuất khẩu lao động và đề thi tiếng hàn xuất khẩu lao động</a></li><li><a href="https://tuvungtienghan.com/tieng-han/tu-vung-tieng-han/phuong-phap-hoc-tieng-han-ket-hop-voi-luyen-tap-trac-nghiem-6.html">Phương pháp học tiếng hàn kết hợp với luyện tập trắc nghiệm</a></li></ul></div>
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
