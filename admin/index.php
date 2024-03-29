<?php
    require_once("main_site.php");

    if (isset($_POST["Login"])) {
        if ($_POST["un"] == "Reliant_admin-user" and $_POST["pw"] == "Ba_Zu_189672") {
            $_SESSION["logged_in_admin"] = true;
        } else {
            $_SESSION["logged_in_admin"] = false;
        }
    }

?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Reliant-admin</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #d0d0d0}

            th {
                background-color: #0aab25;
                color: white;
            }
        </style>
    </head>
    <body>
    <?php
    
        if ($_SESSION["logged_in_admin"] == true) {
            main();
        } else {
            ?>
            
            <form method="post">

                <label>Username</label><input type="text" placeholder="username" name="un">
                <br />
                <br />
                <label>Password</label><input type="password" placeholder="password" name="pw">
                <br />
                <br />
                <input type="submit" name="Login" value="Login">

            </form>

            <?php
        }

    ?>
    </body>
</html>