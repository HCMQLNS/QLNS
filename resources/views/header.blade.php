<header id="header" class="header">
 
            <div class="header-menu">

                <div class="col-sm-7">
                    
                    <div class="header-left">
                        
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                       
                        @if(isset($user_login))
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="upload/{{$user_login->nhanvien->hinh}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="nhanvien/profile/{{$user_login->nhanvien->id}}"><i class="fa fa- user"></i>{{$user_login->nhanvien->hoten}}</a>

                                

                                <a class="nav-link" href=""><i class="fa fa -cog"></i>Cài đặt</a>

                                <a class="nav-link" href="dangxuat"><i class="fa fa-power -off"></i>Đăng xuất</a>
                        </div>
                        @endif
                    </div>

                   

                </div>
            </div>

</header>
