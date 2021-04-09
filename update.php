<?php
include "connection.php";
session_start();
if(empty($_SESSION['pseudo'])){
    header('location:login.php');
}
?>
<html lang="en">
<?php

if(isset($_GET['cin'])){
    $query="SELECT * FROM `authors` WHERE cin='".$_GET['cin']."'";
    $test=mysqli_query($connection,$query);
    while($row=$test->fetch_assoc()){
        $cin=$row['cin'];
        $fname=$row['Fname'];
        $lname=$row['Lname'];
        $date=$row['birthDate'];
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/0407d298dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title> A T H O U R S</title>
</head>
<body>
<div class="form">
    <form action="engin.php" method="POST">
        <div class="one">
        <div>
        <label for="name">CIN</label><br>
        <input type="text" value="<?=$cin?>" name="cin">
        <label for="name">First Name</label><br>
        <input type="text" value="<?=$fname?>" name="Fname">
        <label for="name">Last Name</label><br>
        <input type="text" value="<?=$lname?>" name="Lname">
    </div>

</div>
    <div>
        <label for="name">Date</label><br>
        <input type="date" value="<?=$date?>" name="birthDate">
    </div>
    <br>
    <div>
        <input type="submit" value="Edit" name="edit">
    </div>    
    </form>
    </div>
    </body>
    </html>