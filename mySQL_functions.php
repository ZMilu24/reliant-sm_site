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
                plan varchar(255),
                comp varchar(255),
                cim varchar(255),
                ado varchar(255),
                szamla varchar(255),
                comment varchar(10239)
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

        function getComment($data, $id) {
            while ($line=$data->fetch_assoc()) {
                if ($line["id"] == $id) {
                    if ($line["comment"] != NULL or $line["comment"] != "") {
                        return($line["comment"]);
                    } else {
                        return("Nincs itt semmi :)");
                    }
                }
            }
            return("ID nem található");
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
                        if ($i != "comment") {
                            if ($line["comp"] != "" or $line["comp"] != null) {
                                if ($i != "szamla" or $i != "cim" or $i != "ado") {
                                    if ($line[$i] == NULL or $line[$i] == "" or $line[$i] == 0) {
                                        $res.="<td>Nincs megadva</td>";
                                    } else {
                                        $res.="<td>".$line[$i]."</td>";
                                    }
                                }
                            } else {
                                if ($line[$i] == NULL or $line[$i] == "" or $line[$i] == 0) {
                                    $res.="<td>Nincs megadva</td>";
                                } else {
                                    $res.="<td>".$line[$i]."</td>";
                                }
                            }
                        } else {
                            $res.="<td><a class='btn text-primary' href='?id=".$line["id"]."'>LINK</a></td>";
                        }
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
                    if (isset($data["ado"])) {
                        $data["ado"] = password_hash($data["ado"], PASSWORD_BCRYPT);
                    } else {
                        $data["ado"] = null;
                    }
                    if (isset($data["szamla"])) {
                        $data["szamla"] = password_hash($data["szamla"], PASSWORD_BCRYPT);
                    } else {
                        $data["szamla"] = null;
                    }
                    if (isset($data["comment"])) {
                        $data["comment"] = $data["comment"];
                    } else {
                        $data["comment"] = null;
                    }
                    if ($tipe == "email") {
                        $data["plan"] = "";
                    }
                    if (isset($data["plan"]) == false ) {
                        $data["plan"] = "Negyedéves terv";
                    }
                    $data["cim"] = password_hash($data["cim"], PASSWORD_BCRYPT);
                    $out=$data["name"]."', '".$data["tel"]."', '".$data["email"]."', '".$tipe."', '".$data["plan"]."', '".$data["comp"]."', '".$data["comment"]."', '".$data["cim"]."', '".$data["szamla"]."', '".$data["ado"];
                    $sql = "INSERT INTO members (`name`, `tel`, `email`, `tipe`, `plan`, `comp`, `comment`, `cim`, `szamla`, `ado`) VALUES ('".$out."')";
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
