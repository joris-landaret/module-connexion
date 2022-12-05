<?php

// connection à la base de donné
include('connect.php');
//$mysqli = mysqli_connect("localhost","root","","moduleconnexion",3307);

//var_dump($mysqli);

$request = $mysqli -> query("SELECT * FROM utilisateurs");

//var_dump($request);

$request_fetch_all = $request -> fetch_all();

var_dump($request_fetch_all);

//appuyé sur le bouton submit
if(isset($_POST['envoi'])){
    
    //si les champs sont remplis
    if($_POST['login'] && $_POST['prenom'] && $_POST['nom'] && $_POST['password'] && $_POST['confirmpassword']){
        
        $login = $_POST['login'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $pass = $_POST['password'];
        $confirmpass = $_POST['confirmpassword'];

        //si les passwords son identique 
        if ($pass == $confirmpass){
            

            //si login n'est pas le même
            $log_ok = false;
                //
            foreach($request_fetch_all as $user){
                if($login == $user [1]){
                    
                }
                else{$log_ok = true;}
            }
            
            if($log_ok == true){

                $sql = "INSERT INTO `utilisateurs` (`login`,`prenom`,`nom`,`password`) 
                VALUE ('$login','$prenom','$nom','$pass')";
                $request2 = $mysqli -> query($sql);
                //echo "ok";
                header("location:connexion.php");

            }
            else{echo "Le nom du login est déja utilisé";}
            
        }
        else{echo "les mots de passes ne sont pas identique";}
    }
    else{echo "veuillez remplir tous les champs";}
}

//if(isset($_POST['login']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['password'])){

    //$login = $_POST['login'];
    //$prenom = $_POST['prenom'];
    //$nom = $_POST['nom'];
    //$pass = $_POST['password'];

    //$requete = $request_fetch_all -> ('INSERT INTO utilisateurs(login, prenom, nom, password')

//}
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
            <h1>Inscrit toi !!!</h1>
            <form action="" method="post">
                <label for="login">Login</label>
                <Input type="text" name="login">

                <label for="prenom">Prenom</label>
                <Input type="text" name="prenom">

                <label for="nom">Nom</label>
                <Input type="text" name="nom">

                <label for="password">Password</label>
                <Input type="text" name="password">

                <label for="confirmpassword">Confirmation de password</label>
                <Input type="text" name="confirmpassword">

                <input type="submit" name="envoi">
            </form>
        </div>

    </main>
    <?php include('footer.php') ?>
</body>

</html>