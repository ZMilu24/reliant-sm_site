<?php

    class Database {

        private $DB;

        function __construct() {
            $this->DB = mysqli_connect("localhost", "root", "", "reliant");
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
                    if ("orders" == $table) {
                        if ($data[$i] == null) {
                            $res.="<td>Nem kér</td>";
                        } else if ($data[$i] == 1) {
                            $res.="<td>Kér</td>";
                        }
                        
                    }
                }
                if ("members" == $table) {
                    $res.="<td><a href='?id=".$data["id"]."'></a></td>";
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
                $out=$data["page-num"]."`, `".$data["type"]."`, `".$data["database"]."`, `".$data["own-admin"]."`, `".$data["dinamic-offers"]."`, `".$data["anime-cards"]."`, `".$data["footer"]."`, `".$data["responsive"]."`, `".$data["comment"];
                $this->DB->query("INSERT INTO orders (`page-num`, `tipus`, `DB`, `own-admin`, `dinamic-page`, `animatics`, `footer`, `responsive`, `comment`) VALUES (`".$out."`)");
                //ajánlatfelvétel
                $order_data = ["page-num", "tipus", "DB", "own-admin", "dinamic-page", "animatics", "footer", "responsive", "comment"];
                foreach ($order_data as $name) {
                    if (not isset($data[$name])) {
                        $data[$name] = null;
                    }
                }
                if ($data["tipus"] == null) {
                    $data["tipus"] = "Kézzel"
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