<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/0407d298dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>H O M E</title>
</head>

<body>

<!-- <script>
        function nav(){
            var nav = document.getElementById("navcontenu");
            if(nav.getAttribute("vue")=="active")
            {
                document.getElementById("navcontenu").classList.remove("menu");
                nav.setAttribute("vue","");
            }else
            {
                nav.setAttribute("vue","active");
                document.getElementById("navcontenu").classList.add("menu");

            }
        }
    </script>

<svg class="menu" viewBox="0 0 100 80" width="40" height="40" fill="#8C4055" onclick="nav()">
        <rect width="100" height="20"></rect>
        <rect y="30" width="100" height="20"></rect>
        <rect y="60" width="100" height="20"></rect>
    </svg> -->

    <!--begin header-->
    <header>
        <a href="index.php"><img src="images/logo.png" alt="#"></a>
        <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="library.php">Gallery</a></li>
            <li><a href="books.php">Books</a></li>
            <li><a href="author.php">Authors</a></li>
            <li class="log"><a href="login.php" >Login</a></li>
            
        </ul>
    </header>
    
    <!--End header-->
    <!--begin main-->
    <main>
        <div class="quotes">
            <p class="p1">Let's make the best invetement</p>
            <p class="p2">A BOOK CAN CHANGE YOUR LIFE</p>
            <p class="p3">Read-Lesten-Learn-Repeat</p>

            <a href="#" class="btn">Read More</a>
        </div>
        <div class="BGhome">
            <img src="images/hero.svg" alt="">
        </div>
    </main>
    <section class="adv">
        <div>
            <h2 class="title">Why Choose Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit perspiciatis totam iure sapiente animi vel
                corrupti blanditiis nulla repellat quam!</p>

        </div>
        <div class="adv-cont">
            <div>
                <img src="images/icons/art.svg" alt="">
                <h3>Lorem, ipsum.</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate?</p>
            </div>
            <div>
                <img src="images/icons/business.svg" alt="Icon">
                <h3>Lorem, ipsum.</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate?</p>
            </div>
            <div>
                <img src="images/icons/event.svg" alt="Icon">
                <h3>Lorem, ipsum.</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate?</p>
            </div>
            <div>
                <img src="images/icons/graduate.svg" alt="Icon">
                <h3>Lorem, ipsum.</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate?</p>
            </div>
        </div>

    </section>
    <footer>


        <div>
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
                    <p>Copyright 2021 All Right Reserved By YouCode</p>
                </div>
            </div>

        </div>
    </footer>
</body>

</html>