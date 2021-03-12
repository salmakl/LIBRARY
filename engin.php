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
    $image=$_POST['image'];
    print_r($_POST)

    $addBook="INSERT INTO books (title,price,PubDate,img) VALUES ('$title','$price','$date','$image')";
     $test=mysqli_query($connection,$addBook);
    // header('location:book.php');
    if($test){
    echo "okay";}
    else{
        echo "no";
    }
}
?>