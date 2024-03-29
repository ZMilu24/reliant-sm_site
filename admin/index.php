<?php

    require_once(__DIR__."/../mySQL_functions.php");

    $DB= new Database();

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
        <main class="container">
            <caption id="unique-caption-id"><h1>Megrendelések</h1></caption>
            <div class="table-wrap" role="region" aria-labelledby="unique-caption-id" tabindex="0">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Név</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefonszám</th>
                            <th scope="col">Csomag</th>
                            <th scope="col">Vásárlás dátuma</th>
                            <th scope="col">Állapot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $DB->get_orders()?>
                    </tbody>
                </table>
            </div>
        </main>
    </body>
</html>