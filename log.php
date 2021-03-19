<?php
include 'connection.php';
session_start();
if(isset($_POST['login'])){
    
    $pseudo=$_POST['pseudo'];
    $password=$_POST['pwd'];
    print_r($_POST);
    echo "<br>";
  
    $requete= "SELECT * FROM users WHERE pseudo='$pseudo' AND pwd='$password'";
    $exe=mysqli_query($connection,$requete);
    //print_r($exe);
        if($exe->num_rows == 1){
            $_SESSION['pseudo']=$pseudo;
            header('location:index.php');
            
        }else{
            header('location:login.php');
        }
    

}?>