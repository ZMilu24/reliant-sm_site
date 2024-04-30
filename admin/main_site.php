<?php


    function main_page_Admin() {

        require_once(__DIR__."/../mySQL_functions.php");
        $DB = new Database();

        if (isset($_GET["id"])) {
            order($_GET["id"]);
        }
        ?>
            <header class="container-fluid">
                <div class="conatiner">
                    <div class="row">
                        <div class="col text-center">
                            <img src="../imgs/logo.png" class="rounded-circle">
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
                                        <td>E-mail</td>
                                        <td>Telcsi</td>
                                        <td>Cégnév</td>
                                        <td>Több</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $data = ["name", "tel", "email", "comp"];
                
                                        $SQL = $DB->echo_table($DB->get_members(), $data);
                                        
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
                    top: 20%;
                    left: 20%;
                    width: 60vw !important;
                    min-height: 60vh;
                }
            }

        </style>


        <div id="shoutter"></div>
        <div id="info-box" class="container-fluid p-3 rounded-3">
            <div class="conatiner">
                    <div class="row">
                        <div class="col">
                            <table class="text-white table table-dark">
                                <thead>
                                    <tr>
                                        <td>Név</td>
                                        <td>E-mail</td>
                                        <td>Telcsi</td>
                                        <td>Cégnév</td>
                                        <td>Több</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $data = ["page-num", "tipus", "DB", "own-admin", "dinamic-page", "animatics", "footer", "responsive", "comment"];
                
                                        $SQL = $DB->echo_table($DB->get_orders(), $data, "orders");
                                        
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>

        <?php

    }

    ?>