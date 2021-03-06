<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QUẢN LÝ NHÂN SỰ</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="../source/assets/css/normalize.css">
    <link rel="stylesheet" href="../source/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../source/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../source/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../source/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../source/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" h../ref="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="../source/assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
	
</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">

                <div class="login-logo">
                    
                        <h1 style="color: #FFF">QUẢN LÝ NHÂN SỰ</h1>
                    
                </div>
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                          @foreach($errors->all() as $err)
                            {{$err}}<br>
                          @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                          {{session('thongbao')}}
                        </div>
                    @endif
                     @if(session('loi'))
                        <div class="alert alert-danger">
                          {{session('loi')}}
                        </div>
                    @endif
                <div class="login-form">
                    <form action="{{route('login')}}" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input name="txtUsername" type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">ĐĂNG NHẬP</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="../source/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="../source/assets/js/popper.min.js"></script>
    <script src="../source/assets/js/plugins.js"></script>
    <script src="../source/assets/js/main.js"></script>


</body>
</html>
