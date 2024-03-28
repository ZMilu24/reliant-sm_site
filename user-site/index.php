<?php
    require_once("header.php");
    require_once("functions.php");
?>

<main class="row text-center p-5 text-white">
    <?php
        //A sorok számánál oda kell figyelni a bootstrap 5 szintaktikára is!!!
        card_in_row([
            "Costum" => [
                "name" => "Costum price",
                "details" => [
                    "asd" => "asd",
                    "asd" => "asd"
                ]
            ],
            "olcso" => [
                "name" => "100$",
                "details" => [
                    "asd" => "asd",
                    "asd" => "asd",
                    "asd" => "asd"
                ]
            ],
            "draga" => [
                "name" => "200$",
                "details" => [
                    "asd" => "asd",
                    "asd" => "asd"
                ]
            ]
        ], "price");
    ?>
</main>

<?php
    require_once("footer.php");
?>