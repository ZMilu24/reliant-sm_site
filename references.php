<?php

    require_once("footer.php");
    require_once("header.php");

    function createReference($data) {
        ?>
        <div class="col-lg-6">
            <div class="content">
                <img src="imgs/logo.png" alt="Avatar" class="image" style="width:100%">
                <div class="middle">
                    <div class="text">John Doe</div>
                </div>
            </div>
        </div>
        <?php
    }

?>
    <?php main_header("9dc2c7", "gray"); ?>
        </header>
        <link href="references.css" rel="stylesheet">
        <main class="container-fluid">
            <div id="shutter" class="container my-5">
                <?php

                    require("config.php");
                
                    $i=0;
                    foreach ($references as $reference) {
                        $i++;
                        if ($i % 2 == 1) {
                            ?>
                                <div class="row">
                            <?php
                        }
                        createReference($reference);
                        if ($i % 2 == 0) {
                            ?>
                                </div>
                            <?php
                        }
                    }

                ?>
            </div>
        </main>
        <?php footer_fnc(); ?>
    </body>
</html>