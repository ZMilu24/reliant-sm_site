<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}

            /* Full-width input fields */
            input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
            cursor: pointer;
            }

            button:hover {
            opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
            }

            /* Center the image and position the close button */
            .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
            }

            img.avatar {
            width: 40%;
            border-radius: 50%;
            }

            .container {
            padding: 16px;
            }

            span.psw {
            float: right;
            padding-top: 16px;
            }

            /* The Modal (background) */
            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */
            .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
            }

            .close:hover,
            .close:focus {
            color: red;
            cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)} 
            to {-webkit-transform: scale(1)}
            }
            
            @keyframes animatezoom {
            from {transform: scale(0)} 
            to {transform: scale(1)}
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="container bg-dark">

        <div class="row">
            <div class="col m-5 text-center bg-dark">

                <button class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

                <div id="id01" class="modal bg-dark">
                    
                    <form class="modal-content animate w-50 bg-dark" action="/action_page.php" method="post">
                        <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>

                        <div class="container bg-dark">
                        <label class="text-primary" for="uname"><b>Username</b></label>
                        <input class="bg-dark" type="text" placeholder="Enter Username" name="uname" required>

                        <label class="text-primary" for="psw"><b>Password</b></label>
                        <input class="bg-dark" type="password" placeholder="Enter Password" name="psw" required>
                            
                        <button type="submit" class="btn btn-primary">Login</button>

                        <div class="container bg-dark text-start" style="background-color:#f1f1f1">
                            <button class="btn btn-danger" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

    </body>
</html>
