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

    <?php main_header($package["theme color"])?>
    </header>
    <main class="container-fluid" style="background-image: linear-gradient(to bottom right, white, #<?php echo($package["theme color"]); ?>);">
        <div style="min-height: 80vh;">
        <div class="container">
            <div class="row p-3">
            <div class="col text-left">
                <h1><i><?php echo($package["name"])?></i></h1>
            </div>
        </div>
        <div class="row p-3">
            <div class="col text-left">
                <div class="row">
                    <div class="col text-left">
                        <p>Az Ügyfél a fizetés megkezdése előtt három opció közül választhat:</p>
                    </div>
                    <div class="col text-left">
                        <div class="row">
                            <div class="col text-left">
                                <ul>
                                    <li>Havi</li>
                                    <li>Féléves</li>
                                    <li>Éves</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="package_main">
                    <div class="row">
                        <div class="col">
                            <p>
                                Miután az Ügyfél megvásárolta a csomagot, onnantól az említett opciók behatásától függően
kell fenntartási költséget fizetnie. Minnél nagyobb időtávra kíván leszerződni, annál nagyobb árkedvezvény szabható ki. Ezen lehetőségek kiválasztása (Havi terv; Fél éves terv; Éves terv), a “Részletek” gombra kattintva érhető el.
Amennyiben Ügyfelünk részletekben kívánja fedezni a Fél éves -, illetve az Éves tervet, annak kiválasztását a “Részletek” menüpontban lelheti fel.

                            </p>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col text-left">
                                <p class="text-danger">Amennyiben a havi törlesztőrészlet önnönhibából származó okok miatt elmarad, a weboldal (illetve a többi szolgáltatás) működését megszüntetjük!</p>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>
                               Csomagjaink minőség szerint vannak listázva, és attól függően, mennyire kíván Ön átlag felüli szolgáltatást, annak megfelelően küldünk árajánlatot.
Ennek a csomagnak részletességei és választható extrái, a “Részletek” gombra kattintva érhetőek el. Ezen felül található egy sablon oldal, amely lefedi, az e csomagtól elvárhatóakat.
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col mt-5">
                            <b>
                                Az első hónap fenntartási kölcségét Cégünk biztosítja.
                            </b>
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
                <div class="col text-<?php echo($isMob == false ? "end" : "center"); ?> m-5 px-5">
                    <a href="<?php echo($package["link"]); ?>">
                        <button type="button" class="btn btn-dark btn-lg">
                            <b class="w-100">Sablon megtekintése</b>
                        </button>
                    </a>
                </div>
                <div class="col text-<?php echo($isMob == false ? "left" : "center"); ?> m-5 px-5">
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

    <?php footer_fnc()?>
</body>
</html>