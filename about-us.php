<?php

    require_once("footer.php");
    require_once("header.php");

?>
    <?php main_header(); ?>
        </header>
        <main class="w-100 container-fluid" style="background-image: linear-gradient(to bottom right, white, #0059ff);">
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