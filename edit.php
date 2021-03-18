<html lang="en">
<?php
include "connection.php";
if(isset($_GET['id'])){
    $query="SELECT * FROM `books` WHERE id='".$_GET['id']."'";
    $test=mysqli_query($connection,$query);
    while($row=$test->fetch_assoc()){
        $id=$row['id'];
        $title=$row['name'];
        $price=$row['price'];
        $date=$row['PubDate'];
        $img=$row['img'];
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    
<div class="form">
    <form action="engin.php" method="POST">
        <div class="one">
        <div>
        <label for="name">ID</label>
        <input type="text" value="<?=$id?>" name="id">
        </div>

        <div>
        <label for="name">Title</label>
        <input type="text" value="<?=$title?>" name="title">
        </div>
        <div>


    <div class="one">
    <div>
        <label for="name">Price</label>
        <input type="number"value="<?=$price?>" name="price">

    </div>
    <div>
        <label for="name">Date</label>
        <input type="date"  value="<?=$date?>" name="PubDate">
    </div>
    </div>


    <div class="one">
    <div>
        <label for="authors">Authors</label>
        <select name="authors" id="authors">Authors
                <option></option>
                <?php
                    $requete="SELECT * FROM authors";
                    $result=mysqli_query($connection,$requete);
                    while($row =$result->fetch_assoc()){
                        echo "<option value='".$row['cin']."'>".$row['Lname']." ".$row['Fname']."</option>";
                    }
                ?>
        </select>
        </div>
        <div>
            <label for="img" id="img_label"><i class="fas fa-arrow-up"></i></label>
            <input type="file" name="img" value="<?=$img?>">

        </div>
    </div>

</div>

   
    <div>
        <input type="submit" value="Edit" name="EDIT">
    </div>    
    </form>
</div>
</body>
</html>