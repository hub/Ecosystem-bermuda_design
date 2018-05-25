<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bermuda_Dashboard</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="./public/dist/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./public/dist/css/style.css">
    <link rel="stylesheet" href="./public/dist/css/media.css">
    <link rel="stylesheet" href="./public/dist/font/font.css">
</head>
    <body>
        
        <header>
            <div class="background-header">
                <div class="header-box">
                    <p class="title">BERMUDA STANDARD</p>
                    <div class="user-box">
                        <div class="user-img"></div>
                        <div class="name-user">
                            <p>John Dou</p>
                            <p>Company Owner</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="dashboard-box">
            <div class="sidebar">
                <ul class="menu">
                    <li>
                        <a class="item-li" href="#">
                            <span class="icon-VectorSmartObjec-1"></span>
                            <p>Profiles</p>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#">
                            <span class="icon-VectorSmartObjec-2"></span>
                            <p>Applications</p>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#">
                            <span class="icon-VectorSmartObjec-3"></span>
                            <p>Library of Contract T&C</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content">
              @yield('content')
            </div>
        </div>


        <script src="./public/dist/js/jquery.min.js"></script>
        <script src="./public/dist/js/jquery-ui.min.js"></script>
        <script src="./public/dist/js/comon.js"></script>
    </body>
</html>
