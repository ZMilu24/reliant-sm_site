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

    }
    $DB= new Database();

?>