<?php

    function main_header($color="868686") {

        ?>
        <style>

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
                top: 0;
                right: 0;
                position: fixed;
            }

            a {
                color: #000000;
            }

            a:hover {
                color: #000000;
            }

            a:active {
                color: #000000;
            }

            a:visited {
                color: #000000;
            }

            #nav-logo:hover {
                animation: 2s logo-hover;
                animation-composition: add;
            }

            #dd-menu {
                background: rgba(0, 0, 0, 0.4);
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
            </head>
            <body>
                <header class="container-fluid p-0" style="background-image: linear-gradient(to right, white, #<?php echo($color); ?>);">
                <div class="w-100" id="nav-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col p-0">
                                <div class="w-100">
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
                                                    <div class="dropdown">
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
                                                        <ul class="dropdown-menu" id="dd-menu" aria-labelledby="dropdownMenuButton">
                                                            <li><a class="dropdown-item text-primary" href="package.php?p=b">Basic</a></li>
                                                            <li><a class="dropdown-item text-primary" href="package.php?p=p">Premium</a></li>
                                                            <li><a class="dropdown-item text-primary" href="package.php?p=u">Ultra</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col text-end p-3 px-5">
                                <b id="title">Reliant Service Management</b>
                            </div>
                        </div>
                    </div>
                </div>
<?php }

?>