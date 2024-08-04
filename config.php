<?php

    //www.reliant-sm.eu/
    $main_link = "https://www.reliant-sm.eu/";

    $themes = array();
        $themes["basic"] = [
            "name" => "Basic",
            "utilities" => [
                "weboldal"
            ],
            "url" => "b",
            "theme color" => "9AEBB1",
            "link" => $main_link."template/basic/",
            "bgPic" => "imgs/basic_bg.jpg"
        ];
        $themes["premium"] = [
            "name" => "Premium",
            "utilities" => [
                "weboldal"
            ],
            "url" => "p",
            "theme color" => "DBF5F5",
            "link" => $main_link."template/premium/",
            "bgPic" => "imgs/premium_bg.jpg"
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
            "link" => $main_link."template/ultra/",
            "bgPic" => "imgs/ultra_bg.jpg"
        ];
        $themes["email"] = [
            "name" => "Email",
            "utilities" => [
                null
            ],
            "url" => "e",
            "theme color" => "ECF740",
            "warning" => "",
            "link" => $main_link."template/email/",
            "bgPic" => "imgs/email-bg.png"
        ];

    $ceos = array();
        $ceos["gergo"] = [
            "name" => "Bakalár Gergő",
            "role" => "Ügyvezető",
            "dec" => "A Reliant Service Management egyik alapítótagjaként bármilyen probléma vagy kérdés esetén személyesen elérhet az oldal alján található telefonszámon. Azért vagyok itt, hogy gyors és hatékony megoldásokat találjunk az Ön számára."
        ];
        $ceos["zupan"] = [
            "name" => "Zupán Milán",
            "role" => "Cégvezető",
            "dec" => "A Reliant Service Management alapítótagjaként az én feladatom biztosítani programozóink szakmai felkészültségét és elkötelezettségét. Minden erőnkkel azon dolgozunk, hogy ügyfeleink számára a lehető legmagasabb színvonalú szolgáltatást nyújtsuk."
        ];

    $references = array();
        /*$references["szechenyi_apartman_esztergom"] = [
            "name" => "Szécsényi Apartman Esztergom",
            "link" => "https://www.szechenyi.apartman.hu",
            "image1" => "imgs/references/szechenyiapartman/logo2.png",
            "image2" => "imgs/references/szechenyiapartman/logo.png"
        ];*/
        /*$references["moony"] = [
            "name" => "Moony",
            "link" => "https://moony.com",
            "image1" => "imgs/references/noony/logo2.png",
            "image2" => "imgs/references/moony/logo.png"
        ];*/
        /*$references["pzbau"] = [
            "name" => "PZ-BAU KFT",
            "link" => "https://www.pzbau.com",
            "image1" => "imgs/references/pzbau/logo2.png",
            "image2" => "imgs/references/pzbau/logo.png"
        ];*/

    $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));

?>