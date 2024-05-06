<?php
    require_once("footer.php");
    require_once("header.php");
    require_once("cards.php");
?>
        <style>
            #logo {
                box-shadow: 0 0 99px;
            }
        </style>
        <?php main_header("none"); ?>
            <div class="py-5">
                <br class="py-3">
                <br class="py-3">
                <br class="py-3">
            </div>
            <div class="container py-5">
                <div class="row">
                    <div class="col text-center">
                    <img src="imgs/logo.png" class="rounded-circle w-50" id="logo">
                    </div>
                </div>
            </div>
            <div class="py-5">
                <br class="py-3">
                <br class="py-3">
                <br class="py-3">
            </div>
        </header>
        <main class="container-fluid p-3 px-5" style="background-image: linear-gradient(to top left, white, #868686);">
            <div class="container mb-5">
                <div class="row p-3 px-5">
                    <div class="col text-center">
                        <h2>
                            Üdvözöljük a <h1>Reliant Service Management</h1> <b>oldalán!</b>
                        </h2>
                    </div>
                </div>
                <div class="p-5">
                    <div class="row">
                        <div class="col text-center">
                            <h2>A webfejlesztés építőkövei</h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col text-center my-3">
                        <?php info_card("Tervezés", "Csapatunk az Ön által megadott indormációk alapján, a lehető legmegfelelőbb weboldaldesign-t
                                                        készíti el, vagy kézzel a jobb minőség érdekében, vagypedig már létező sablon alapján
                                                        (Az imént említett két lehetőség az oldalunk további részeiben még említve lesz).") ?>
                    </div>
                    <div class="col text-center my-3">
                        <?php info_card("Webdesign", 'Cégünk design-ért felelős részlege, a "Tervezés" részben már említett módokon, élénk, élettelteli és 
                                                        a lehető legkorszerűbb kinézetre törekszik, hogy Önnek, mint Ügyfél a tőlünk telhető legjobbat nyújtsa.
                                                        Minden weboldal, mely nálunk készül el, szakképzett, és tapasztalt munkatársaink bizonyosodnak meg róla,
                                                        hogy az ajánlattételben elvártakból, a legjobbat hozzuk ki (Az ajánlattételről szó esik a "Kínálatunk" oldalunkon).') ?>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col text-center my-3">
                        <?php info_card("SEO", "Az általunk készített weboldalakat, a Google keresőmotorjához optimalizáljuk,
                                                így az Önt sokkal hamarabb találják meg a potenciális látogatók.") ?>
                    </div>
                    <div class="col text-center my-3">
                        <?php info_card("Webfejlesztés", "Cégünk fejlesztésért felelős részlege, a design osztályról megérkezett minta alapján, a weoldalt életre kelti.
                                                            A programozás minden apró kis szegleteiben jártas munkatársaink, ötletes megoldásokkal igyekeznek az Ön weboldalát, mind funkciók,
                                                            mind multikompatibilitás tekintetében tökéletessé tenni. Programozóink készségei lefedik az egész ipart, kezdve a javascript-től a php-ig.") ?>
                    </div>
                </div>
                <div class="col text-center my-3">
                    <?php CEO_card("gergo") ?>
                </div>
                <div class="col text-center my-3">
                    <?php CEO_card("zupan") ?>
                </div>
            </div>
        </main>
        <?php footer_fnc(); ?>
    </body>
</html>