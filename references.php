<?php

    require_once("footer.php");
    require_once("header.php");

    function createReference($data) {
        ?>
        <div class="col-lg-6 text-center">
            <a href="<?php echo($data["link"]); ?>">
                <h3><?php echo($data["name"]); ?></h3>
                <div class="content">
                    <img src="<?php echo($data["image1"]); ?>" alt="Referencia" class="image" style="width:100%">
                    <div class="middle">
                        <img src="<?php echo($data["image2"]); ?>" alt="Referencia" class="image" style="width:100%">
                    </div>
                </div>
            </a>
        </div>
        <?php
    }

?>
    <?php main_header("9dc2c7", "gray", "reference.css"); ?>
        </header>
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