<?php

echo("connected");

    class Database {

        private $DB;

        function __construct() {
            $this->DB = mysqli_connect("localhost", "root", "", "ldxqgqca_reliant");
            /*$this->DB->query("CREATE TABLE IF NOT EXISTS members (
                id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
                tel varchar(255),
                email varchar(255),
                comp varchar(255)
            )");
            $this->DB->query("CREATE TABLE IF NOT EXISTS orders (
                id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
                page_num int,
                tipus varchar(255),
                DB BOOLEAN,
                own_admin BOOLEAN,
                dinamic_page BOOLEAN,
                animatics BOOLEAN,
                footer BOOLEAN,
                responsive BOOLEAN,
                comment varchar(255)
            )"); */
        }

        function get_members() {
            $data = $this->DB->query("SELECT * FROM members");
            if ($data != null) {
                return($data);
            } else {
                return(array());
            }
        }

        function get_orders() {
            $data = $this->DB->query("SELECT * FROM orders");
            if ($data != null) {
                return($data);
            } else {
                return(array());
            }
        }
        
        function echo_table($data, $dataname = [], $table = "members") {
            $res="";
            while ($line=$data->fetch_assoc()) {
                $res.="<tr>";
                foreach ($dataname as $i) {
                    $res.="<td>".$i."</td>";
                    /*if ("orders" == $table) {
                        if ($data[$i] == null) {
                            $res.="<td>Nem kér</td>";
                        } else if ($data[$i] == 1) {
                            $res.="<td>Kér</td>";
                        }
                    }
                    if ("members" == $table) {
                        $res.="<td><a href='?id=".$data["id"]."'></a></td>";
                    }*/
                }
                $res.="</tr>";
            }
            return($res);
        }
        
        function order_webpage($data) {
            try {
                //személyes adatok eltárolása
                if (isset($data["comp"])) {
                    $data["comp"] = null;
                }
                $out=$data["page_num"]."`, `".$data["type"]."`, `".$data["database"]."`, `".$data["own_admin"]."`, `".$data["dinamic_offers"]."`, `".$data["anime-cards"]."`, `".$data["footer"]."`, `".$data["responsive"]."`, `".$data["comment"];
                $this->DB->query("INSERT INTO orders (`page_num`, `tipus`, `DB`, `own_admin`, `dinamic_page`, `animatics`, `footer`, `responsive`, `comment`) VALUES (`".$out."`)");
                //ajánlatfelvétel
                $order_data = ["page_num", "tipus", "DB", "own_admin", "dinamic_page", "animatics", "footer", "responsive", "comment"];
                foreach ($order_data as $name) {
                    if (isset($data[$name])) {
                        $data[$name] = $data[$name];
                    } else {
                        $data[$name] = null;
                    }
                }
                if ($data["tipus"] == null) {
                    $data["tipus"] = "Kézzel";
                }
                $out=$data["name"]."`, `".$data["tel"]."`, `".$data["email"]."`, `".$data["comp"];
                $this->DB->query("INSERT INTO members (`name`, `tel`, `email`, `comp`) VALUES (`".$out."`)");
                return(200);
            } catch (\Throwable $th) {
                return(400);
            }
        }

        function command($sql) {
            $this->DB->qeury($sql);
        }
    }

?>
