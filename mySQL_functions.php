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
        
        function echo_table($data, $dataname = []) {
            $res="";
            while ($line=$data->fetch_assoc()) {
                $res.="<tr>";
                foreach ($dataname as $i) {
                    $res.="<td>".$data[$i]."</td>";
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
                $out=$data["name"]."`, `".$data["tel"]."`, `".$data["email"]."`, `".$data["comp"];
                $this->DB->query("INSERT INTO members (`name`, `tel`, `email`, `comp`) VALUES (`".$out."`)");
                return(200);
            } catch (\Throwable $th) {
                return(400);
            }
        }
    }

?>