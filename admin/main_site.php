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
                                        <td>Tipus</td>
                                        <td>Cégnév</td>
                                        <td>Elképzelés</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $data = ["name", "tel", "email", "tipe", "comp", "comment"];
                
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
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <td>Lapok száma</td>
                                        <td>Típus</td>
                                        <td>Adatbázis</td>
                                        <td>E-mail services</td>
                                        <td>Google review</td>
                                        <td>Könyvelői oldal</td>
                                        <td>Saját admin felület</td>
                                        <td>Dinamikusan bővülő kínálat lap</td>
                                        <td>Animált kártyák/Animációk</td>
                                        <td>Egyedi lábléc</td>
                                        <td>Reszponzív design</td>
                                        <td>Comment</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $data = ["page_num", "tipus", "DB", "own_admin", "dinamic_page", "animatics", "footer", "responsive", "comment"];
                
                                        echo($DB->echo_table($DB->get_orders(), $data, "orders"));
                                        
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
