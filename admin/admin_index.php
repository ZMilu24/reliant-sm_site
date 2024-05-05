<?php

    if (boolval(defined('SID'))) {
        session_start();
        $_SESSION["logged_in_admin"] = false;
    } else {
        if (isset($_POST["login"])) {
            if ($_POST["uname"] == "Reliant_Admin_User_1" and $_POST["psw"] == "Ba_Zu_189672!") {
                $_SESSION["logged_in_admin"] = true;
            } else {
                $_SESSION["logged_in_admin"] = false;
                ?>
                <script>
                    alert("permission denied");
                    window.location.href = "https://www.google.com/";
                </script>
                <?php
            }
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../imgs/logo.png" type="image/icon type">
        <title>Reliant Service Management</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="container bg-dark text-white">

    <?php
        if (isset($_SESSION["logged_in_admin"])) {
            if ($_SESSION["logged_in_admin"] == false) {
                ?>
                
                <form method="post">
                    <input type="text" name="uname">
                    <input type="password" name="psw">
                    <input type="submit" name="login" value="login">
                </form>
    
    
                <?php
            } else {
    
                require_once("main_site.php");
    
                main_page_Admin();
    
            }
        } else {
            ?>
                
                <form method="post">
                    <input type="text" name="uname">
                    <input type="password" name="psw">
                    <input type="submit" name="login" value="login">
                </form>
    
    
                <?php
        }
    ?>

    </body>
</html>