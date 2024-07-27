<?php
    require_once("footer.php");
    require_once("header.php");
    require_once("cards.php");

    require("config.php");
?>
        <style>
            #logo {
                box-shadow: 0 0 99px;
            }
        </style>
        <?php main_header("none"); ?>
        </header>
        <header class="scroller">
            <div class="container h-100" style="display: flex; justify-content: center; align-items: center;" >
                <div class="row h-100" style="display: flex; justify-content: center; align-items: center;">
                    <div class="col text-center h-100" style="display: flex; justify-content: center; align-items: center;">
                        <img src="imgs/logo.png" class="rounded-circle h-<?php echo($isMob == false ? "75" : "50"); ?>" id="logo" style="display: flex; justify-content: center; align-items: center;">
                    </div>
                </div>
            </div>
        </header>
        <main class="container-fluid py-5 scroller" style="background-image: linear-gradient(to top left, white, #868686);">
            <div class="container mb-5">
                <div class="row p-3 px-5">
                    <div class="col text-center">
                        <h2>
                            Üdvözöljük a <h1>Reliant Service Management</h1> <b>oldalán!</b>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="my-3 col text-center">
                        <?php info_card("Rólunk", "A Reliant Service Management 2024-ben alakult két jóbarát és csapatuk által. Azóta minden nap azon dolgozunk, hogy kis- és nagyvállalkozások számára nyújtsunk kiváló szolgáltatásokat, megkönnyítve és rendezettebbé téve működésüket. Célunk, hogy vállalkozása életét egyszerűbbé és hatékonyabbá tegyük. Cégünk azokra a problémákra talált megoldást, amely jellemző sok ország vállalataira, és kisvállalkozásaira, miszerint kevésbé
                                    versenyképesek azokhoz a cégekhez képest, akiknek az informatikai infrastruktúrájukat már sikerült megalapozni és kiépíteni
                                    a modern világban.") ?>
                    </div>
                <?php require("config.php"); if($isMob) {echo('</div><div class="row">');}?>
                    <div class="my-3 col text-center">
                        <?php info_card("Tapasztalataink", "Csapatunk programozói több éves tapasztalattal rendelkeznek a webfejlesztés minden területén, beleértve a frontend és backend fejlesztést is. Rugalmasságuknak köszönhetően rövid időn belül képesek bármilyen igény szerint weboldalt építeni. A kész weboldalakkal növeljük ügyfeleink vállalatainak vásárlókörét és forgalmát, valamint pozitív irányba befolyásoljuk értékeléseik számát.") ?>
                    </div>
                </div>
                <div class="p-5">
                    <div class="row">
                        <div class="col text-center">
                            <h2>Cégvezetők</h2>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="my-3 col text-center">
                        <?php CEO_card("gergo") ?>
                    </div>
                <?php require("config.php"); if($isMob) {echo('</div><div class="row">');}?>
                    <div class="my-3 col text-center">
                        <?php CEO_card("zupan") ?>
                    </div>
                </div>
            </div>
        </main>
        <?php footer_fnc(); ?>
    </body>
</html>