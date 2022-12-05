<?php
// connection à la base de donné

$mysqli = new mysqli("localhost","root","","moduleconnexion",3307);

if ($mysqli) {
    echo "connexion établie <br />";
  }
  else { 
    die(mysqli_connect_error());
  }
?>