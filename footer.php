<?php

require("config.php");

function footer_fnc($color = "868686") { ?>
    <footer class="container-fluid p-0 text-center" style="background-image: linear-gradient(to left, white, #<?php echo($color); ?>);">
        <div class="container text-center" id="footer-container">
            <div class="row w-100 text-center">
                <div class="col p-3 px-5 text-center">
                    <div class="row">
                        <div class="col <?php require("config.php"); if($isMob) {echo("text-left");} else {echo("text-center");} ?>">
                            <h4>
                                <b id="footer_home">Reliant Service Management</b>
                            </h4>
                        </div>
                        <?php
                        
                        require("config.php");
                        
                        if($isMob) {

                            ?>
                    </div>
                    <div class="row text-center">
                        <div class="col text-center">
                            <div class="row text-center">
                                <div class="col text-center">
                                    <div class="row text-center">
                                        <div class="col text-center">
                                            <h4>
                                                E-mail
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col text-center">
                                            <p class="text-center">
                                                <a id="email_link" onclick=copy(id) class="footer-link text-center">reliant<span class="text-break">.</span>service<span class="text-break">.</span>management<span class="text-break">@</span>gmail<span class="text-break">.</span>com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php
                        } else {

                        ?>
                        <div class="col text-center">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="row text-center">
                                        <div class="col text-center">
                                            <h4>
                                                E-mail
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col text-center">
                                            <p class="text-center">
                                            <a id="email_link" onclick=copy(id) class="footer-link text-center">reliant<span class="text-break">.</span>service<span class="text-break">.</span>management<span class="text-break">@</span>gmail<span class="text-break">.</span>com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }; ?>
                    </div>
                </div>
                <div class="col p-3 px-5">
                    <div class="row">
                        <div class="col text-center">
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
                                        <a id="telefon_link" onclick=copy(id) class="footer-link">06/20 318 9824</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="col text-center">
                            <img src="imgs/logo2.png" class="rounded-circle" height="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</footer>
<?php } ?>