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
        <label for="name">ID</label><br>
        <input type="text" value="<?=$id?>" name="id">
        <label for="name">Title</label><br>
        <input type="text" value="<?=$title?>" name="title">

    </div>
    <div>
        <label for="name">Price</label><br>
        <input type="number"value="<?=$price?>" name="price">

    </div>
    <div>
        <label for="name">Date</label><br>
        <input type="date"  value="<?=$date?>" name="PubDate">
    </div>
    <div>
        <select name="" id="authors">Authors
            <option value="">author 1</option>
        </select>

    </div>
    <div>
    <input type="file" name="img" value="<?=$img?>">

    </div>
</div>

    <br>
    <div>
        <input type="submit" value="Edit" name="EDIT">
    </div>    
    </form>
    </div>
</body>
</html>