<?php
    require_once("footer.php");
    require_once("cards.php");
    require_once("header.php");

?>
    <?php require("config.php"); header_v2("css/offers.css", "url(imgs/offers_bg.png)", "", "Webfejlesztés")?>
        </header>
        <main class="container-fluid my-5">
            <div id="shutter" class="container my-3 rounded-3 p-3">
            <div class="row my-3">
                <div class="col text-center">
                    <h1>Weboldal kínálatunk:</h1>
                </div>
            </div>
                <div class="row my-3">
                    <div class="col">
                        <p class="text-danger">
                            A csomagok besorolása szerint és a választott opciók függvényében, az oldalak elkészülési ideje megnövekedhet!
                        </p>
                    </div>
                </div>
                <div class="row my-3" id="offer-card-container">
                    <div class="col text-center">
                        <div class="row mx-5" style="margin-inline: auto; !important">
                            <div class="col <?php echo($isMob == false ? "" : "py-3"); ?>" style="margin-inline: auto !important;
  margin-left: auto;
  display: flex;
  margin-right: auto;
  justify-content: center;
  align-items: center;
  place-content: center;">
                                <?php pck_card("basic"); ?>
                            </div>
                            <div class="col <?php echo($isMob == false ? "" : "py-3"); ?>" style="margin-inline: auto !important;
  margin-left: auto;
  display: flex;
  margin-right: auto;
  justify-content: center;
  align-items: center;
  place-content: center;">
                                <?php pck_card("premium"); ?>
                            </div>
                            <div class="col <?php echo($isMob == false ? "" : "py-3"); ?>" style="margin-inline: auto !important
  justify-content: center;
  display: flex;
  align-items: center;
  margin-left: auto;
  margin-right: auto;
  place-content: center;">
                                <?php pck_card("ultra"); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p>
                                    
                                    Ügyfeleink számára három külömböző “design” csomag érhető el, választható specifikáviókkal:

                                </p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <i>Alap (Basic);</i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <i>Prémium (Premium);</i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <i>és Ultra.</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col">
                                <p>
                                    Csomagjaink kinézetének minősége eféleképpen változik növekvő sorrendben: Basic; Premium; Ultra.
                                    A csomagok kérvényezésekor az Ügyfél a weboldalunkon belül, egy üzenetet tud írni nekünk, amelyben részletesen kifejtheti igényeit,
                                    melyet csapatunk tagjai megkapnak és válaszképp visszaküldenek egy árajánlatot és a várható elkészülés időtartamát. Ha a feldolgozás vagy a folyamat közben félreértés esne, csapatunk tagja e-mailben
                                    vagy telefonon fogja felkeresni Önt további egyeztetésért.
                                </p>
                            </div>
                        </div>
            <div class="row my-3 mt-5">
                <div class="col">
                    <div>
                        <h2>Webfejlesztés alapkövei:</h2>
                    </div>
                </div>
            </div>
                <div class="row my-3">
                    <div class="my-3 col text-center">
                        <?php info_card("Tervezés", "Csapatunk az Ön által megadott információk alapján, a lehető legmegfelelőbb weboldaldesign-t
    készíti el, vagy kézzel a jobb minőség érdekében, vagypedig már létező sablon alapján
    (Az imént említett két lehetőség az oldalunk további részeiben még említve lesz).", 3) ?>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="my-3 col text-center">
                        <?php info_card("Webdesign", 'Cégünk design-ért felelős részlege, a "Tervezés" részben már említett módokon, élénk, élettelteli és
    a lehető legkorszerűbb kinézetre törekszik, hogy Önnek, mint Ügyfél a tőlünk telhető legjobbat nyújtsa.
    Minden weboldalról, amely nálunk készül el, szakképzett, és tapasztalt munkatársaink bizonyosodnak meg,
    hogy az ajánlattételben elvártakból, a legjobbat hozzuk ki (Az ajánlattételről szó esik a "Kínálatunk" oldalunkon).', 3) ?>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="my-3 col text-center">
                        <?php info_card("SEO", "Az általunk készített és üzemeltetett weboldalakat a Google keresőmotorjához optimalizáljuk, így a kis- és középvállalkozások könnyebben megtalálják az ügyfeleket. A hatékony SEO révén ügyfeleink weboldalai előkelőbb helyezést érnek el a keresési eredmények között. Bízza ránk weboldala optimalizálását, hogy Ön is előnyt élvezhessen a versenytársakkal szemben.", 3) ?>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="my-3 col text-center">
                        <?php info_card("Webfejlesztés", "Cégünk fejlesztésért felelős részlege, a design osztályról megérkezett minta alapján, a weboldalt életre kelti.
    A programozás minden apró kis szegleteiben jártas munkatársaink, ötletes megoldásokkal igyekeznek az Ön weboldalát, mind funkciók,
    mind multikompatibilitás tekintetében tökéletessé tenni. Programozóink készségei lefedik az egész ipart, kezdve a javascript-től a php-ig.", 3) ?>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </main>
    <!--<?php //main_header("9dc2c7", "gray"); ?>
        </header>
        <main class="w-100 container-fluid" style="background-image: linear-gradient(to top right, gray, #9dc2c7);">
            <div class="container py-5">
                <div class="row">
                    <div class="col text-center">
                        <h1>Minden amit Kínálunk:</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p>
                                    Cégünk azokra a problémákra talált megoldást, amely jellemző sok ország vállalataira, és kisvállalkozásaira, miszerint kevésbé 
                                    versenyképesek azokhoz a cégekhez képest, akiknek az informatikai infrastruktúrájukat már sikerült megalapozni és kiépíteni
                                    a modern világban.
                                    Ügyfeleink számára három külömböző “design” csomag érhető el, választható specifikáviókkal:

                                </p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <i>Alap (Basic);</i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <i>Prémium (Premium);</i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <i>és Ultra.</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col">
                                <p>
                                Csomagjaink kinézetének minősége eféleképpen változik növekvő sorrendben: Basic; Premium; Ultra.
                                A csomagok kérvényezésekor az Ügyfél a weboldalunkon belül, egy üzenetet tud írni nekünk, amelyben részletesen kifejtheti igényeit,
                                melyet csapatunk tagjai megkapnak és válaszképp visszaküldenek egy árajánlatot és a várható elkészülés időtartamát. Ha a feldolgozás vagy a folyamat közben félreértés esne, csapatunk tagja e-mailben
                                vagy telefonon fogja felkeresni Önt további egyeztetésért.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-danger">
                            A csomagok besorolása szerint és a választott opciók függvényében, az oldalak elkészülési ideje megnövekedhet!
                        </p>
                    </div>
                </div>
                <div class="row" id="offer-card-container">
                    <div class="col text-center">
                        <div class="row mx-5">
                            <div class="col <?php //echo($isMob == false ? "" : "py-3"); ?>">
                                <?php //pck_card("basic"); ?>
                            </div>
                            <div class="col <?php //echo($isMob == false ? "" : "py-3"); ?>">
                                <?php //pck_card("premium"); ?>
                            </div>
                            <div class="col <?php //echo($isMob == false ? "" : "py-3"); ?>">
                                <?php //pck_card("ultra"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <style>
            #offer-card-container {
                margin:0 !important;
            }
        </style>-->
    <?php footer_fnc(); ?>
    </body>
</html>