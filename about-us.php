<?php

    require_once("footer.php");
    require_once("navbar.php");

?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="main_style.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <title>Reliant Service Management</title>
    </head>
    <body>
        <header class="container-fluid p-0" style="background-image: linear-gradient(to top right, white, blue);">
            <?php main_navbar(); ?>
        </header>
        <main class="w-100 container-fluid" style="background-image: linear-gradient(to bottom right, white, blue);">
            <div class="container">
                <ul>
                    <div class="row">
                        <div class="col">
                            <h3>
                                <li>Rólunk:</li>
                            </h3>
                            <p>
                                alsó szöveg
                            </p>
                        </div>
                        <div class="col text-center">
                            <img class="main_imgs" src="imgs/img1.jpeg" height="100">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-end">
                            <img class="main_imgs" id="secund_img" src="imgs/img3.jpg" height="100">
                        </div>
                        <div class="col"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h3>
                                <li>Tapasztalataink:</li>
                            </h3>
                            <p>
                                alsó szöveg
                            </p>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col text-left">
                                    <img class="main_imgs" id="third_img" src="imgs/img1.jpeg" height="100">
                                </div>
                                <div class="col text-end">
                                    <img class="main_imgs" id="fourth_img" src="imgs/img4.jpg" height="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </main>
        <?php footer_fnc(); ?>
    </body>
</html>