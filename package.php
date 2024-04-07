<?php
    require_once("footer.php");
    require_once("header.php");

    $themes = array();
    $themes["basic"] = [
        "name" => "Basic",
        "Main price" => "150",
        "theme color" => "9AEBB1"
    ];
    $themes["premium"] = [];

    $package = null;

    if ($_GET["p"] = "basic") {
        $package = $themes["basic"];
    }

?>

    <?php header_fnc($package["theme color"])?>

    <main>

    </main>

    <?php footer_fnc()?>
</body>
</html>