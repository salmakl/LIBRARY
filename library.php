<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/0407d298dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>L I B R A R Y</title>
    
</head>
<body>

       <!--begin header-->
       <header>
         <a href="index.php"><img src="images/logo.png" alt="#"></a>
         <ul>
             <li><a href="index.php">Home</a></li>
             <li class="active"><a href="library.php">Gallery</a></li>
             <li><a href="books.php">Books</a></li>
             <li><a href="author.php">Authors</a></li>
         </ul>
     </header>
     <!--End header-->
<div class="filter">
   <select name="authors" id="kuttab" onchange="trieparauthor()">
            <option></option>
            <?php
                $requete="SELECT * FROM authors";
                $result=mysqli_query($connection,$requete);
                while($row =$result->fetch_assoc()){
                    echo "<option value='".$row['cin']."'>".$row['Lname']." ".$row['Fname']."</option>";
                }
            ?>
        </select>

   <input type="number" id="min" placeholder="Min">
   <input type="number" id="max" placeholder="Max">
   <a href="#" class="btn" onclick="trieparprix()">Search</a>
</div>

        
<!-- 
        $query="SELECT * FROM books";
        $execute= mysqli_query($connection,$query);
        while($data=$execute->fetch_assoc()){} -->
   
<?php
               $query="SELECT authors.Fname,authors.Lname,books.name,books.price,books.img,authors.cin FROM authors,books,books_authors WHERE authors.cin=books_authors.idA AND books.id=books_authors.idB";
               $result=mysqli_query($connection,$query);
               while($row=$result->fetch_assoc()){
            ?>
      <div class="Main-container">
      
        <div class="container-card" name="book">
            <div class="img-text-div1">
               <div class="img-book">
                  <img src="images/<?php echo $row["img"] ?>" alt="">
               </div>
               <div class="info-book">
                  <h1><?php echo $row["name"] ?></h1>
                  <h2><?php echo $row["Fname"]." ".$row["Lname"] ?></h2>
                  <h2 name="author" hidden><?php echo $row["cin"] ?></h2>
                  <h3 name="price"><?php echo $row["price"] ?></h3>
                  
                  <div class="line-sep"></div>
                  <div class="botton-cont">
                     <div class="readers-cont">
                        
                     </div>
                     <div class="text-botton">
                        <div class="buy-now">
                              <h5 class="text-buy-now">buy now </h5>
                        </div>
                     </div>
                     </div>
                  </div> 
               </div>
            </div>
         </div>
      </div>
            <?php }   ?>
  
     
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
    <script src="trie.js"></script>
</body>
</html>