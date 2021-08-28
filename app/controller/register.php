<?php
require '../../config/DataBase.php';
if (extension_loaded ('PDO')) {
echo 'PDO OK'; 
} else {
echo 'PDO KO'; 
}

echo '<br>';
echo $_POST['pseudo'];
echo '<br>';
echo $_POST['email'];
echo '<br>';
echo $_POST['mdp'];
echo '<br>';

try
{
    $connexion = DataBase::connexionDataBase();

    $query="SELECT nom_ville FROM  ville ";
    $resultat = $connexion->prepare($query);
    $resultat->execute();
}
catch(PDOExeption $error)
{
    echo $error->getMessage();
    die();
}


// try {

//     $connexion = DataBase::connexionDataBase(); 

//     $requete="SELECT mdp_utilisateur FROM  utilisateur WHERE mail_utilisateur ='".$_POST['email']."'";
//     $resultat= $connexion->prepare($requete);
//     $resultat->execute();

//     foreach($resultat as $valeur) {
//         $mdpSecret= $valeur['mdp_utilisateur'];
//     };

    
    
//     if(password_verify($_POST['mdp'], $mdpSecret)){
//         header('location: ../app/views/dashbord.php');
//     }else{
//         header('location: ../app/views/register.php');
        
//     }
    
//     $connexion = null;

// }
// catch (PDOException $erreur) {

//     echo $erreur->getMessage();
//     die();
// }



// ?>