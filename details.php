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
        /* if (($DB->add_member([$_POST["email"], $_POST["phone"], $_POST["name"], (isset($_POST["comp"]) ? $_POST["comp"] : null)]) and $DB->add_order())) {
            ?>
                <script>
                    alert("Ajánlatkérés sikeres!");
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("Ajánlatkérés sikertelen!");
                </script>
            <?php
        } */
    }

?>

        <?php main_header($package["theme color"]); ?>
        <header>
        </header>
        <main class="container-fluid p-3" style="background-image: linear-gradient(to bottom right, white, #<?php echo($package["theme color"]); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1><i><?php echo($package["name"]); ?></i></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="p-3 m-3">
                            <h3>Fizetési részletek</h3>
                            <p>ba-dum-cs</p>
                            <p>ba-dum-cs</p>
                            <p class="text-danger">Piros szöveg</p>
                        </div>
                    </div>
                    <div class="col">
                        <h3>Csomag tartalmának részletei</h3>
                        <ul>
                            <li>1</li>
                            <li>1</li>
                            <li>1</li>
                            <li>1</li>
                            <li>1</li>
                            <li>1</li>
                            <li>1</li>
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
                                                                <input type="number" class="form-control" id="page-num" name="page-num" placeholder="" value="1" min="1"></input>
                                                                <label for="page-num">Oldalak száma</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <div class="input-group mb-1 rounded-4">
                                                                <div class="input-group-text">
                                                                    <input type="radio" name="type" value="handMade" onclick=handMade()>
                                                                </div>
                                                                <label>Kézzel készített</label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group mb-1">
                                                                <div class="input-group-text">
                                                                    <input type="radio" name="type" value="wordpress" onclick=wp()>
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
                                                                <label>Dinamikusan kővülő kínálat lap</label>
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
                                <div class="row">
                                    <div class="col">
                                        <p class="text-danger">
                                            Ábelesz kábelesz rákmegesz
                                        </p>
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