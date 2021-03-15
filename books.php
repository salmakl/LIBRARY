<?php

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/0407d298dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title> B O O K S</title>
</head>
<body>
        <!--begin header-->
        <header>
        <a href="index.php"><img src="images/logo.png" alt="#"></a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="library.php">Gallery</a></li>
            <li class="active"><a href="books.php">Books</a></li>
            <li><a href="author.php">Authors</a></li>
        </ul>
    </header>
    <!--End header-->
    
    <div class="form">
    <form action="engin.php" method="POST">

<div class="one">
<div>
        <label for="title">Title</label>
        <input type="text" name="title">

    </div>
    <div>
        <label for="name">Price</label>
        <input type="number" name="price">

    </div>
</div>
<div  class="one">
    <div>
        <label for="name">Date</label>
        <input type="date" name="PubDate">
    </div>
    <div>
        <label for="authors">Authors</label>
        <select name="authors" id="authors">Authors
            <option value="">author 1</option>
        </select>

    </div>
</div>

    <div>
        <label for="img" id="img_label"><i class="fas fa-arrow-up"></i></label>
        <input type="file" name="img" id="img" hidden>

    </div>
 
    <div style="text-align:center;">
        <input type="submit" value="ADD" name="ADD">
    </div>    
    </form>
    </div>

<div class="table-container">
    <table>
        <tr>
            <th><h4>ID</h4></th>
            <th><h4>Title</h4></th>
            <th><h4>date</h4></th>
            <th><h4>Price</h4></th>
            <th><h4>image</h4></th>
            <th><h4>Actions</h4></th>
        </tr>

        <?php
        include "connection.php";

        $query="SELECT * FROM `books`";
        $execute= mysqli_query($connection,$query);

        while($data=$execute->fetch_assoc()){
            echo "<tr> 
                    <td>".$data['id']."</td>
                    <td>".$data['name']."</td>
                    <td>".$data['PubDate']."</td>
                    <td>".$data['price']."</td>
                    <td><img src='images/".$data['img']."' width=100px /></td>
                    
                    <td><a href='engin.php?id=".$data['id']."'><i class='far fa-trash-alt'></i></a>
                    <a href='edit.php?id=".$data['id']."'><i class='far fa-edit'></i></a></td>
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