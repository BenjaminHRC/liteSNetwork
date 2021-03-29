<?php
require('../../Model/connectionClass.php');

$connection = new ConnectionClass();
//var_dump($connection);

$bdd = $connection->connect();
//var_dump($bdd);

// On récupère tout le contenu de la table 
$reponse = $bdd->query('SELECT * FROM `users` ');
//var_dump($reponse);

$donnees = $reponse->fetch();
//var_dump($donnees);

$loginNom = $donnees['nom'];
$loginPrenom = $donnees['prenom'];
$loginEmail = $donnees['email'];
$loginUsername = $donnees['username'];
$loginPassword = $donnees['password'];

echo $loginNom . $loginPrenom . $loginEmail . $loginUsername . $loginPassword;

$reponse->closeCursor();

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
        <div class="col-6">
            <div class="">
                <fieldset style="max-width: 50%; margin: auto;">
                    <legend>Login</legend>
                    <form action="../../Model/login.php" method="post">
                        <div class="mb-3">
                            <label>Username/email</label>
                            <input id="username" type="text" name="login_username" placeholder="Enter your username...">
                        </div>
                        <div>
                            <label>Password</label>
                            <input id="password" type="password" name="login_password" placeholder="Enter your password...">
                        </div>
                        <button type="submit" id="connection" class="ml-5">Connection</button>
                        <hr>
                        <button type="button" id="register" class="ml-5">Creer un compte</button>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
    </div>
</body>

</html>