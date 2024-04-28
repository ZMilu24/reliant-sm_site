<?php

require("config.php");

function footer_fnc($color = "868686") { ?>
    <footer class="container-fluid p-0" style="background-image: linear-gradient(to left, white, #<?php echo($color); ?>);">
        <div class="container">
            <div class="row w-100">
                <div class="col p-3 px-5">
                    <div class="row">
                        <div class="col <?php if($isMob) {echo("text-left");} else {echo("text-center");} ?>">
                            <h4>
                                <b id="footer_home">Reliant Service Management</b>
                            </h4>
                        </div>
                        <!---->
                        <div class="col text-center">
                            <div class="row">
                                <div class="col <?php if($isMob) {echo("text-left");} else {echo("text-center");} ?>">
                                    <div class="row <?php if($isMob) {echo("text-left");} else {echo("text-center");} ?>">
                                        <div class="col <?php if($isMob) {echo("text-left");} else {echo("text-center");} ?>">
                                            <h4>
                                                E-mail
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row <?php if($isMob) {echo("text-left");} else {echo("text-center");} ?>">
                                        <div class="col <?php if($isMob) {echo("text-left");} else {echo("text-center");} ?>">
                                            <p>
                                                <a id="email_link" onclick=copy(id) class="footer-link">reliant.service.management@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-3 px-5">
                    <div class="row">
                        <div class="col <?php if($isMob) {echo("text-end");} else {echo("text-center");} ?>">
                            <div class="row">
                                <div class="col">
                                    <h4>
                                        Telefonszámunk
                                    </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>
                                        <a id="telefon_link" onclick=copy(id) class="footer-link">telószám</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="col <?php if($isMob) {echo("text-end");} else {echo("text-center");} ?>">
                            <img src="imgs/logo2.png" class="rounded-circle" height="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</footer>
<?php } ?>