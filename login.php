<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>L O G I N </title>
</head>

<body>
<header>
        <a href="index.php"><img src="images/logo.png" alt="#"></a>
        <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="library.php">Gallery</a></li>
            <li><a href="books.php">Books</a></li>
            <li><a href="author.php">Authors</a></li>
            
            
        </ul>
        <svg class="menu" viewBox="0 0 100 80" width="40" height="40" fill="#000" onclick="nav()">
        <rect width="100" height="20"></rect>
        <rect y="30" width="100" height="20"></rect>
        <rect y="60" width="100" height="20"></rect>
    </svg>
    </header>
<form action="log.php" method="POST">
    <div class="container">
        <img src="images/login.png" class="grande-image">
        <div class="content">
            <h1 class="title"> Member Login </h1>
            <div class="input">
                <img src="images/email.png" class="img1">
                <input type="text" placeholder="Pseudo" name="pseudo" class="mainInput">
            </div>

            <div class="input">
                <img src="images/padlock.png" class="img1">
                <input type="password" placeholder="Password" name="pwd" class="mainInput">
            </div>

            <input  type="submit" name="login" value="Login" class="Btn">
            <h5> Forget Password? </h5>

        </div>
    </div>
</body>
</form>
</html>