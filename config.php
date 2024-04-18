<?php

    $themes = array();
        $themes["basic"] = [
            "name" => "Basic",
            "utilities" => [
                "weboldal"
            ],
            "url" => "b",
            "theme color" => "9AEBB1"
        ];
        $themes["premium"] = [
            "name" => "Premium",
            "utilities" => [
                "weboldal",
                "email services",
                "google review"
            ],
            "url" => "p",
            "theme color" => "DBF5F5"
        ];
        $themes["ultra"] = [
            "name" => "Ultra",
            "utilities" => [
                "weboldal",
                "email services",
                "adatbázis",
                "google review"
            ],
            "url" => "u",
            "theme color" => "424478"
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