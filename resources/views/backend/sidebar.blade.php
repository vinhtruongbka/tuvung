<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('admin.index') }}" class="site_title"><i class="fa fa-paw"></i> <span>Trang Quản Trị</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="./uploads/{{ Auth::user()->images}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Xin chào,</span>
                <h2>{{Auth::user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Quản lý</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i> Trang chủ <span class="fa fa-chevron-right"></span></a>
                  <li><a><i class="fa fa-edit"></i> Danh mục <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('adminGetSidebar') }}">Sidebar</a></li>
                      <li><a href="{{ route('adminCategory') }}">Danh mục</a></li>
                      <li><a href="{{ route('admin.getCategoryList') }}">Danh mục con</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-font"></i> Bài viết <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('admin.addPost') }}">Thêm mới</a></li>
                      <li><a href="{{ route('admin.getListPost') }}">Danh sách bài viết</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-book"></i> Từ vựng <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('admin.Quesetion') }}">Thêm mới từ vựng</a></li>
                      <li><a href="{{ route('admin.VocabularyList') }}">Quản lý từ vựng</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('admin.index') }}"><i class="fa fa-user"></i> Thành viên <span class="fa fa-chevron-right"></span></a>
                  </li>
                  <li><a href="{{ route('admin.getFile') }}"><i class="fa fa-folder-open"></i>Quản lý File <span class="fa fa-chevron-right"></span></a>
                  </li>
                  <li><a><i class="fa fa-cog"></i> Cài đặt <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('admin.getAddress') }}">Địa chỉ</a></li>
                      <li><a href="{{ route('admin.getSlide') }}">Banner</a></li>
                    </ul>
                  </li>

                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="./uploads/{{ Auth::user()->images}}" alt="">{{Auth::user()->name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ route('admin.getProfile') }}">Thông tin</a></li>
                    <li><a href="{{ route('postLogout')}}"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->