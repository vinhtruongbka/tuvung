$(function(){
    var $window       =  $(window);
    var windowWidth   =  $window.width();
    var windowHeight  =  $window.height();
    var url           =  window.location.href;
    var menuHome      =  "<div class = 'navhome'><a href='http://tuvungtienghan.com/tu-vung/danh-sach-tu-vung-tieng-han-quoc.html'><h3>TỪ VỰNG</h3></a><a href='http://tuvungtienghan.com/chuyen-nganh/tu-vung-tieng-han-quoc-chuyen-nganh.html'><h3>CHUYÊN NGÀNH</h3></a><a href='http://tuvungtienghan.com/hinh-anh/tu-vung-tieng-han-quoc-dang-hinh-anh.html'><h3>HÌNH ẢNH</h3></a><a href='http://tuvungtienghan.com/han-han/danh-sach-tu-vung-han-han.html'><h3>HÁN HÀN</h3></a><a href='http://tuvungtienghan.com/eps-topik/hoc-tieng-han-eps-topik.html'><h3>EPS-TOPIK </h3></a><a href='http://tuvungtienghan.com/xkld-doc/on-tap-tieng-han-xuat-khau-lao-dong-phan-doc-hieu.html'><h3>XKLĐ-ĐỌC</h3></a><a href='http://tuvungtienghan.com/xkld-nghe/on-tap-tieng-han-xuat-khau-lao-dong-phan-nghe-hieu.html'><h3>XKLĐ-NGHE</h3></a><a href='http://tuvungtienghan.com/xuat-khau-lao-dong/tu-vung-tieng-han-on-thi-xuat-khau-lao-dong.html'><h3>TỪ VỰNG XKLĐ</h3></a></div>";
    if(windowWidth <768 && url=='http://tuvungtienghan.com/' || windowWidth <768 && url=='http://tuvungtienghan.com/quan-tri/thanh-vien.html'){
      $("nav").after( menuHome );
    }
});
