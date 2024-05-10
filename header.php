<?php

    function main_header($color="868686", $start_color="white") {

        $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));

        ?>
        <!DOCTYPE html>
        <html lang="hu">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <link href="main_style.css" rel="stylesheet">
                <link href="style.css" rel="stylesheet">
                <link rel="icon" href="imgs/logo.png" type="image/icon type">
                <title>Reliant Service Management</title>
                <script src="main.js"></script>
                <script>
                    function openNav() {
                        document.getElementById("mySidenav").style.width = "250px";
                        document.getElementById("main").style.marginLeft = "250px";
                    }

                    function closeNav() {
                        document.getElementById("mySidenav").style.width = "0";
                        document.getElementById("main").style.marginLeft= "0";
                    }
                </script>
                <style>

                    .sidenav {
                        height: 100%;
                        width: 0;
                        position: fixed;
                        z-index: 1;
                        top: 0;
                        left: 0;
                        background-color: #111;
                        overflow-x: hidden;
                        transition: 0.5s;
                        padding-top: 60px;
                    }

                    .sidenav a {
                        padding: 8px 8px 8px 32px;
                        text-decoration: none;
                        font-size: 25px;
                        color: #818181;
                        display: block;
                        transition: 0.3s;
                    }

                    .sidenav a:hover {
                        color: #f1f1f1;
                    }

                    .sidenav .closebtn {
                        position: absolute;
                        top: 0;
                        right: 25px;
                        font-size: 36px;
                        margin-left: 50px;
                    }

                    #main {
                        transition: margin-left .5s;
                        padding: 16px;
                    }

                    @media screen and (max-height: 450px) {
                        .sidenav {padding-top: 15px;}
                        .sidenav a {font-size: 18px;}
                    }

                    .dropdown:hover>.dropdown-menu {
                        display: block;
                    }

                    .dropdown>.dropdown-toggle:active {/
                        pointer-events: none;
                    }

                    #dropdownMenuButton {
                        color: #000000;
                    }

                    #dropdownMenuButton:hover {
                        color: #000000;
                    }

                    #dropdownMenuButton:active {
                        color: #000000;
                    }

                    #dropdownMenuButton:visited {
                        color: #000000;
                    }

                    #nav-bg {
                        padding: 1%;
                        background: rgba(0, 0, 0, 0.4);
                    }

                    .nav-link {
                        transition: 1s !important;
                        color: #000000;
                    }

                    .nav-link:hover {
                        color: rgba(10, 10, 255, 1) !important;
                    }

                    .nav-link:active {
                        color: #000000;
                    }

                    .nav-link:visited {
                        color: #000000;
                    }

                    #nav-logo:hover {
                        animation: 2s logo-hover;
                        animation-composition: add;
                    }

                    .dropdown-item {
                        transition: 1s;
                    }

                    #ultra-nav:hover {
                        background: rgba(20, 20, 255, 0.5) !important;
                    }

                    #premium-nav:hover {
                        background: rgba(0, 255, 255, 0.5) !important;
                    }

                    #basic-nav:hover {
                        background: rgba(100, 255, 100, 0.5) !important;
                    }
            
                    
                    @keyframes logo-hover {
                            0% {
                                box-shadow: 0 0 0 #000000;
                            }
                            50% {
                                box-shadow: 0 0 99px #000000;
                            }
                            100% {
                                box-shadow: 0 0 0 #000000;
                            }
                        }
            
                </style>
            </head>
            <body>
                <header id="main-header" class="container-fluid header h-100 p-5" style="background-image: linear-gradient(to right, <?php echo($start_color); ?>, #<?php echo($color); ?>);">
                    <div class="w-100 fixed-top header" id="nav-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col p-0">
                                    <?php
                                        if ($isMob) {
                                            ?>
                                            <div id="mySidenav" class="sidenav">
                                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                                <a href="index.php">
                                                    <img src="imgs/logo.png" alt="Logo" height=50 id="nav-logo">
                                                </a>
                                                <a href="about-us.php">Rólunk</a>
                                                <a href="offers.php">Kínálatunk</a>
                                            </div>
                                            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                                        <?php
                                        } else {
                                            ?><div class="w-100">
                                            <nav class="navbar navbar-expand-sm">
                                                <ul class="navbar-nav">
                                                    <li>
                                                        <a class="navbar-brand" href="index.php">
                                                            <img src="imgs/logo.png" alt="Logo" height=50 id="nav-logo">
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="about-us.php">Rólunk</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <?php
                                                        
                                                            if ($isMob) {
                                                                ?><a class="nav-link" href="offers.php">Kínálatunk</a><?php
                                                            } else {
                                                                ?><div class="dropdown">
                                                                <a
                                                                    data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="btn nav-link dropdown-toggle"
                                                                    type="button"
                                                                    id="dropdownMenuButton"
                                                                    data-mdb-toggle="dropdown"
                                                                    aria-expanded="false"
                                                                    href="offers.php"
                                                                >
                                                                    Kínálatunk
                                                                </a>
                                                                <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                                                                    <li><a class="dropdown-item bg-dark text-white" href="package.php?p=b" id="basic-nav">Basic</a></li>
                                                                    <li><a class="dropdown-item bg-dark text-white" href="package.php?p=p" id="premium-nav">Premium</a></li>
                                                                    <li><a class="dropdown-item bg-dark text-white" href="package.php?p=u" id="ultra-nav">Ultra</a></li>
                                                                </ul>
                                                            </div><?php
                                                            }
                                                        ?>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div><?php
                                        }
                                    ?>
                                </div>
                                <div class="col text-end p-3 px-5">
                                    <b id="title">Reliant Service Management</b>
                                </div>
                            </div>
                        </div>
                    </div>
<?php }

?>