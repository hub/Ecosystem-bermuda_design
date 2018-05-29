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
                            <p>Home</p>
                            <span class="icon-VectorSmartObjec-4"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#">
                            <p>Membership</p>
                            <span class="icon-VectorSmartObjec-1"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#">
                            <p>Markets</p>
                            <span class="icon-VectorSmartObjec-3"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#">
                            <p>About</p>
                            <span class="icon-VectorSmartObjec-5"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#">
                            <p>Contact</p>
                            <span class="icon-VectorSmartObjec-2"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#">
                            <p>Sprint</p>
                            <span class="icon-VectorSmartObjec-8"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#">
                            <p>Profile</p>
                            <span class="icon-VectorSmartObjec-10"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#">
                            <p>Applications</p>
                            <span class="icon-VectorSmartObjec-3"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#">
                            <p>Library of Contract T & C</p>
                            <span class="icon-VectorSmartObjec-9"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#">
                            <p>Log Out</p>
                            <span class="icon-VectorSmartObjec-7"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="global-content">
              @yield('content')
            </div>
        </div>


        <script src="./public/dist/js/jquery.min.js"></script>
        <script src="./public/dist/js/jquery-ui.min.js"></script>
        <script src="./public/dist/js/jquery.steps.js"></script>
        <script src="./public/dist/js/comon.js"></script>
    </body>
</html>
