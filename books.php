<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/0407d298dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title> A T H O U R S</title>
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
        <label for="name">Title</label><br>
        <input type="text" name="title">

    </div>
    <div>
        <label for="name">Price</label><br>
        <input type="number" name="price">

    </div>
    <div>
        <label for="name">Date</label><br>
        <input type="date" name="PubDate">
    </div>
    <div>
        <select name="" id="authors">Authors
            <option value="">author 1</option>
        </select>

    </div>
    <div>
    <input type="file" name="img">

    </div>
</div>

    <br>
    <div>
        <input type="submit" value="ADD" name="ADD">
    </div>    
    </form>
    </div>

    <table>
        <tr>
            <th>Title</th>
            <th>date</th>
            <th>image</th>
            <th>Actions</th>
        </tr>

        <tr>
            <td>Salma</td>
            <td>14-11-98</td>
            <td><img src="" alt=""></td>
            <td></td>
        </tr>
    </table>


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