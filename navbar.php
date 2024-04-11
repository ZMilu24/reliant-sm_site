<?php

    function main_navbar() {

        ?>
        <style>

            #nav-bg {
                padding: 1%;
                background: rgba(0, 0, 0, 0.4);
                top: 0;
                right: 0;
                position: fixed;
            }

            .nav-link {
                color: rgba(0, 0, 0, 1);
            }

            .nav-link:hover {
                color: rgba(0, 0, 0, 1);
            }

            .nav-link:active {
                color: rgba(0, 0, 0, 1);
            }

            .nav-link:visited {
                color: rgba(0, 0, 0, 1);
            }

            #nav-logo:hover {
                animation: 2s logo-hover;
                animation-composition: add;
            }
    
            
            @keyframes logo-hover {
                    0% {
                        box-shadow: 0 0 0 #000000;
                    }
                    50% {
                        box-shadow: 0 0 99px #000000;
                    }
                    100% {
                        box-shadow: 0 0 0 #000000;
                    }
                }
    
        </style>
        <div class="w-100" id="nav-bg">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <div class="w-100">
                            <nav class="navbar navbar-expand-sm">
                                    <ul class="navbar-nav">
                                        <li>
                                            <a class="navbar-brand" href="index.php">
                                                <img src="imgs/logo.png" alt="Logo" height=50 id="nav-logo">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about-us.php">Rólunk</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="offers.php">Kínálatunk</a>
                                        </li>
                                    </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col text-end p-3 px-5">
                        <b id="title">Reliant Service Management</b>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

?>