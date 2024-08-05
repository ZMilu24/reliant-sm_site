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
    } else if ($_GET["pac"] == "e") {
        $package = $themes["email"];
    }

    if (isset($_POST["pleased"])) {
        $DB = new Database;
        $code = $DB->order_webpage($_POST, $package["name"]);
        if ($code == 200) {
            ?>
                <script>
                    alert("Ajánlatkérés sikeres!");
                    window.location.href = "https://www.reliant-sm.eu/";
                </script>
            <?php
        } else if ($code == 400) {
            ?>
                <script>
                    alert("Az ajánlatkérés ismeretlen okok miatt meghiúsult!");
                    window.location.href = "https://www.reliant-sm.eu/";
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("Undefind error!");
                    window.location.href = "https://www.reliant-sm.eu/";
                </script>
            <?php
        }
    }

?>


        <?php header_v2("css/details.css", "url('imgs/resume_bg.png')", "", $package["name"]); ?>
        <?php //main_header($package["theme color"]); ?>
        </header>
        <main class="container-fluid p-3 mt-5">
            <div class="container">
                <div class="row p-3">
                    <div class="col text-left">
                        <h1><img src="imgs/<?php echo($package["name"]."_ful.png"); ?>" width=300></h1>
                    </div>
                </div>
            </div>
            <div id="shutter" class="container my-3 rounded-3 p-3">
            <div class="container">
                <?php if ($_GET["pac"] != "e") { ?>
                    <div class="row m-5">
                        <div class="col text-center">
                            <button class="btn btn-dark m-3" onclick=plaan(0)>Negyedéves terv</button>
                        </div>
                        <div class="col text-center">
                            <button class="btn btn-dark m-3" onclick=plaan(1)>Fél éves terv</button>
                        </div>
                        <div class="col text-center">
                            <button class="btn btn-dark m-3" onclick=plaan(2)>Egy éves terv</button>
                        </div>
                        <div class="col text-center">
                            <button class="btn btn-dark m-3" onclick=plaan(3)>Két éves terv</button>
                        </div>
                        <div class="col text-center">
                            <button class="btn btn-dark m-3" onclick=plaan(4)>Öt éves terv</button>
                        </div>
                    </div>
                    <script>
                        function plaan(id) {
                            plans(id);
                            switch (id) {
                                case 0:
                                    <?php $_POST["plan"] = "Negyedéves terv" ?>
                                    break;
                                case 1:
                                    <?php $_POST["plan"] = "Fél éves terv" ?>
                                    break;
                                case 2:
                                    <?php $_POST["plan"] = "Egy éves terv" ?>
                                    break;
                                case 3:
                                    <?php $_POST["plan"] = "Két éves terv" ?>
                                    break;
                                case 4:
                                    <?php $_POST["plan"] = "Öt éves terv" ?>
                                    break;
                            
                                default:
                                    <?php $_POST["plan"] = "Negyedéves terv" ?>
                                    break;
                            }
                        }
                    </script>
                <?php } ?>
                <div class="row">
                    <div class="col">
                        <div class="p-3 m-3">
                            <h3>Fizetési részletek</h3>
                            <p>Miután az Ügyfél megrendelte a csomagot, és leírta igényeit, egy árajánlatot küldünk.
Ha a <i><span id="plan">Negyedéves</span> tervre</i> esett a választás, két lehetőség állhat fenn:</p>
                            <ul>
                                <li id="li1">Az Ügyfél az első hónapra  kifizeti a csomag árát, utána kettő hónapig egy meghatározott dátumon a fenntartási költségeket
        vonjuk le (az árajánlat tartalmazza a havi fenntartási költségeket is).</li>
                                <li id="li2">Az Ügyfél az árajánlatban megemlített összeget, egy utalás alatt fedezi, és Fél évre biztosítva van az oldala.</li>
                            </ul>
                            <p>E két opció közül majd a "Fizetés" oldalunkon lehet választani, miután visszaküldtük Önnek az ajánlatunkat.</p>
                            <p id="extra-text"></p>
                        </div>
                    </div>
                <?php require("config.php"); if($isMob) {echo('</div><div class="row">');}?>
                    <?php if ($_GET["pac"] != "e") { ?>
                        <div class="col">
                            <div class="p-3 m-3">
                                <h3>Igényelhető specifikációk</h3>
                                <ul>
                                    <li>Saját admin felület: Megrendelések esetén itt láthatja ki és mit rendelt öntől</li>
                                    <li>Animált kártyák/Animációk;</li>
                                    <li>Egyedi lábléc;</li>
                                    <li>Reszponzív design: Minden képernyőméreten (telefon, táblagép, számítógép) tökéletes megjelenésű oldal (<span class="text-danger">Ha Ön nem kéri, akkor csak számítógépes verziót készítünk</span>)</li>
                                    <li>Logo készítés;</li>
                                </ul>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col">
                            <div class="p-3 m-3">
                                <h3>Csomag tartalma</h3>
                                <ul>
                                    <li>Email Megíró Program</li>
                                    <li>Email Küldő Program</li>
                                    <li>Email Automatizálás</li>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <form method="post">
                    <!--<div class="row">
                            <div class="col">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="bg-light p-3 m-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <h3>Igényelhető specifikációk</h3>
                                                        <p class="text-danger">
                                                            Az itt bejelölt specifikációk nem véglegesek, csak egy támpontot ad a fejlesztőink számára, de egy telefonos, vagy egy e-mailben történő egyeztetés után ez változhat
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-floating">
                                                                    <input type="number" class="form-control" id="page_num" name="page_num" placeholder="" value="1" min="1" max="20"></input>
                                                                    <label for="page_num">Oldalak száma</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <div class="input-group mb-1 rounded-4">
                                                                    <div class="input-group-text">
                                                                        <input type="radio" name="type" value="Kézzel" checked>
                                                                    </div>
                                                                    <label>Kézzel készített</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="input-group mb-1">
                                                                    <div class="input-group-text">
                                                                        <input type="radio" name="type" value="Wordpressben">
                                                                    </div>
                                                                    <label>Wordpress-ben készített</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-text">
                                                                    <input type="checkbox" name="own_admin" id="own_admin">
                                                                    </div>
                                                                    <label>Saját admin felület</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-text">
                                                                    <input type="checkbox" name="anime_cards" id="anime_cards">
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
                        </div>-->
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
                                                <input type="text" class="form-control" id="name" placeholder="" name="name" required>
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
                                                <input type="number" class="form-control" id="phone" placeholder="" name="tel" required>
                                                <label for="phone"><b class="text-danger">*</b> Telefonszám</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="text" class="form-control" id="cim" placeholder="" name="cim" required>
                                                <label for="cim"><b class="text-danger">*</b> Lakcím</label>
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
                                    <style>
                                        #comp_det {
                                            transition: 0.5s;
                                        }
                                        .hidden {
                                            display: none;
                                        }
                                    </style>
                                    <div class="hidden" id="comp_det">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-floating mb-3 mt-3">
                                                    <input type="text" class="form-control" id="ado" placeholder="" name="ado">
                                                    <label for="ado"><b class="text-danger">*</b> Adószám</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3 mt-3">
                                                <input type="checkbox" name="cimek" id="cimek">
                                                <label for="cimek">A számlázási cím, megegyezik a lakcímmel</label>
                                                </div>
                                                <div class="form-floating mb-3 mt-3">
                                                    <input type="text" class="form-control" id="szamla" placeholder="" name="szamla">
                                                    <label for="szamla"><b class="text-danger">*</b> Számlázási cím</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        const comp = document.getElementById("comp");
                                        const comp_det = document.getElementById("comp_det");
                                        const ado = document.getElementById("ado");
                                        const szamla = document.getElementById("szamla");

                                        comp.addEventListener("input", function() {
                                            if (this.value.trim() !== "") {
                                                comp_det.classList.remove("hidden");
                                                szamla.required = true;
                                                ado.required = true;
                                            } else {
                                                comp_det.classList.add("hidden");
                                                szamla.required = false;
                                                ado.required = false;
                                            }
                                        });
                                        
                                        const cimek = document.getElementById("cimek");
                                        const lak = document.getElementById("cim");
                                        
                                        cimek.addEventListener("input", function() {
                                            if (this.checked) {
                                                szamla.value = lak.value;
                                                szamla.disabled = true;
                                            } else {
                                                szamla.disabled = false;
                                            }
                                        });
                                    </script>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating">
                                                <textarea class="form-control" id="comment" name="comment" placeholder=""></textarea>
                                                <label for="comment">Mi az ön elképzelése?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3 mt-3">
                                            <input type="checkbox" name="adatvedelmi" id="adatvedelmi" required>
                                            <label for="adatvedelmi">Kérjük fogadja el az <a href="adatvedelmi_nyilatkozat.pdf">Adatvédelmi Nyilatkozatokat</a></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col text-center">
                            <div class="container">
                                <input class="btn btn-dark" type="submit" name="pleased" value="Megrendelés">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <section class="container-fluid p-3 mt-5">
            <div class="row">
                <div class="col">
                    <a class="rounded-circle" href="<?php if ($_GET["pac"] == 'e') {echo("email.php");} else {echo("package.php?p=".$_GET["pac"]);} ?>">
                        <img src="imgs/back_button.png" width="80">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a class="rounded-circle" href="https://www.reliant-sm.eu/">
                        <img src="imgs/home_button.png" width="80">
                    </a>
                </div>
            </div>
        </section>
        <?php footer_fnc(); ?>
    </body>
</html>
