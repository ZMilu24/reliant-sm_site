<?php

    function main_navbar() {

        ?>
        <style>
            #nav-logo:hover {
                animation: 2s logo-hover;
                animation-composition: add;
            }
    
            
            @keyframes logo-hover {
                    0% {
                        box-shadow: 0 0 0 #FF0000;
                        box-shadow: 0 0 0 #000000;
                    }
                    25% {
                        box-shadow: 0 0 0 #FF0000;
                        box-shadow: 0 0 99px #000000;
                    }
                    50% {
                        box-shadow: 0 0 99px #FF0000;
                        box-shadow: 0 0 0 #000000;
                    }
                    75% {
                        box-shadow: 0 0 0 #FF0000;
                        box-shadow: 0 0 99px #000000;
                    }
                    100% {
                        box-shadow: 0 0 0 #FF0000;
                        box-shadow: 0 0 0 #000000;
                    }
                }
    
        </style>
        
        <nav class="navbar navbar-expand-sm">
            <div class="text-end">
                <ul class="navbar-nav">
                    <li>
                        <a class="navbar-brand text-info" href="index.php">
                            <img src="imgs/logo.png" alt="Logo" height=50 id="nav-logo">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="about-us.php">Rólunk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" href="offers.php">Kínálatunk</a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php
    }

?>