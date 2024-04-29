<?php

    require_once(__DIR__."/../mySQL_functions.php");
    $DB = new Database();

    function main_page_Admin() {

?>

    <header class="container-fluid">
        <div class="conatiner">
            <div class="row">
                <div class="col">
                    <img src="../imgs/logo.png">
                </div>
            </div>
        </div>
    </header>

    <main class="container-fuid">
        <div class="conatiner">
            <div class="row">
                <div class="col">
                    <table>
                        <thead>
                            <tr>
                                <td>Név</td>
                                <td>E-mail</td>
                                <td>Telcsi</td>
                                <td>Cégnév</td>
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

?>