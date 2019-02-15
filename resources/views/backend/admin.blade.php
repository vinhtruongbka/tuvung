<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>
     <base href="{{asset('')}}">
    <!-- Bootstrap -->
    <link href="public/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="public/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="public/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="public/source/css/miniplayer.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="public/source/css/mp3_player.css" type="text/css" media="screen" />
   {{-- <link rel="stylesheet" href="public/source/css/noview.css" type="text/css" media="screen" />
    <script type="text/javascript" charset="utf-8" src="public/source/js/noview.js"></script> --}}
    <script type="text/javascript" charset="utf-8" src="public/source/js/jquery-1.11.1min.js"></script>
    <script type="text/javascript" charset="utf-8" src="public/source/js/audio_test_clicks.js"></script>
    <!-- <script type="text/javascript" charset="utf-8" src="public/source/js/menuHome.js"></script> -->
    <script type="text/javascript" charset="utf-8" src="public/source/js/soundmanager2.js"></script>
    
    <script>soundManager.setup({url: "swf/"});</script><script type="text/javascript" charset="utf-8" src="public/source/js/mp3-player-button-1.js"></script>

    <!-- Custom Theme Style -->
    <link href="public/admin/build/css/custom.min.css" rel="stylesheet">

    <script>
        function base_url(){
           return "<?php echo asset('');?>" ;
         }
     </script>
     <style>
        p img {
            display: block;
        }
    </style>
  </head>


  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('backend.sidebar')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div> 
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row"> 
              @yield('content_admin')
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Vinhtruong - 0359984007
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="public/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="public/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="public/admin/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="public/admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="public/admin/vendors/datatables.net/js/jquery.dataTables.js"></script>
    <script src="public/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="public/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="public/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="public/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="public/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="public/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="public/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="public/admin/vendors/jszip/dist/jszip.min.js"></script>
    <script src="public/admin/vendors/pdfmake/public/admin/build/pdfmake.min.js"></script>
    <script src="public/admin/vendors/pdfmake/public/admin/build/vfs_fonts.js"></script>

    <!-- bootstrap-daterangepicker -->
    <script src="public/admin/vendors/moment/min/moment.min.js"></script>
    <script src="public/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="public/admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="public/admin/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="public/admin/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="public/admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="public/admin/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="public/admin/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="public/admin/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="public/admin/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="public/admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="public/admin/vendors/starrr/dist/starrr.js"></script>
    <!-- validator -->
    {{-- <script src="public/admin/vendors/validator/validator.js"></script> --}}

    <!-- Custom Theme Scripts -->
    <script src="public/admin/build/js/custom.js"></script>

    <script type="text/javascript" src="public/admin/js/func.js"></script>
    <script src="public/admin/tinymce/tinymce.min.js"></script>
    <script src="public/admin/tinymce/config.js"></script>

  </body>
</html>