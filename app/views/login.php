<?php
session_start();
$title = 'login' ;
require '../model/template/header.php';
require '../model/template/nav.php';
require '../../config/DataBase.php';
DataBase::connexionDataBase();
?>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center mt-5">
        <form action="../controller/register.php" method="post">
            
            <div class="mb-3">
                <label class="form-label">pseudo </label>
                <input type="text" name="pseudo" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Votre mail ne sera jamais partager.</div>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">mot de passe</label>
                <input type="password" name="mdp" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">connection</button>
        </form>
    </div>

    </div>


<?php
require '../model/template/script.php';

?>