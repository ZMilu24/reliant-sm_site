<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>RELIANT</title>
    </head>
    <body style="background-color:<?php
                        if (isset($_GET["mode"])) {
                            if ($_GET["mode"] == "White Mode") {
                                echo("white");
                            } else {
                                echo("black");
                            }
                        } else {
                            echo("white");
                        }
                    ?>">
        <header class="row">
            <div class="col-lg-4">
                <form method="get">
                <input type="submit" value="<?php
                        if (isset($_GET["mode"])) {
                            if ($_GET["mode"] == "White Mode") {
                                echo("Dark Mode");
                            } else {
                                echo("White Mode");
                            }
                        } else {
                            echo("Dark Mode");
                        }
                    ?>" name="mode" class="btn <?php
                    if (isset($_GET["mode"])) {
                        if ($_GET["mode"] == "White Mode") {
                            echo("btn-light");
                        } else {
                            echo("btn-dark");
                        }
                    } else {
                        echo("btn-light");
                    }
                ?>">
                </form>
            </div>
            <div class="col-lg-4 text-center">
                <h1>
                    <img src="<?php
                        if (isset($_GET["mode"])) {
                            if ($_GET["mode"] == "White Mode") {
                                echo("imgs/logo_white.png");
                            } else {
                                echo("imgs/logo_dark.png");
                            }
                        } else {
                            echo("imgs/logo_white.png");
                        }
                    ?>" style="width: 100%; height: auto; border-radius: 50%;">
                    <!--<b>SINEX</b>-->
                </h1>
                <p>
                    ONLINE SERVICE MANAGEMENT
                </p>
            </div>
            <div class="col-lg-4"></div>
        </header>