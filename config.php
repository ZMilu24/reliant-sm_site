<?php

    //www.reliant-sm.hu/
    $main_link = "";

    $themes = array();
        $themes["basic"] = [
            "name" => "Basic",
            "utilities" => [
                "weboldal"
            ],
            "url" => "b",
            "theme color" => "9AEBB1",
            "link" => $main_link."template/basic/"
        ];
        $themes["premium"] = [
            "name" => "Premium",
            "utilities" => [
                "weboldal"
            ],
            "url" => "p",
            "theme color" => "DBF5F5",
            "link" => $main_link."template/premium/"
        ];
        $themes["ultra"] = [
            "name" => "Ultra",
            "utilities" => [
                "weboldal",
                "adatbázis"
            ],
            "url" => "u",
            "theme color" => "424478",
            "warning" => "",
            "link" => $main_link."template/ultra/"
        ];

    $ceos = array();
        $ceos["gergo"] = [
            "name" => "Bakalár Gergő",
            "role" => "Co-CEO",
            "dec" => "A Reliant Service Management egyik alapítótagja vagyok, ha bármiféle gond, vagy probléma adódna a szolgáltatásainkkal, akkor az oldalunk alján
                        megadott telefonszámon, engem személyes elérhetnek, hogy minnél hamarabb kitalálhassunk egy megoldást."
        ];
        $ceos["zupan"] = [
            "name" => "Zupán Milán",
            "role" => "Co-CEO",
            "dec" => "A Reliant Service Management alapítótagjaként, Én felelek a programozóink szakmai tudásának biztosításáért és azért, hogy minden Tőlök telhetőt
                        megtegyenek, hogy Önnek a legjobbat nyújtsák."
        ];

    $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));

?>