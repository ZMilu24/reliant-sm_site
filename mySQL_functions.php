<?php

    session_start();

    $_SESSION["logged_in_admin"] = false;

    class Database {

        private $DB;

        function __construct() {
            $this->DB = mysqli_connect("localhost", "root", "", "reliant");
        }

        function get_data() {
            $data=$this->DB->query("SELECT * FROM members");
        }
        
        function get_orders() {
            while ($line=$data->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$line["name"]."</td>");
                    echo("<td>".$line["email"]."</td>");
                    echo("<td>".$line["phone"]."</td>");
                    echo("<td>".$line["type"]."</td>");
                    echo("<td>".$line["Date"]."</td>");
                    if ($line["isDone"] == true) {
                        $res = "Készen van";
                    } else {
                        $res = "Nincs kész";
                    }
                    echo("<td>".$res."</td>");
                echo("</tr>");
            }
        }
        
        function order_webpage($data) {
            try {
                //személyes adatok eltárolása
                if (isset($data["comp"])) {
                    $data["comp"] = null;
                }
                $out=$data["name"]."`, `".$data["tel"]."`, `".$data["email"]."`, `".$data["comp"];
                $this->DB->query("INSERT INTO members (`name`, `tel`, `email`, `comp`) VALUES (`".$out."`)");
                //ajánlatfelvétel
                return(200);
            } catch (\Throwable $th) {
                return(400);
            }
        }
    }

?>