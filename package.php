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
                    <div class="row">
                        <div class="col">
                            <p>
                                Vásárolja meg a csomagját, és élvezze a kedvezményeket! Minél hosszabb időtávra kötelezi el magát, annál nagyobb árkedvezményt biztosítunk.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>
                            Csomagjainkat minőség szerint rangsoroltuk, így Ön az igényeinek megfelelő árajánlatot kapja. A csomag részleteit és választható extráit a "Részletek" gombra kattintva találja meg. Továbbá, egy minta oldal is rendelkezésére áll, amely bemutatja, mit várhat el az adott csomagtól.
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col mt-5">
                            <i>
                                Az első hónap fenntartási kölcségét Cégünk biztosítja.
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