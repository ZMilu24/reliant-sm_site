<?php
function header_fnc($color="868686") { ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="packages_style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Reliant Service Management</title>
</head>
<body>
<header class="container-fluid" style="background-image: linear-gradient(to right, white, #<?php echo($color); ?>);">
    <div class="row p-3 px-5">
        <div class="col text-left">
            <h4>
                <b id="header_home">Reliant Service Management</b>
            </h4>
        </div>
        <div class="col text-end">
            <img class="rounded-circle" src="imgs/login.png" height="50">
            <button type="button" class="btn btn-dark mx-3">
                Log In
            </button>
            <button type="button" class="btn btn-dark mx-3">
                Sign Up
            </button>
        </div>
    </div>
</header>
<?php } ?>