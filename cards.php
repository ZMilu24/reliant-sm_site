<?php
    function pck_card($name = "basic") {

        require("config.php");

        $package=$themes[$name];

        ?>
        <div class="kartya w-<?php echo($isMob == false ? "75" : "100"); ?> pb-5 rounded-3" style="background-image: linear-gradient(to bottom left, white, #<?php echo($package["theme color"]); ?>);">
            <div class="py-5">
                <div class="text-left">
                    <div class="row">
                        <div class="col">
                            <h3 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><i><?php echo($package["name"]); ?></i></h3>
                        </div>
                    </div>
                </div>
                <div class="text-left">
                    <div class="row">
                        <div class="col">
                            <h4><i>design</i></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
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

        require("config.php");

        $ceo = $ceos[$name];

        ?>
        <div class="kartya w-100 h-100 bg-dark text-white d-flex flex-column rounded-3">
            <div class="card-header text-center">
                <div class="row">
                    <div class="col">
                        <h3>
                            <?php echo($ceo["name"]); ?>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="card-body text-left flex-grow-1">
                <div class="row">
                    <div class="col">
                        <p <?php require("config.php"); if($isMob){echo('style="text-align: center !important;"');} ?>>
                            <?php echo($ceo["dec"]); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-auto">
                <div class="py-1">
                    <h4 class="role">
                        <?php echo($ceo["role"]); ?>
                    </h4>
                </div>
            </div>
        </div>
    

<?php
    }
    function info_card($title, $disc, $circle=3, $bgcolor="dark") {

        require("config.php");
        
        ?>
        
        <div class="kartya w-100 h-100 bg-<?php echo($bgcolor); ?> text-white rounded-<?php echo($circle); ?>">
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
                        <p <?php require("config.php"); if($isMob){echo('style="text-align: center !important;"');} ?>>
                            <?php echo($disc); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
    function fejleszto_card($title, $disc, $circle=3, $img="logo.png") {

        require("config.php");
        
        ?>
        
        <div class="kartya w-100 h-100 p-3 webcard text-dark rounded-<?php echo($circle); ?>" style="background-color: rgba(200, 200, 200, 0.9);" >
            <div class="row my-3">
                <div class="col">
                    <img width=100 src="imgs/<?php echo($img);?>">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2>
                        <?php echo($title); ?>
                    </h2>
                </div>
            </div>
            <hr style=" background-color: #000000;
                        color: black;
                        height: 3px;">
            <div class="row">
                <div class="col">
                    <p <?php require("config.php"); if($isMob){echo('style="text-align: center !important;"');} ?>>
                        <?php echo($disc); ?>
                    </p>
                </div>
            </div>
        </div>

<?php } ?>
