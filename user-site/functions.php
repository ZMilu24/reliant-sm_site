<?php

    function name_card($name, $disc, $num, $pic_url = null) {
        ?><div class="col-lg-<?php echo(12 / intval($num)); ?>"><?php
        if ($pic_url !== null) {
            echo '<img src="' . $pic_url . '">';
        }
        ?>
        <h3>
            <b>
                <?php echo($name); ?>
            </b>
        </h3>
            <p>
                <?php echo($disc); ?>
            </p>
        </div>
        <?php
    }

    function price_card($name, $details, $num) {
        ?>
        <div class="col-lg-<?php echo(12 / intval($num)); ?>">
        <button>
            <?php echo($name);?>
        </button>
        <ul>
            <?php
            print_r($details);
                foreach ($details as $detail) {
                    echo("<li>".$detail."</li>");
                }
            ?>
        </ul>
        </div>
        <?php

    }

    function card_in_row($data, $type) {
        $len = count($data);
        foreach ($data as $unit) {
            if ($type=="price") {
                price_card($unit["name"], $unit["details"], $len);
            }
            if ($type=="name"){
                name_card($unit["name"], $unit["disc"], $len);
            }
        }
    }


?>
