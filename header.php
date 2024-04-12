<?php
    function package_header($color="868686") { ?>
        <!DOCTYPE html>
        <html lang="hu">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link href="packages_style.css" rel="stylesheet">
            <link rel="icon" href="imgs/logo.png" type="image/icon type">
            <link href="style.css" rel="stylesheet">
            <title>Reliant Service Management</title>
            <style>
                a {
                    color: rgba(0, 0, 0, 1);
                }

                a:hover {
                    color: rgba(0, 0, 0, 1);
                }

                a:active {
                    color: rgba(0, 0, 0, 1);
                }

                a:visited {
                    color: rgba(0, 0, 0, 1);
                }
            </style>
        </head>
        <body>
        <header class="container-fluid" style="background-image: linear-gradient(to right, white, #<?php echo($color); ?>);">
            <div class="container">
                <div class="row p-3 px-5">
                    <div class="col text-left">
                        <a href="offers.php">
                            <h4>
                                <b id="header_home">Reliant Service Management</b>
                            </h4>
                        </a>
                    </div>
                    <div class="col text-end">
                        <img class="rounded-circle" src="imgs/login.png" height="50">
                        <button type="button" class="btn btn-dark mx-3">
                            Log In
                        </button>
                        <button type="button" class="btn btn-dark mx-3">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
        </header>

<?php }

    function main_header($color="868686") {

        ?>
        <style>

            #nav-bg {
                padding: 1%;
                background: rgba(0, 0, 0, 0.4);
                top: 0;
                right: 0;
                position: fixed;
            }

            .nav-link {
                color: rgba(0, 0, 0, 1);
            }

            .nav-link:hover {
                color: rgba(0, 0, 0, 1);
            }

            .nav-link:active {
                color: rgba(0, 0, 0, 1);
            }

            .nav-link:visited {
                color: rgba(0, 0, 0, 1);
            }

            #nav-logo:hover {
                animation: 2s logo-hover;
                animation-composition: add;
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
                                                    <a class="nav-link" href="offers.php">Kínálatunk</a>
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