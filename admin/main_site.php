<?php

    require_once(__DIR__."/../mySQL_functions.php");

    function main() {
        
        $DB= new Database();

        ?>
            <main class="container">
                <caption id="unique-caption-id"><h1>Megrendelések</h1></caption>
                <div class="table-wrap" role="region" aria-labelledby="unique-caption-id" tabindex="0">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Név</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Telefonszám</th>
                                <th scope="col">Csomag</th>
                                <th scope="col">Vásárlás dátuma</th>
                                <th scope="col">Állapot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $DB->get_orders()?>
                        </tbody>
                    </table>
                </div>
            </main>
        <?php
    }

?>