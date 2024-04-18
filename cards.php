<?php
    function pck_card($name = "basic") {

        require_once("config.php");

        $package=$themes[$name];

        ?>
        <div class="card w-100 <?php if ($isMob == false) { echo("h-100"); } ?>" style="background-image: linear-gradient(to left, white, #<?php echo($package["theme color"]); ?>);">
            <div class="card-header text-left">
                <div class="row">
                    <div class="col">
                        <h3><i><?php echo($package["name"]); ?></i></h3>
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
<?php
    }
    function CEO_card($name) {

        require_once("config.php");

        $ceo = $ceos[$name];

        ?>
        
        <div class="card w-100 <?php if ($isMob == false) { echo("h-100"); } ?> bg-dark text-white m-3">
            <div class="card-header text-center">
                <div class="row">
                    <div class="col">
                        <h3>
                            <?php echo($ceo["name"]); ?>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="card-body text-left">
                <div class="row">
                    <div class="col">
                        <p>
                            <?php echo($ceo["dec"]); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col">
                        <h4>
                            <?php echo($ceo["role"]); ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
    function info_card($title, $disc) {

        require_once("config.php");
        
        ?>
        
        <div class="card w-100 <?php if ($isMob == false) { echo("h-100"); } ?> bg-dark text-white m-3">
            <div class="card-header text-center">
                <div class="row">
                    <div class="col">
                        <h2>
                            <?php echo($title); ?>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="card-body text-left">
                <div class="row">
                    <div class="col">
                        <p>
                            <?php echo($disc); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>

<?php
    }
