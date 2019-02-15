<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--quang cao-->
    <meta charset='UTF-8' />
    <title>Học tiếng hàn online tại nhà quá trình học có luyện phát âm chuẩn</title>
    <base href="{{secure_asset('')}}">
    <link rel="Shortcut Icon" href="https://tuvungtienghan.com/themes/favicon.ico" type="image/x-icon" /> 
    <!--start boottrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/source/css/bootstrap.min.css" type="text/css" media="screen" />
      <script type="text/javascript" charset="utf-8" src="js/html5shiv.min.js"></script>
      <script type="text/javascript"charset="utf-8"  src="js/respond.min.js"></script>
     <link rel="stylesheet" href="public/source/css/style_edit.css" type="text/css" media="screen"/>
    <!--and boottrap-->
    <link rel="stylesheet" href="public/source/css/miniplayer.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="public/source/css/mp3_player.css" type="text/css" media="screen" />
   <link rel="stylesheet" href="public/source/css/noview.css" type="text/css" media="screen" />
    <script type="text/javascript" charset="utf-8" src="public/source/js/noview.js"></script>
    <script type="text/javascript" charset="utf-8" src="public/source/js/jquery-1.11.1min.js"></script>
    <script type="text/javascript" charset="utf-8" src="public/source/js/audio_test_clicks.js"></script>
    <!-- <script type="text/javascript" charset="utf-8" src="public/source/js/menuHome.js"></script> -->
    <script type="text/javascript" charset="utf-8" src="public/source/js/soundmanager2.js"></script>
    
    <script>soundManager.setup({url: "swf/"});</script><script type="text/javascript" charset="utf-8" src="public/source/js/mp3-player-button-1.js"></script><!--mp3 playrer-->
    <!--mp3 playrer-->
    <script>soundManager.setup({url: "swf/"});</script><script type="text/javascript" charset="utf-8" src="public/source/js/mp3-player-list-1.js"></script><!--mp3 playrer-->
<!--
<style>
    
</style>-->
</head>
<body>
 <!--start menu-->
  <nav class="navbar navbar-inverse navbar-fixed-top">
      @include('header')
    </nav>
    <!--and menu-->
 <div class="container backgr"><!--start container-->
    @yield('content')
  </div>
	<div class="row footer"> 
        @include('footer')
   </div>
 </div>
<script src="public/source/js/jquery.min.js"></script>
<script type="public/source/text/javascript" charset="utf-8" src="js/bootstrap.min.js"></script>
</body>
</html>