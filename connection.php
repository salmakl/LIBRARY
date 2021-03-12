<?php 
$serveur='localhost';
$ndb='books';
$login='root';
$password='';

$connection =mysqli_connect($serveur,$login,$password,$ndb);
if ($connection->connect_error) {
    echo 'Erreur de connexion (' . $connection->connect_errno . ') ' . $connection->connect_error;
}

?>