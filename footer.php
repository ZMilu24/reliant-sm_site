<?php
    require_once("functions.php");
?>
<footer class="row text-center">
            <?php
                //A sorok számánál oda kell figyelni a bootstrap 5 szintaktikára is!!!
                card_in_row([
                    "BakiGeri" => [
                        "name" => "Bakalár Gergő",
                        "disc" => "Business Man"
                    ],
                    "ZMilan" => [
                        "name" => "Zupán Milán",
                        "disc" => "Software Developer"
                    ]
                ], "name");
            ?>
        </footer>
    </body>
</html>