<?php
    function pck_card($name = "basic") {
        $packages = array();
        $packages["basic"] = [
            "name" => "Basic",
            "price" => "150",
            "utilities" => [
                "weboldal"
            ],
            "url" => "b",
            "theme" => "9AEBB1"
        ];
        $packages["premium"] = [
            "name" => "Premium",
            "price" => "350",
            "utilities" => [
                "weboldal",
                "email services",
                "google review"
            ],
            "url" => "p",
            "theme" => "DBF5F5"
        ];
        $packages["ultra"] = [
            "name" => "Ultra",
            "price" => "500<...",
            "utilities" => [
                "weboldal",
                "email services",
                "google review",
                "kölnyveléssegítő kiegészítők"
            ],
            "url" => "u",
            "theme" => "424478"
        ];

        $package=$packages[$name];

        ?>
        <div class="card w-100 h-100" style="background-image: linear-gradient(to left, white, #<?php echo($package["theme"]); ?>);">
            <div class="card-header text-left">
                <div class="row">
                    <div class="col">
                        <h3><i><?php echo($package["name"]); ?></i></h3>
                        <br>
                        <h2>$<?php echo($package["price"]); ?></h2>
                    </div>
                </div>
            </div>
            <div class="card-body text-left">
                <div class="row">
                    <div class="col">
                        <h4>Tartalmazza:</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <ul>
                            <?php
                            
                                foreach ($package["utilities"] as $value) {
                                    echo("<li>".$value."</li>");
                                }

                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="package.php?p=<?php echo($package["url"]); ?>">
                    <button class="btn btn-dark w-75">
                        Megtekintés
                    </button>
                </a>
            </div>
        </div>
<?php } ?>