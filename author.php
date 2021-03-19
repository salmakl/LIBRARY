<?php
include 'connection.php';
session_start();
if(empty($_SESSION['pseudo'])){
    header('location:login.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/0407d298dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title> A U T H O U R S</title>
</head>
<body>
        <!--begin header-->
        <header>
        <a href="index.php"><img src="images/logo.png" alt="#"></a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="library.php">Gallery</a></li>
            <li><a href="books.php">Books</a></li>
            <li class="active"><a href="author.php">Authors</a></li>
            <?php
            if(empty($_SESSION['pseudo'])){
                echo "<li class='log'><a href='login.php' >Login</a></li>";
            }else{
                echo "<li><a href='logOut.php'>Logout</a></li>";
            }
            ?>
        </ul>
    </header>
    <!--End header-->
 <div class="form">
    <form action="engin.php" method="POST">
        <div class="one">
            <div>
                <label for="name">CIN</label>
                <input type="text" name="cin">
            </div>

            <div>
                <label for="name">First Name</label>
                <input type="text" name="Fname">
            </div>
        </div>

        <div class="one">
            <div>
                <label for="name">Last Name</label>
                <input type="text" name="Lname">
            </div>

        <div>
                <label for="name">Date</label>
                <input type="date" name="birthDate">
        </div>
       
    </div>
       

    
    
    <div style="text-align:center;">
        <input type="submit" value="ADD" name="add">
    </div>    
    </form>
    </div>

<div class="table-container">
    <table>
        <tr>
            <th><h4>CIN</h4></th>
            <th><h4>First Name</h4></th>
            <th><h4>Last Name</h4></th>
            <th><h4>Birth date</h4></th>
            <th><h4>Actions</h4></th>
        </tr>
    <?php
        include "connection.php";
        $select="SELECT * FROM `authors`";
        $test=mysqli_query($connection,$select);
        while($row=$test->fetch_assoc()){
            echo "<tr> 
                    <td>".$row['cin']."</td>
                    <td>".$row['Fname']."</td>
                    <td>".$row['Lname']."</td>
                    <td>".$row['birthDate']."</td>
                    <td><a href='engin.php?cin=".$row['cin']."' name='delete'><i class='far fa-trash-alt'></i></a>
                    <a href='update.php?cin=".$row['cin']."'><i class='far fa-edit'></i></a></td>
                    </tr>
                    ";
        }

    ?>
    </table>
    </div>

<footer>

        
        <div >
            <div class="contact">
                <h2>You<strong class="black"></strong>Book</strong></h2>
                <br>
            </div>
            <div>
                <ul>
                    <li>Home</li>
                    <li>Gallery</li>
                    <li>Books</li>
                    <li>Authors</li>
                </ul>
            </div>
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-whatsapp"></i>

            <div class="copyright">
                <div class="container">
                   <p>Copyright 2021  All Right Reserved By YouCode</p>
                </div>
             </div>
      
        </div>
    </footer>
</body>
</html>