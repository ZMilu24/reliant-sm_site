<?php

require_once(__DIR__."/../mySQL_functions.php");

    function main_page_Admin() {

        $DB = new Database();

        if (isset($_GET["id"])) {
            order($_GET["id"]);
        }
        ?>
            <header class="container-fluid">
                <div class="conatiner">
                    <div class="row">
                        <div class="col text-center">
                            <img src="../imgs/logo.png" class="rounded-circle" width=100>
                        </div>
                    </div>
                </div>
            </header>

            <main class="container-fuid">
                <div class="conatiner">
                    <div class="row">
                        <div class="col">
                            <table class="text-white table table-dark">
                                <thead>
                                    <tr>
                                        <td>Név</td>
                                        <td>Telcsi</td>
                                        <td>E-mail</td>
                                        <td>Tipus</td>
                                        <td>Terv</td>
                                        <td>Cégnév</td>
                                        <td>Elképzelés</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $data = ["name", "tel", "email", "tipe", "plan", "comp", "comment"];
                
                                        echo($DB->echo_table($DB->get_members(), $data));
                                        
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        <?php

    }

    function order($id) {

        $DB = new Database();

        ?>
        
        <style>
            

            @media screen and (max-width: 1200px) {
                #info-bod {
                    position: absolute;
                    background-color: rgba(255,255,255,1);
                    top: 0;
                    left: 0;
                    width: 100vw !important;
                    min-height: 100vh;
                }
            }

            @media (min-width: 1200px) {
                #info-box {
                    position: absolute;
                    background-color: rgba(255,255,255,1);
                    top: 10%;
                    left: 10%;
                    width: 80vw !important;
                    min-height: 80vh;
                }
            }

        </style>


        <div id="shoutter"></div>
        <div id="info-box" class="container-fluid p-3 rounded-3" style="background-color: rgba(0,0,0,1);">
            <div class="conatiner">
                    <div class="row">
                        <div class="col">
                            <p class="text-center">
                                <?php echo($DB->getComment($DB->get_members(), $id)); ?>
                            </p>
                        </div>
                    </div>
                </div>
        </div>

        <?php

    }

    ?>
