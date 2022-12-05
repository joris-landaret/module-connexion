<?php

// connection à la base de donné
include('connect.php');
//$mysqli = mysqli_connect("localhost","root","","moduleconnexion",3307);

//var_dump($mysqli);

$request = $mysqli -> query("SELECT login, password FROM utilisateurs");

//var_dump($request);

$request_fetch_all = $request -> fetch_assoc();

var_dump($request_fetch_all);

// si requéte égale à post alors

//while(isset($request_fetch_all)){
    if(isset($request_fetch_all['login']) == isset($_POST['log']) && isset($request_fetch_all['password']) == isset($_POST['pass'])){
        
        $log = $_POST['log'];
        $pass = $_POST['pass'];
        $login = $request_fetch_all['login'];
        $password = $request_fetch_all['password'];

        var_dump($login);
        echo 'Bienvennu '.$login;

        //session_start();
    
    }
    else{}
//}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/connexion.css">
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
        </div>

    </main>
    <?php include('footer.php') ?>
</body>

</html>