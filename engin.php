<?php
include "connection.php";
if(isset($_POST['cin'])){
$cin=$_POST['cin'];
$fname=$_POST['Fname'];
$lname=$_POST['Lname'];
$date=$_POST['birthDate'];
}


if(isset($_POST['add'])){

    $addAuth="INSERT INTO authors (cin,Lname,Fname,birthDate) VALUES ('$cin','$lname','$fname','$date')";
    $test=mysqli_query($connection,$addAuth);
    header('location:author.php');
}
if(isset($_GET['cin'])){
    $test="DELETE FROM `authors` WHERE cin='".$_GET['cin']."'";
    $resulat=mysqli_query($connection,$test);
    header('location:author.php');

}
if(isset($_POST['edit'])){
    $cin=$_POST['cin'];
    $fname=$_POST['Fname'];
    $lname=$_POST['Lname'];
    $date=$_POST['birthDate'];
    $query="UPDATE `authors` SET `Lname`='$lname',`Fname`='$fname',`birthDate`='$date' WHERE cin='$cin'";
    $test=mysqli_query($connection,$query);
    header('location:author.php');
}

if(isset($_POST['ADD'])){
    $title=$_POST['title'];
    $price=$_POST['price'];
    $date=$_POST['PubDate'];
    $image=$_POST['img'];
    $Author=$_POST['authors'];

    $addBook="INSERT INTO books (name,price,PubDate,img) VALUES ('$title','$price','$date','$image')";
     $test=mysqli_query($connection,$addBook);
     $requete="select Max(id) As id from books";
     $result=mysqli_query($connection,$requete);
     while($row=$result->fetch_assoc()){
        $idBook=$row["id"];
    }
    $requeste="INSERT into books_authors (idB,idA) values($idBook,'$Author')";
    echo $requeste;
    $result=mysqli_query($connection,$requeste);

     header('location:books.php');
   
        
 

  
}

if(isset($_GET['id'])){
    $test="DELETE FROM `books` WHERE id='".$_GET['id']."'";
    $resulat=mysqli_query($connection,$test);
     header('location:books.php');
    // if($resulat){
    //     echo "done";
    // }else{
    //     echo "ERROR" .mysqli_error($connection);
    // }
}

if(isset($_POST['EDIT'])){
        $id=$_POST['id'];
        $title=$_POST['title'];
        $price=$_POST['price'];
        $date=$_POST['PubDate'];
        $img=$_POST['img'];
        $query="UPDATE `books` SET `name`='$title',`price`='$price',`PubDate`='$date',`img`='$img' WHERE id='$id'";
        $test=mysqli_query($connection,$query);
         header('location:books.php');

}

?>