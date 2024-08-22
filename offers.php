<?php
    require_once("footer.php");
    require_once("cards.php");
    require_once("header.php");

?>
    <?php require("config.php"); header_v2("css/offers.css", "url(imgs/offers_bg.png)", "", "Webfejlesztés")?>
        </header>
        <main class="container-fluid my-5">
            <div id="shutter1" class="shutter container my-3 rounded-3 p-3">
                <div id="child1">
                    <div class="row my-3">
                        <?php if($isMob == false) { ?>
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6 text-center">
                                <h1>Weboldal kínálatunk:</h1>
                            </div>
                            <div class="col-lg-3 text-end">
                                <img id="sideArrow1" class="sideArrow" src="imgs/SideArrow.png" width=100 onclick=replaceElement() >
                            </div>
                        <?php } else { ?>
                            <div class="col text-center">
                                <h1>Weboldal kínálatunk:</h1>
                            </div>
                        <?php } ?>
                    </div>
                        <div class="row my-3">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            Ügyfeleink számára három külömböző “design” csomag érhető el, választható specifikációkkal:
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
                                            Amikor Ön csomagot kérvényez, lehetősége van a weboldalunkon belül egy üzenetet írni nekünk, amelyben részletesen kifejtheti igényeit és elképzeléseit.
                                        </p>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col">
                                        <p>
                                            Ezen túlmenően, nagy hangsúlyt fektetünk arra, hogy Ön minden lépésről részletes tájékoztatást kapjon, biztosítva ezzel az átláthatóságot és a folyamatok nyomon követhetőségét. Büszkék vagyunk arra, hogy rugalmasak vagyunk az Ön egyedi igényeinek kielégítése terén, és mindent megteszünk annak érdekében, hogy a végtermék minden szempontból megfeleljen az elvárásoknak.
                                        </p>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col">
                                        <p>
                                            Szolgáltatásaink minőségének folyamatos fejlesztése érdekében rendszeresen visszajelzést kérünk Ügyfeleinktől, melyeket figyelembe véve igyekszünk még magasabb szintre emelni termékeink és szolgáltatásaink színvonalát. Célunk, hogy hosszú távú, elégedett kapcsolatokat építsünk, amelyek mindkét fél számára gyümölcsözőek.
                                        </p>
                                    </div>
                                </div>
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
                    </div>
                </div>
            <div id="shutter2" class="shutter container my-3 rounded-3 p-3">
                    <div id="child2">
                            <div class="row my-3 mt-3">
                                    <?php if($isMob == false) { ?>
                                        <div class="col-lg-3">
                                            <img id="sideArrow2" class="sideArrow" src="imgs/SideArrow.png" width=100 onclick=replaceElement() >
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="text-center">
                                                <h1>Webfejlesztés alapkövei:</h1>
                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    <?php } else { ?>
                                        <div class="col text-center">
                                            <h1>Webfejlesztés alapkövei:</h1>
                                        </div>
                                    <?php } ?>
                                    </div>
                                        <div class="row my-3">
                                            <div class="my-3 col-lg-6 text-center">
                                                <?php fejleszto_card("Tervezés", "Csapatunk az Ön által megadott információk alapján, a lehető legmegfelelőbb weboldaldesign-t
                                                készíti el, vagy kézzel a jobb minőség érdekében, vagypedig már létező sablon alapján.", 3, "planning_icon.png") ?>
                                            </div>
                                            <div class="my-3 col-lg-6 text-center">
                                                <?php fejleszto_card("Webdesign", 'Cégünk design-ért felelős részlege, élénk, élettelteli és
                                                a lehető legkorszerűbb kinézetre törekszik, hogy Önnek, a tőlünk telhető legjobbat nyújtsa.
                                                Minden weboldalról, amely nálunk készül el, szakképzett, és tapasztalt munkatársaink bizonyosodnak meg,
                                                hogy az ajánlattételben elvártakból, a legjobbat hozzuk ki.', 3, "color_circle_icon.png") ?>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <div class="my-3 col-lg-6 text-center">
                                                <?php fejleszto_card("SEO", "Az általunk készített és üzemeltetett weboldalakat a Google keresőmotorjához optimalizáljuk, így Ön 
                                                könnyebben megtalálja az ügyfeleket. A hatékony SEO révén az Ön weboldala előkelőbb helyezést érhet el a 
                                                keresési eredmények között.", 3,
                                                "seo_icon.png") ?>
                                            </div>
                                            <div class="my-3 col-lg-6 text-center">
                                                <?php fejleszto_card("Webfejlesztés", "Cégünk fejlesztésért felelős részlege, a design osztályról megérkezett minta alapján, a weboldalt életre kelti.
                                                A programozás minden apró kis szegleteiben jártas munkatársaink, ötletes megoldásokkal igyekeznek az Ön weboldalát, mind funkciók,
                                                mind multikompatibilitás tekintetében tökéletessé tenni.", 3, "thinking_icon.png") ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        <script>
            // Use the correct casing for getElementById
            let sh1 = document.getElementById("shutter1");
            let sh2 = document.getElementById("shutter2");
            let holder = document.getElementById("holder");
            let child1 = document.getElementById("child1");
            let child2 = document.getElementById("child2");

            // Get the computed styles of sh1 and sh2
            let child1ComputedStyle = window.getComputedStyle(child1);
            let child2ComputedStyle = window.getComputedStyle(child2);

            // Extract and parse the heights as numbers
            let child1Height = parseFloat(child1ComputedStyle.getPropertyValue('height'));
            let child2Height = parseFloat(child2ComputedStyle.getPropertyValue('height'));

            
            function replaceElement() {
                let sh1 = document.getElementById("shutter1");
                let sh2 = document.getElementById("shutter2");
                let child1 = document.getElementById("child1");
                let child2 = document.getElementById("child2");

                // Add hidden class to trigger fade-out effect
                sh1.classList.add("hidden");

                // Wait for the fade-out to complete before swapping content
                setTimeout(() => {
                    // Swap innerHTML of elements
                    let childA = sh1.innerHTML;
                    let childB = sh2.innerHTML;
                    sh1.innerHTML = childB;
                    sh2.innerHTML = childA;

                    // Remove hidden class and add visible class for fade-in effect
                    sh1.classList.remove("hidden");

                    // Apply fade-in effect
                    sh1.classList.add("visible");
                }, 500); // Match the transition duration in milliseconds
            }

            <?php if($isMob == false) { ?>
                // Find the maximum height
                let maxHeight = Math.max(child1Height, child2Height) *1.15;
            <?php } ?>
            
            <?php if($isMob == true) { ?>

                // Find the maximum height
                let maxHeight = Math.max(child1Height, child2Height) *1.1;
                
                let swipeArea = document.getElementById('shutter1');

                let startX;

                swipeArea.addEventListener('touchstart', function(e) {
                    let touch = e.touches[0];
                    startX = touch.clientX;
                    startY = touch.clientY;
                });

                swipeArea.addEventListener('touchmove', function(e) {
                    // Allow vertical scrolling
                });

                swipeArea.addEventListener('touchend', function(e) {
                    let touch = e.changedTouches[0];
                    let endX = touch.clientX;
                    let endY = touch.clientY;

                    let diffX = endX - startX;
                    let diffY = endY - startY;

                    // Check if horizontal swipe is greater than vertical swipe
                    if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 50) { // Threshold to consider it a swipe
                        if (diffX > 10) {
                            console.log('Swiped right');
                            replaceElement();
                        } else {
                            console.log('Swiped left');
                            replaceElement();
                        }
                    }
                });
            <?php } ?>

            // Set both elements to the maximum height
            sh1.style.height = maxHeight + 'px';

        </script>
    <?php footer_fnc(); ?>
    </body>
</html>