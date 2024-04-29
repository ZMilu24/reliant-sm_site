<?php


    function main_page_Admin() {

        require_once(__DIR__."/../mySQL_functions.php");
        $DB = new Database();

        if (isset($_GET["id"])) {
            echo("specific order page");
        } else {
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

    }

    ?>