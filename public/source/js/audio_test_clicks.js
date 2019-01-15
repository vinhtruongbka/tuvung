  $(document).ready(function() {
    var countf = 0;
    var countt = 0;
    var total  = 0;
    var audioElement = document.createElement('audio');	//dung chung phan nghe
    
      
    $('input[type=radio]').each(function(index, item){// kiem tra va chay nhac dung sai
        $(item).change(function(){
          var name = $(this).attr('name');                  
          if($.trim($(this).attr('data-val')) == $.trim($(this).val())){
            //var nam = "http://localhost/tuvungtienghan/themes/sound/beep-63.mp3";          
	             //audioElement.setAttribute('src', name);
               // audioElement = document.createElement('audio');
               // audioElement.setAttribute('src', nam);
               // audioElement.play();
                  $("label[for='"+name+$(this).val()+"']").addClass('addtrue');
                  if($("img").attr('class')=='') {}{
                    $("img[value='"+name+$(this).attr('data-val')+"']").addClass('addtrueimg');
                  }
                
          }else{
            //var nam = "http://localhost/tuvungtienghan/themes/sound/beep.mp3";          
            //audioElement.setAttribute('src', name);
                //audioElement = document.createElement('audio');
                //audioElement.setAttribute('src', nam);
                //audioElement.play();
                $("label[for='"+name+$(this).val()+"']").addClass('addfase');

                if($("img").attr('class')=='') {}{
                  $("img[value='"+name+$(this).attr('data-val')+"']").addClass('addfaseimg');
                }
                $('input[type=radio]').each(function() {
                  if($.trim($(this).attr('data-val')) == $.trim($(this).val()) && name == $(this).attr('name')){
                    
                    //$("label[for='"+name+$(this).val()+"']").addClass('addtrue');
                    $("label[for='"+name+$(this).val()+"']").addClass('addtrue');
                    if($("img").attr('class')=='') {}{
                      $("img[value='"+name+$(this).attr('data-val')+"']").addClass('addtrueimg');
                    }
                  }
                });
          };
        });
      }); 
    $.get();
    audioElement.addEventListener("load", function() {
    audioElement.play();
    }, true);// ket thuc chạy nha dung sai
    
      $('input[type=radio]').each(function(index, item){// chạy phần đáp án chắc nghiệm
        $(item).change(function(){
          var name = $(this).attr('name');          
          if($.trim($(this).attr('data-val')) == $.trim($(this).val())){
            audioElement.play();
            $('img[name='+name+']').attr('src','https://tuvungtienghan.com/themes/css/images/dung.png');
            $('input[name='+name+']').css('pointer-events', 'none');
            $('input[name=sex]').css('pointer-events', '');
            $('p.countt').empty().append(++countt); 
            total = countt*4;        
            $('p.count_total').empty().append(total);
            if(total<30){
                $('p.xeploai').empty().append('Kém');
            }
            if(total<50 && total>29){
                $('p.xeploai').empty().append('Yếu');
            }
            if(total<70 && total>49){
                $('p.xeploai').empty().append('TB');
            }
            if(total<80 && total>69){
                $('p.xeploai').empty().append('Khá');
            }
            if(total>79){
                $('p.xeploai').empty().append('Giỏi');
            }
            if ($("p").attr('class')!='') {
              $("p[value='"+name+$(this).attr('data-val')+"']").addClass('addtrue');
            }
            if($("img").attr('class')=='') {}{
              $("img[value='"+name+$(this).attr('data-val')+"']").addClass('addtrueimg');
            }
            
          }else{
            audioElement.play();
            $('img[name='+name+']').attr('src','https://tuvungtienghan.com/themes/css/images/sai.png');
            $('input[name='+name+']').css('pointer-events', 'none');
            $('input[name=sex]').css('pointer-events', '');
            $('p.countf').empty().append(++countf );

            if ($("p").attr('class')!='') {
              $("p[value='"+name+$(this).attr('data-val')+"']").addClass('addfase');
            }
            if($("img").attr('class')=='') {}{
              $("img[value='"+name+$(this).attr('data-val')+"']").addClass('addfaseimg');
            }
                $('input[type=radio]').each(function() {
                  if($.trim($(this).attr('data-val')) == $.trim($(this).val()) && name == $(this).attr('name')){
                    //$("p[value='"+name+$(this).attr('data-val')+"']").addClass('addtrue');
                    if ($("p").attr('class')!='') {
                      $("p[value='"+name+$(this).attr('data-val')+"']").addClass('addtrue');
                    }
                    if($("img").attr('class')=='') {}{
                      $("img[value='"+name+$(this).attr('data-val')+"']").addClass('addtrueimg');
                    }
                  }
                });
          };        
          
        });
      });

      $('input[id=menu]').each(function(index, item){// chạy phần test của nhập tiếng hàn
        $(item).change(function(){
            var name = $(this).attr('name');          
          if($.trim($(this).attr('data-val')) == $.trim($(this).val())){// neu dung
            //$('img[name='+name+']').attr('src','http://localhost/tuvungtienghan/themes/css/images/dung.png');
            $('input[name='+name+']').css('pointer-events', 'none');
            $('input[name='+name+']').css('color', 'blue');
          }else{//neu sai
            //$('img[name='+name+']').attr('src','http://localhost/tuvungtienghan/themes/css/images/sai.png');
            $('i.'+name).empty().append($.trim($(this).attr('data-val')));
            $('p.'+name).empty().append($.trim($(this).attr('data-val')));
            $('input[name='+name+']').css('color', 'red');
          };
        });
      });

    //code chạy file nghe
      //var audioElement = document.createElement('audio');
      $('.pause').click(function() {
         audioElement.pause();
      });
      $('.play').click(function() {
         $('.pause').trigger('click');
         audioElement = document.createElement('audio');
         audioElement.setAttribute('src', $(this).find('img').attr('name'));
         audioElement.play();
      });

      $('a.tab').click(function(){// chạy tab phần test
          $('.active').removeClass('active');
          $(this).addClass('active');
          $('.contenttab').slideUp();
          var content_show = $(this).attr('title');
          $('#'+ content_show).slideDown();
      });

      /*$(function(){// chạy nhạc bài tiếng hàn esp-topik
        $(".audio").mb_miniPlayer({
            width:300,
            inLine:false,
            id3:true,
            addShadow:false,
            pauseOnWindowBlur: false,
            downloadPage:null
        });
      });*/

      /******* validate html5 ******/
      $(function(){
           var email = document.getElementById("email")
          , confirm_email = document.getElementById("confirm_email");
          function validateEmail(){
            if (email !=null && confirm_email != null) {
              if(email.value != confirm_email.value) {
                confirm_email.setCustomValidity("Email phải giống nhau");
              } else {
                confirm_email.setCustomValidity('');
              }
            }
          }
        if (email !=null && confirm_email != null) {
          email.onchange = validateEmail;
          confirm_email.onkeyup = validateEmail;  
        }
      });
      $(function(){
             var password = document.getElementById("password")
            , confirm_password = document.getElementById("confirm_password");
            function validatePassword(){
              if (password !=null && confirm_password != null) {
                  if(password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Mật khẩu phải giống nhau");
                  } else {
                    confirm_password.setCustomValidity('');
                  }
                }
              }
          if (password !=null && confirm_password != null) {  
            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;  
          }
      });
      /******* and validate html5 ******/
  });