<?php
function footer_fnc($color = "868686") { ?>
    <footer class="container-fluid p-0" style="background-image: linear-gradient(to left, white, #<?php echo($color); ?>);">
        <div class="container">
            <div class="row w-100">
                <div class="col p-3 px-5">
                    <div class="row">
                        <div class="col text-left">
                            <h4>
                                <b id="footer_home">Reliant Service Management</b>
                            </h4>
                        </div>
                        <!---->
                        <div class="col text-center">
                            <div class="row">
                                <div class="col text-left">
                                    <div class="row text-left">
                                        <div class="col text-left">
                                            <h4>
                                                E-mail
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row text-left">
                                        <div class="col text-left">
                                            <p>
                                                <a id="email_link" href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank">reliant.service.management@gmail.com</a>
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
                        <div class="col text-end">
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
                                        telószám
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!---->
                        <div class="col text-end">
                            <img src="imgs/logo2.png" class="rounded-circle" height="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</footer>
<?php } ?>