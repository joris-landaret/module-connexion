<?php
include "connect.php";

// variable affichage message d'erreur
$message = "";

//
// connection à la base de donné

$mysqli = mysqli_connect("localhost","root","","moduleconnexion",3307);

//var_dump($mysqli);

$request = $mysqli -> query("SELECT * FROM utilisateurs");

//var_dump($request);

$request_fetch_all = $request -> fetch_all();

var_dump($request_fetch_all);
var_dump($request_fetch_all[2]);


//appuyé sur le bouton submit
if(isset($_POST['vite'])){
    
    //si les champs sont remplis
    if($_POST['login'] && $_POST['password']){
        
        $login = $_POST['login'];
        $pass = $_POST['password'];
        
        //si login n'est pas le même
        $log_ok = false;
        for($i==1; $request_fetch_all[$i]; $i++){  
            var_dump($request_fetch_all[$i]);  
        //foreach($request_fetch_all as $user ){
            if($login == $user [$i] ){
                echo "ok";
                //if($pass == $user [$i]){
                //    echo "ok2";
                //}
            }
            else{echo "login ou mdp mauvais";}

        }
            
    }
    
    else{echo "veuillez remplir tous les champs";}
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/inscription.css">
</head>

<body>
    <?php include('header.php') ?>
    <main>

        <div>
        <h1>Connecte toi vite !!!</h1>
            <form action="" method="post">
                <label for="login">Login</label>
                <Input type="text" name="login"></Input>

                <label for="password">Password</label>
                <Input type="text" name="password"></Input>

                <input type="submit" name="vite" value="vite !!!">
            </form>
            </form>
        </div>

    </main>
    <?php include('footer.php') ?>
</body>

</html>

<?php 

/*
 //decriptage mot de passe
mysqli_fetch_row($requete)
pasword_verifi

une fois mot de pas vérifier


*/

?>