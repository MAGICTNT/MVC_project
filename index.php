<?php
session_start();
$title ='accueil';
require 'config/DataBase.php';
// DataBase::connexionDataBase();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=  $title ?></title>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


    <header class="container-fluid ">
        <nav class="row text-center my-2 ">
            <div class="col-1 mx-auto btn btn-primary text-center"><a href="index.php" class="text-decoration-none link-light">Accueil</a></div>
            <div class="col-1 mx-auto btn btn-primary text-center"><a href="app/views/login.php" class="text-decoration-none link-light">Login</a></div>
            <div class="col-1 mx-auto btn btn-primary text-center"><a href="app/views/register.php" class="text-decoration-none link-light">Inscription</a></div>
            <div class="col-1 mx-auto btn btn-primary text-center"><a href="app/views/dashBoard.php" class="text-decoration-none link-light">profil</a></div>
        </nav>
    </header>

    <div class="container-fluid text-center m-auto">
        <div class="row text-center">
            <p class="col-6">Exercice Structure MVC</p>
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- jQuery -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- style JS -->
    <script src="assets/js/app.js"></script>


</body>
</html>