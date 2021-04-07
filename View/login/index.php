<?php
require('../../Model/connectionClass.php');

$connection = new ConnectionClass();
//var_dump($connection);

$bdd = $connection->connect();
//var_dump($bdd);

// On récupère tout le contenu de la table 
/*$reponse = $bdd->query('SELECT * FROM `users` ');
//var_dump($reponse);

$donnees = $reponse->fetch();
//var_dump($donnees);

$loginNom = $donnees['nom'];
$loginPrenom = $donnees['prenom'];
$loginEmail = $donnees['email'];
$loginUsername = $donnees['username'];
$loginPassword = $donnees['password'];

echo $loginNom . $loginPrenom . $loginEmail . $loginUsername . $loginPassword;


*/
//$reponse->closeCursor();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>FirstReseauSocial</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="../../webroot/css/bootstrap/bootstrap.css">
    <script type="text/javascript" src="../../webroot/js/jquery/jQuery-3.5.1.js"></script>
    <script type="text/javascript" src="../../webroot/js/bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="../../webroot/js/FSR/login.js"></script>
</head>

<body>
    <div class="row">
        <div class="col-6">
            <p>blablabla</p>
        </div>
        <div class="col-6" style="background-color: #F2F2F2; height: 772px;">
            <div style="margin-top: 26%;">
                <div class="card" style="max-width: 50%; margin: auto;">
                    <fieldset class="p-3">
                        <legend class="text-center mt-3">Login</legend>
                        <form action="" method="post">
                            <div class="mb-3 text-center">
                                <input id="login_username" class="w-100" type="text" name="login_username" placeholder="Username">
                            </div>
                            <div class="text-center">
                                <input id="login_password" class="w-100" type="password" name="login_password" placeholder="Password">
                            </div>
                            <div class="text-center ml-5 mt-3">
                                <input type="submit" name="loginBtnConnexion" id="connection" class="btn btn-info" value="Connexion">
                            </div>
                            <hr>
                            <div class="text-center ml-5">
                                <button type="button" id="loginRegister" class="btn btn-success">Créer un compte</button>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <?= require('../Element/Modal/loginModal.php'); ?>

    <?php
    if (isset($_POST["registerForm"])) {
        if (!empty($_POST['register_name']) && !empty($_POST['register_firstname']) && !empty($_POST['register_mail']) && !empty($_POST['register_username']) && !empty($_POST['register_password']) && !empty($_POST['register_password2'])) {
            $firstname = htmlspecialchars($_POST['register_name']);
            $name = htmlspecialchars($_POST['register_firstname']);
            $mail = htmlspecialchars($_POST['register_mail']);
            $username = htmlspecialchars($_POST['register_username']);
            $password = sha1($_POST['register_password']);
            $password2 = sha1($_POST['register_password2']);
            //echo $username; echo $password;
            $registerSQL = "INSERT INTO users(prenom,nom,email,username,password) VALUES ('$firstname','$name','$mail','$username','$password')";
            if($bdd->exec($registerSQL)){
                echo "Données envoyer";
            } else {
                echo "données non envoyées";
            }
            var_dump($registerSQL);
            //var_dump($loginInsert);
            
        } else {
            echo "failed";
        }
    } else {
        echo "pas bon";
    }
    ?>
</body>

</html>