<?php

    require_once("header.php");
    require_once("footer.php");
    require_once("mySQL_functions.php");

    require("config.php");

    $package = null;

    if ($_GET["pac"] == "b") {
        $package = $themes["basic"];
    } else if ($_GET["pac"] == "p") {
        $package = $themes["premium"];
    } else if ($_GET["pac"] == "u") {
        $package = $themes["ultra"];
    }

    if (isset($_POST["pleased"])) {
        $code = $DB->order_webpage($_POST);
        if ($code == 200) {
            ?>
                <script>
                    alert("Ajánlatkérés sikeres!");
                </script>
            <?php
        } else if ($code == 400) {
            ?>
                <script>
                    alert("Az ajánlatkérés ismeretlen okok miatt meghiúsult!");
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("Undefind error!");
                </script>
            <?php
        }
    }

?>

        <?php main_header($package["theme color"]); ?>
        </header>
        <main class="container-fluid p-3" style="background-image: linear-gradient(to bottom right, white, #<?php echo($package["theme color"]); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1><i><?php echo($package["name"]); ?></i></h1>
                    </div>
                </div>
                <div class="row m-5">
                    <div class="col text-center">
                        <button class="btn btn-dark" onclick=plans(0)>Havi terv</button>
                    </div>
                    <div class="col text-center">
                        <button class="btn btn-dark" onclick=plans(1)>Féléves terv</button>
                    </div>
                    <div class="col text-center">
                        <button class="btn btn-dark" onclick=plans(2)>Éves terv</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="p-3 m-3">
                            <h3>Fizetési részletek</h3>
                            <p>Miután az Ügyfél megrendelte a csomagot, és leírta igényei, egy árajánlatot küldünk.</p>
                            <p>Ha a <b><span id="plan">Havi</span> tervre</b> esett a választás, akkor az első hónapra az Ügyfél kifizeti a csomag árát (és az esetlegesen kért extrákat), utána havonta
egy meghatározott dátumon a fenntartási költségeket vonjuk le (az árajánlat tartalmazza a havi fenntartási költségeket is). (havi)</p>
                            <p id="extra-text"></p>
                        </div>
                    </div>
                    <div class="col">
                        <h3>Csomag tartalmának részletei</h3>
                        <ul>
                            <li>Weboldal (alap pipa)</li>
                            <li>Adatbázis:</li>
                            <li>E-mail services;</li>
                            <li>Google review;</li>
                            <li>Könyvelői oldal;</li>
                            <li>Saját admin felület;</li>
                            <li>Dinamikusan bővülő kínálat lap;</li>
                            <li>Animált kártyák/Animációk;</li>
                            <li>Egyedi lábléc;</li>
                            <li>Reszponzív design.</li>
                        </ul>
                    </div>
                </div>
                <form method="post">
                    <div class="row">
                        <div class="col">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="bg-light p-3 m-3">
                                            <div class="row">
                                                <div class="col">
                                                    <h3>Igényelhető specifikációk</h3>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-floating">
                                                                <input type="number" class="form-control" id="page-num" name="page-num" placeholder="" value="1" min="1" max="20"></input>
                                                                <label for="page-num">Oldalak száma</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <div class="input-group mb-1 rounded-4">
                                                                <div class="input-group-text">
                                                                    <input type="radio" name="type" value="Kézzel" onclick=handMade() checked>
                                                                </div>
                                                                <label>Kézzel készített</label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group mb-1">
                                                                <div class="input-group-text">
                                                                    <input type="radio" name="type" value="Wordpressben" onclick=wp()>
                                                                </div>
                                                                <label>Wordpress-ben készített</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-text">
                                                                <input type="checkbox" name="database" id="DB">
                                                                </div>
                                                                <label>Adatbázis</label>
                                                            </div>
                                                            <p id="sign"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-text">
                                                                <input type="checkbox" name="own-admin" id="own-admin">
                                                                </div>
                                                                <label>Saját admin felület</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-text">
                                                                <input type="checkbox" name="dinamic-offers" id="dinamic-offers">
                                                                </div>
                                                                <label>Dinamikusan bővülő kínálat lap</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-text">
                                                                <input type="checkbox" name="anime-cards" id="anime-cards">
                                                                </div>
                                                                <label>Animált kártyák / Animációk</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-text">
                                                                <input type="checkbox" name="footer" id="footer">
                                                                </div>
                                                                <label>Egyedi lábléc</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-text">
                                                                <input type="checkbox" name="responsive" id="responsive">
                                                                </div>
                                                                <label>Reszponzív design</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-floating">
                                                                <textarea class="form-control" id="comment" name="comment" placeholder=""></textarea>
                                                                <label for="comment">Megjegyzés</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="container">
                                <div class="bg-light p-3 m-3">
                                    <div class="row">
                                        <div class="col">
                                            <h3>Személyes információk</h3>
                                            <p class="text-danger">A *-gel megjelölt elemeket kitölteni kötelező!</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="tel" class="form-control" id="name" placeholder="" name="name" required>
                                                <label for="name"><b class="text-danger">*</b> Teljes név</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="email" class="form-control" id="email" placeholder="" name="email" required>
                                                <label for="email"><b class="text-danger">*</b> Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="tel" class="form-control" id="phone" placeholder="" name="phone" required>
                                                <label for="phone"><b class="text-danger">*</b> Telefonszám</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" id="comp" placeholder="" name="comp">
                                                <label for="comp">Cégnév</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <div class="container">
                                <input class="btn btn-dark" type="submit" name="pleased" value="Ajánlat kérés">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <?php footer_fnc(); ?>
    </body>
</html>