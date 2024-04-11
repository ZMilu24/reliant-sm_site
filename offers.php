<?php

    require_once("footer.php");
    require_once("cards.php");
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
        <header class="container-fluid p-0" style="background-image: linear-gradient(to right, white, aqua);">
            <?php main_navbar(); ?>
        </header>
        <main class="w-100 container-fluid" style="background-image: linear-gradient(to right, white, aqua);">
            <div class="row mx-5">
                <div class="col text-center">
                    <h1>Minden amit Kínálunk:</h1>
                </div>
            </div>
            <div class="row m-3 mx-5">
                <div class="col">
                    <p>
                        abrakadabra XDXDXDDXDXDXDXD
                    </p>
                    <p>
                        abrakadabra XDXDXDDXDXDXDXD
                    </p>
                    <p>
                        abrakadabra XDXDXDDXDXDXDXD
                    </p>
                </div>
            </div>
            <div class="row m-3 mx-5">
                <div class="col">
                    <p class="text-danger">
                        abrakadabra XDXDXDDXDXDXDXD
                    </p>
                </div>
            </div>
            <div class="row mx-5">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 text-center">
                    <div class="row m-3 mx-5">
                        <div class="col">
                            <?php pck_card("basic"); ?>
                        </div>
                        <div class="col">
                            <?php pck_card("premium"); ?>
                        </div>
                        <div class="col">
                            <?php pck_card("ultra"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </main>
        <?php footer_fnc(); ?>
    </body>
</html>