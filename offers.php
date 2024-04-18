<?php

    require_once("footer.php");
    require_once("cards.php");
    require_once("header.php");

?>
    <?php main_header("9dc2c7", "gray"); ?>
        </header>
        <main class="w-100 container-fluid" style="background-image: linear-gradient(to top right, gray, #9dc2c7);">
            <div class="container">
                <div class="row mx-5">
                    <div class="col text-center">
                        <h1>Minden amit Kínálunk:</h1>
                    </div>
                </div>
                <div class="row m-3 mx-5">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p>
                                    abrakadabra XDXDXDDXDXDXDXD
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    abrakadabra XDXDXDDXDXDXDXD
                                </p>
                            </div>
                            <div class="col">
                                <ul>
                                    <li>Lista elem</li>
                                    <li>Lista elem</li>
                                    <li>Lista elem</li>
                                    <li>Lista elem</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    abrakadabra XDXDXDDXDXDXDXD
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-3 mx-5">
                    <div class="col">
                        <p class="text-danger">
                            abrakadabra XDXDXDDXDXDXDXD
                        </p>
                    </div>
                </div>
                <div class="row mx-5" id="offer-card-container">
                    <div class="col text-center">
                        <div class="row mx-5">
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
                </div>
            </div>
        </main>
        <?php footer_fnc(); ?>
    </body>
    <style>
        #offer-card-container {
            margin:0 !important;
        }
    </style>
</html>