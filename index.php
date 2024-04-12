<?php
    require_once("footer.php");
    require_once("header.php");
    require_once("cards.php");
?>
        <style>
            #logo {
                box-shadow: 0 0 99px;
            }
        </style>
        <?php main_header("none"); ?>
            <div class="py-3">
                <br class="py-3">
                <br class="py-3">
                <br class="py-3">
            </div>
            <div class="row p-3 px-5 pt-5">
                <div class="col text-center"></div>
                <div class="col text-center">
                    <img src="imgs/logo.png" class="rounded-circle w-50" id="logo">
                </div>
                <div class="col text-center"></div>
            </div>
            <div class="py-3">
                <br class="py-3">
                <br class="py-3">
                <br class="py-3">
            </div>
        </header>
        <main class="container-fluid p-3 px-5" style="background-image: linear-gradient(to top left, white, #868686);">
            <div class="container">
                <div class="row p-3 px-5">
                    <div class="col text-center">
                        <h2>
                            Üdvözöljük a <h1>Reliant Service Management</h1> <b>oldalán!</b>
                        </h2>
                    </div>
                </div>
                <div class="row p-5">
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
                </div>
            </div>
        </main>
        <?php footer_fnc(); ?>
    </body>
</html>