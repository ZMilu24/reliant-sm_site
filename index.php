<?php
    require_once("footer.php");
    require_once("navbar.php");
    require_once("cards.php");
?>

<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="main_style.css" rel="stylesheet">
        <title>Reliant Service Management</title>
        <style>
            #logo {
                box-shadow: 0 0 99px;
            }
        </style>
    </head>
    <body>
        <header class="container-fluid p-3 px-5" style="background-image: radial-gradient(circle, #868686, white);">
            <div class="row p-3 px-5">
                <div class="col text-center"></div>
                <div class="col text-center">
                    <img src="imgs/logo.png" class="rounded-circle w-50" id="logo">
                </div>
                <div class="col text-center"></div>
            </div>
            <div class="row p-5">
                <div class="col text-left">
                    <?php main_navbar(); ?>
                </div>
            </div>
        </header>
        <main class="container-fluid p-3 px-5" style="background-image: linear-gradient(to top left, white, #868686);">
            <div class="row p-5">
                <div class="col text-center">
                    <h2>
                        Üdvözöljük a <h1>Reliant Service Management</h1> <b>oldalán!</b>
                    </h2>
                </div>
            </div>
            <div class="row p-5">
                <div class="col text-center"></div>
                <div class="col text-center">
                    <div class="row p-5">
                        <div class="col text-center">
                            <?php CEO_card("gergo") ?>
                        </div>
                        <div class="col text-center">
                            <?php CEO_card("zupan") ?>
                        </div>
                    </div>
                </div>
                <div class="col text-center"></div>
            </div>
        </main>
        <?php footer_fnc(); ?>
    </body>
</html>