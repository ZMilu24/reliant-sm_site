<?php

    require_once("footer.php");
    require_once("cards.php");
    require_once("header.php");

?>
    <?php main_header("00ccff"); ?>
        </header>
        <main class="w-100 container-fluid" style="background-image: linear-gradient(to right, white, #00ccff);">
            <div class="container">
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
                    <div class="col text-center">
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
                </div>
            </div>
        </main>
        <?php footer_fnc(); ?>
    </body>
</html>