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
        <div class="container">
            <div class="sidebar">
                <div class="title">
                    <p>BERMUDA STANDARD</p>
                    <nav role="navigation" class="nav-resp">
                        <div id="menuToggle">
                            <input type="checkbox">
                            
                            <span></span>
                            <span></span>
                            <span></span>
                            
                            <ul id="menu">
                                
                            </ul>
                        </div>
                    </nav>
                </div>
                <ul class="menu">
                    <li>
                        <a class="item-li" href="#" title="Home">
                            <p>Home</p>
                            <span class="icon-VectorSmartObjec-4"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#" title="Membership">
                            <p>Membership</p>
                            <span class="icon-VectorSmartObjec-1"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#" title="Markets">
                            <p>Markets</p>
                            <span class="icon-VectorSmartObjec-3"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#" title="About">
                            <p>About</p>
                            <span class="icon-VectorSmartObjec-5"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#" title="Contact">
                            <p>Contact</p>
                            <span class="icon-VectorSmartObjec-2"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#" title="Sprint">
                            <p>Sprint</p>
                            <span class="icon-VectorSmartObjec-8"></span>
                        </a>
                    </li>
                    <li>
                        <a class="item-li" href="#" title="Profile">
                            <p>Profile</p>
                            <span class="icon-VectorSmartObjec-10"></span>
                        </a>
                    </li>
                    <div class="div">
                        <li>
                            <div class="item-li">
                                <p>Applications</p>
                                <div class="drop-arrow">
                                    <span class="icon-arrow-down arrow-lnk"></span>
                                    <span class="icon-VectorSmartObjec-3"></span>
                                </div>
                            </div>
                            <ul class="drop-menu">
                                <li><a href="#" title="Digital Asset License">Digital Asset License</a></li>
                                <li><a href="#" title="ICO Project License">ICO Project License</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="item-li">
                                <p>Library of Contract T&C</p>
                                <div class="drop-arrow">
                                    <span class="icon-arrow-down arrow-lnk"></span>
                                    <span class="icon-VectorSmartObjec-9"></span>
                                </div>
                            </div>
                            <ul class="drop-menu">  
                                <li><a href="#" title="Terms Submission">Terms Submission</a></li>
                                <li><a href="#" title="Library of Terms">Library of Terms</a></li>
                                <li><a href="#" title="Submitted Terms">Submitted Terms</a></li>
                            </ul>
                        </li>
                    </div>
                    <li>
                        <a class="item-li" href="#" title="Log Out">
                            <p>Log Out</p>
                            <span class="icon-VectorSmartObjec-7"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="width-box">
                <header>
                    <div class="background-header">
                        <div class="header-box">
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
                    <div class="global-content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
       


        <script src="./public/dist/js/jquery.min.js"></script>
        <script src="./public/dist/js/jquery-ui.min.js"></script>
        <script src="./public/dist/js/jquery.steps.js"></script>
        <script src="./public/dist/js/comon.js"></script>
    </body>
</html>
