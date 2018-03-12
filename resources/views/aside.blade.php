<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index">QUẢN LÝ NHÂN SỰ</a>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li class="active">
                        <a href="index"> <i class="menu-icon fa fa-home"></i>Trang chủ </a>
                    </li>
                  @if($user_login->quyen == 1 || $user_login->quyen == 2 )
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Nhân Viên</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-th-list"></i><a href="nhanvien/danhsach">Danh sách</a>
                                
                            </li>
                            <li>
                                <i class="fa fa-plus-square-o"></i><a href="nhanvien/themnhanvien">Thêm</a> 
                            </li>    
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list-alt"></i>Ca</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-th-list"></i><a href="ca/danhsach">Danh sách</a>
                                
                            </li>
                            <li>
                                <i class="fa fa-plus-square-o"></i><a href="ca/themca">Thêm</a>
                            </li>     
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-level-up"></i>Chức Vụ</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-th-list"></i><a href="chucvu/danhsach">Danh sách</a>
                                
                            </li>
                            <li>
                                <i class="fa fa-plus-square-o"></i><a href="chucvu/themchucvu">Thêm</a>
                            </li>     
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Phòng</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-th-list"></i><a href="phong/danhsach">Danh sách</a>
                                
                            </li>
                            <li>
                                <i class="fa fa-plus-square-o"></i><a href="phong/themphong">Thêm</a>
                            </li>     
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>User</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-th-list"></i><a href="user/danhsach">Danh sách</a>
                                
                            </li>
                            <li>
                                <i class="fa fa-plus-square-o"></i><a href="nhanvien/danhsach">Thêm</a>
                            </li>     
                        </ul>
                    </li>
                    @elseif($user_login->quyen == 3)
                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Điểm danh</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-th-list"></i><a href="nhanvien/danhsach">Danh sách</a>
                                
                            </li>
                            <li>
                                <i class="fa fa-plus-square-o"></i><a href="nhanvien/themnhanvien">Thêm</a> 
                            </li>    
                        </ul>
                    </li>
                    @endif
                </ul>   
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
 