<?php

    class Database {

        private $DB;

        function __construct() {
            $this->DB = mysqli_connect("localhost", "ldxqgqca", "91AAmaMv:4c0:Q", "ldxqgqca_reliant");
            $this->DB->query("CREATE TABLE IF NOT EXISTS members (
                id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
                name varchar(255),
                tel varchar(255),
                email varchar(255),
                tipe varchar(255),
                comp varchar(255),
                comment varchar(10000)
            )");
            /*$this->DB->query("CREATE TABLE IF NOT EXISTS orders (
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
            )");*/
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
                    if ($table == "orders") {
                        if ($i == "page_num" or $i == "tipus" or $i == "comment") {
                            $res.="<td>".$line[$i]."</td>";
                        } else if ($line[$i] == 0) {
                            $res.="<td>Nem kér</td>";
                        } else {
                            $res.="<td>Kér</td>";
                        }
                    }else {
                        $res.="<td>".$line[$i]."</td>";
                    }
                }
                /*if ($table == "members") {
                    $res.="<td><a href='?id=".$line["id"]."'>CLICK</a></td>";
                }*/
                $res.="</tr>";
            }
            return($res);
        }
        
        function order_webpage($data, $tipe="basic") {
            try {
                //ajánlatfelvétel
                /*$order_data = ["page_num", "type", "database", "own_admin", "dinamic_offers", "anime_cards", "footer", "responsive", "comment"];
                foreach ($order_data as $order) {
                    if (isset($data[$order])) {
                        $data[$order] = $data[$order];
                    } else {
                        $data[$order] = null;
                    }
                }
                if ($data["type"] == null) {
                    $data["type"] = "Kézzel";
                }
                $out=$data["page_num"]."', '".$data["type"]."', '".$data["database"]."', '".$data["own_admin"]."', '".$data["dinamic_offers"]."', '".$data["anime_cards"]."', '".$data["footer"]."', '".$data["responsive"]."', '".$data["comment"];
                $sql = "INSERT INTO orders (`page_num`, `tipus`, `DB`, `own_admin`, `dinamic_page`, `animatics`, `footer`, `responsive`, `comment`) VALUES ('".$out."')";
                $this->DB->query($sql);*/
                //személyes adatok eltárolása
                if (isset($data["comp"])) {
                    $data["comp"] = $data["comp"];
                } else {
                    $data["comp"] = null;
                }
                if (isset($data["comp"])) {
                    $data["comp"] = $data["comp"];
                } else {
                    $data["comp"] = null;
                }
                $out=$data["name"]."', '".$data["tel"]."', '".$data["email"]."', '".$tipe."', '".$data["comp"]."', '".$data["comment"]."', '".$data["cim"];
                $sql = "INSERT INTO members (`name`, `tel`, `email`, `tipe`, `comp`, `comment`, `cim`) VALUES ('".$out."')";
                $this->DB->query($sql);
                return(200);
            } catch (\Throwable $th) {
                echo($th);
                return(400);
            }
        }

        function command($sql) {
            $this->DB->qeury($sql);
        }
    }

?>
