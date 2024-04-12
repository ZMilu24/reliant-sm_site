<?php

    require_once("header.php");
    require_once("footer.php");
    
    $themes["basic"] = [
        "name" => "Basic",
        "price" => "150",
        "theme color" => "9AEBB1"
    ];
    $themes["premium"] = [
        "name" => "Premium",
        "price" => "350",
        "theme color" => "DBF5F5"
    ];
    $themes["ultra"] = [
        "name" => "Ultra",
        "price" => "500",
        "theme color" => "424478"
    ];

    $package = null;

    if ($_GET["pac"] == "b") {
        $package = $themes["basic"];
    } else if ($_GET["pac"] == "p") {
        $package = $themes["premium"];
    } else if ($_GET["pac"] == "u") {
        $package = $themes["ultra"];
    }

?>

        <?php package_header($package["theme color"]); ?>
    <body>
        <main class="container-fluid p-3" style="background-image: linear-gradient(to bottom right, white, #<?php echo($package["theme color"]); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1><?php echo($package["name"]); ?></h1>
                        <h3 id="mainPrice">$<?php echo($package["price"]); ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <style>
                            #btn-group-bg {
                                background: rgba(0, 0, 0, 0.2);
                            }
                        </style>
                        <script src="main.js"></script>
                        <div class="btn-group m-3 my-5" id="btn-group-bg">
                            <button class="btn btn-light m-1" id="monthButton" onclick=month_set() style="background-image: linear-gradient(to left, white, #868686)">Havi</button>
                            <button class="btn btn-light m-1" id="halfyButton" onclick=halfy_set()>Féléves</button>
                            <button class="btn btn-light m-1" id="yearButton" onclick=year_set()>Éves</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="p-3 m-3">
                            <ul>
                                <li><h3>Csomag tartalmának részletei</h3></li>
                                <p>abrakadabra</p>
                                <hr>
                                <li><h3>Fizetési részletek</h3></li>
                                <p>ba-dum-cs</p>
                            </ul>
                        </div>
                    </div>
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
                                                <form method="post">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="input-group mb-3 rounded-4">
                                                                <div class="input-group-text">
                                                                    <input type="radio" name="type" value="handMade" onclick=handMade()>
                                                                </div>
                                                                <label>Kézzel készített</label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-text">
                                                                    <input type="radio" name="type" value="wordpress" onclick=wp()>
                                                                </div>
                                                                <label>Wordpress-ben készített</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-text">
                                                            <input type="checkbox" id="DB">
                                                            </div>
                                                            <label>Adatbázis</label>
                                                        </div>
                                                        <p id="sign"></p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-floating">
                                                            <textarea class="form-control" id="comment" name="text" placeholder="Comment goes here"></textarea>
                                                            <label for="comment">Megjegyzés</label>
                                                        </div>
                                                    </div>
                                                </form>
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
                                    </div>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="tel" class="form-control" id="name" placeholder="Enter name" name="name" required>
                                                <label for="name">Teljes név</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mb-3 mt-3">
                                                <input type="tel" class="form-control" id="phone" placeholder="Enter telefon" name="phone" required>
                                                <label for="phone">Telefon</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <form method="post">
                            <input class="btn btn-dark w-25" type="submit" name="pleased" value="Ajánlat kérés">
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php footer_fnc(); ?>
    </body>
</html>