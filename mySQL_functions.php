<?php

    session_start();

    $_SESSION["logged_in_admin"] = false;

    class Database {

        private $DB;

        function __construct() {
            $this->DB = mysqli_connect("localhost", "root", "", "reliant");
        }
        
        function get_orders() {
            $data=$this->DB->query("SELECT * FROM orders");
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

        function add_to_orders($data) {
            try {
                $out=$data["email"].", ".$data["type"].", ".$data["name"].", ".$data["phone"].", ".$data["Date"].", ".
                $this->DB->query("INSERT INTO orders (`email`, `type`, `name`, `phone`, `Date`) VALUES (".$out.")");
                return(200);
            } catch {
                return(400)
            }
        }

    }

?>