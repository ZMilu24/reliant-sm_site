<?php

    require_once("footer.php");
    require_once("header.php");

?>
        <?php main_header(); ?>
        <style>
            .img-container {
                min-height:10vh;
            }
        </style>
        </header>
        <main class="w-100 container-fluid" style="background-image: linear-gradient(to bottom right, white, #0059ff);">
            <div class="container p-5">
                <div class="row my-5">
                    <div class="col-lg-9 text-center">
                        <h2>
                            Rólunk:
                        </h2>
                        <p>
                            azi deshi young fly
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <img src="imgs/img1.jpeg" class="w-100 rounded-3">
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-lg-3">
                        <img src="imgs/img3.jpg" class="w-100" style="border-radius: 20%;">
                    </div>
                    <div class="col-lg-9 text-center">
                        <h2>
                            Tapasztalataink:
                        </h2>
                        <p>
                            azi deshi young fly
                        </p>
                    </div>
                </div>
            </div>
        </main>
        <?php footer_fnc(); ?>
    </body>
</html>