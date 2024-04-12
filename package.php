<?php
    require_once("footer.php");
    require_once("header.php");

    $themes = array();
    $themes["basic"] = [
        "name" => "Basic",
        "main price" => "150",
        "month" => "123",
        "half-year" => "345",
        "year" => "567",
        "theme color" => "9AEBB1"
    ];
    $themes["premium"] = [
        "name" => "Premium",
        "main price" => "350",
        "month" => "123",
        "half-year" => "345",
        "year" => "567",
        "theme color" => "DBF5F5"
    ];
    $themes["ultra"] = [
        "name" => "Ultra",
        "main price" => "500<...",
        "month" => "123",
        "half-year" => "345",
        "year" => "567",
        "warning" => "szöveg",
        "theme color" => "424478"
    ];

    $package = null;

    if ($_GET["p"] == "b") {
        $package = $themes["basic"];
    } else if ($_GET["p"] == "p") {
        $package = $themes["premium"];
    } else if ($_GET["p"] == "u") {
        $package = $themes["ultra"];
    }

?>

    <?php package_header($package["theme color"])?>

    <main class="container-fluid" style="background-image: linear-gradient(to bottom right, white, #<?php echo($package["theme color"]); ?>);">
        <div class="container">
            <div class="row p-3 px-5">
            <div class="col text-left">
                <h1><i><?php echo($package["name"])?></i></h1>
            </div>
        </div>
        <div class="row px-5">
            <div class="col text-left">
                <h2>$<?php echo($package["main price"])?></h2>
            </div>
        </div>
        <div class="row p-3 px-5 mx-5">
            <div class="col text-left">
                <div class="row">
                    <div class="col text-left">
                        <p>cui dixit Dominus unde venis qui respondens ait circuivi terram et perambulavi eam</p>
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
                            <div class="col text-left">
                                <div class="row px-5">
                                    <div class="col text-center">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <td class="text-center bg-light">
                                                        <div class="m-3 my-1">Havi</div>
                                                    </td>
                                                    <td class="text-center bg-light">
                                                        <div class="m-3 my-1">Féléves</div>
                                                    </td>
                                                    <td class="text-center bg-light">
                                                        <div class="m-3 my-1">Éves</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center bg-light">
                                                        <div class="m-3 my-1">$<?php echo($package["month"])?></div>
                                                    </td>
                                                    <td class="text-center bg-light">
                                                        <div class="m-3 my-1">$<?php echo($package["half-year"])?></div>
                                                    </td>
                                                    <td class="text-center bg-light">
                                                        <div class="m-3 my-1">$<?php echo($package["year"])?></div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <p class="text-danger">dixitque Dominus ad eum numquid considerasti servum meum Iob quod non sit ei similis in terra homo simplex et rectus et timens Deum ac recedens a malo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="package_main">
                    <div class="row">
                        <div class="col">
                            <p>
                                Ábelesz
                                kábelesz
                                rákmegesz
                            </p>
                            <p>
                                Ábelesz
                                kábelesz
                                rákmegesz
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>
                                Ábelesz
                                kábelesz
                                rákmegesz
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>
                                <b>
                                    Ábelesz
                                    kábelesz
                                    rákmegesz
                                </b>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>
                                Ábelesz
                                kábelesz
                                rákmegesz
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-danger"><?php if ($_GET["p"] == "u") { echo($package["warning"]); }?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-end mx-5 px-5">
                        <a>
                            <button type="button" class="btn btn-dark btn-lg">
                                <b class="w-100">Sablon megtekintése</b>
                            </button>
                        </a>
                    </div>
                    <div class="col text-left mx-5 px-5">
                        <a href="details.php?pac=<?php echo($_GET["p"]); ?>">
                            <button type="button" class="btn btn-dark btn-lg">
                                <b class="w-100">Részletek</b>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <?php footer_fnc()?>
</body>
</html>