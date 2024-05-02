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
            "dec" => "gaygaygay"
        ];
        $ceos["zupan"] = [
            "name" => "Zupán Milán",
            "role" => "Co-CEO",
            "dec" => "POG POG POG"
        ];

    $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));

?>