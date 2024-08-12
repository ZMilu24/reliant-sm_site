<?php
    require_once("footer.php");
    require_once("header.php");

    require("config.php");

    $package = null;

    if ($_GET["p"] == "b") {
        $package = $themes["basic"];
    } else if ($_GET["p"] == "p") {
        $package = $themes["premium"];
    } else if ($_GET["p"] == "u") {
        $package = $themes["ultra"];
    }

?>

    <?php header_v2("css/packages.css", "url(".$package["bgPic"].")", "", $package["name"]); ?>
    <?php //main_header($package["theme color"]); ?>
    </header>
    <main class="container-fluid mt-5">
    <div class="container">
        <div class="row p-3">
            <div class="col text-left">
                <h1><img src="imgs/<?php echo($package["name"]."_ful.png"); ?>" width=300></h1>
            </div>
        </div>
    </div>
    <div id="shutter" class="container my-3 rounded-3 p-3">
        <div class="container">
        <div class="row p-3">
            <div class="col text-left">
                <div id="package_main">
                    <div class="row mt-5">
                        <div class="col">
                            <p>
                            Vásárolja meg csomagját most, és élvezze a különleges kedvezményeket, amelyeket kínálunk! Az elköteleződés hosszával arányosan egyre nagyobb árkedvezményeket biztosítunk, így minél hosszabb időtávra szerződik, annál többet spórolhat.
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <p>
                            Csomagjainkat gondosan minőség szerint rangsoroltuk, hogy Ön a lehető legjobb árajánlatot kapja az igényeihez igazítva. A részletes információkat és választható extrákat a "Részletek" gombra kattintva találja meg.
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col mt-5">
                            <i>
                            Emellett egy minta oldalt is biztosítunk, amely segít megismerni, milyen előnyökre számíthat a választott csomaggal. Ne habozzon, fedezze fel az Önnek legmegfelelőbb csomagot, és kezdje el élvezni a kiválasztott szolgáltatások előnyeit már ma!
                            </i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-danger"><?php if ($_GET["p"] == "u") { echo($package["warning"]); }?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container" id="button_container">
            <div class="row p-3 text-center">
                <div class="col text-center my-3">
                    <a href="<?php echo($package["link"]); ?>">
                        <button type="button" class="btn btn-dark btn-lg">
                            <b class="w-100">Minta megtekintése</b>
                        </button>
                    </a>
                </div>
                <div class="col text-center my-3">
                    <a href="details.php?pac=<?php echo($_GET["p"]); ?>">
                        <button type="button" class="btn btn-dark btn-lg">
                            <b class="w-100">Részletek</b>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </main>

    <?php footer_fnc($package["theme color"])?>
</body>
</html>