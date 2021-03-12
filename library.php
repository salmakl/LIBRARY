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
    <title>gallery</title>
    
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
   <select name="" id="kuttab" onchange="trieparauthor()">
      <option >Jhon Doe</option>
      <option >Achraf</option>
      <option >Mohamed BOUMLIK</option>
   </select>

   <input type="number" id="min" placeholder="Min">
   <input type="number" id="max" placeholder="Max">
   <a href="#" class="btn" onclick="trieparprix()">submit</a>
</div>


    <div class="Main-container">
        <div class="container-card" name="book">
           <div class="img-text-div1">
              <div class="img-book">
                 <img src="images/71QKQ9mwV7L.jpg" alt="">
              </div>
              <div class="info-book">
                 <h1>The subtle art of no...</h1>
                 <h2 name="author">Jhon Doe</h2>
                 <h3 name="price">200</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus, esse aliquid autem atque accusamus,</p>
                 
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
        <div class="container-card" name="book">
           <div class="img-text-div1">
              <div class="img-book">
               <img src="images/Book2.jpg" alt="">
              </div>
              <div class="info-book">
                 <h1>Eat That Frog!</h1>
                 <h2 name="author">Jhon Doe</h2>
                 <h3 name="price">100</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus, esse aliquid autem atque accusamus,</p>
                 <div class="line-sep"></div>
                 <div class="botton-cont">
                    <div class="readers-cont">
                      
                    </div>
                    <div class="text-botton">
                       <div class="buy-now">
                       <h5 class="text-buy-now">buy now</h5>
                       </div>
                    </div>
                    </div>
                 </div>
              </div>
        </div>
        <div class="container-card" name="book">
           <div class="img-text-div1">
              <div class="img-book">
               <img src="images/Book3.jpg" alt="">
              </div>
              <div class="info-book">
                 <h1>Think and Grow Rich</h1>
                 <h2 name="author">Jhon Doe</h2>
                 <h3 name="price">320</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus, esse aliquid autem atque accusamus,</p>
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
        <div class="container-card" name="book">
           <div class="img-text-div1">
              <div class="img-book">
               <img src="images/Book4.jpg" alt="">

              </div>
              <div class="info-book">
                 <h1>Thinking fast and...</h1>
                 <h2 name="author">Mohamed BOUMLIK</h2>
                 <h3 name="price">320</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus, esse aliquid autem atque accusamus,</p>
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
        <div class="container-card" name="book">
           <div class="img-text-div1">
              <div class="img-book">
               <img src="images/Book5.jpg" alt="">

              </div>
              <div class="info-book">
                 <h1>The power of now</h1>
                 <h2 name="author">Achraf</h2>
                 <h3 name="price">220</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus, esse aliquid autem atque accusamus,</p>
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
        <div class="container-card" name="book">
           <div class="img-text-div1">
              <div class="img-book">
               <img src="images/Book6.jpg" alt="">

              </div>
              <div class="info-book">
                 <h1>Switch</h1>
                 <h2 name="author">Jhon Doe</h2>
                 <h3 name="price">200</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus, esse aliquid autem atque accusamus,</p>
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
        <div class="container-card" name="book">
           <div class="img-text-div1">
              <div class="img-book">
               <img src="images/Book7.jpg" alt="">

              </div>
              <div class="info-book">
                 <h1>The simple path to...</h1>
                 <h2 name="author">Mohamed BOUMLIK</h2>
                 <h3 name="price">300</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus, esse aliquid autem atque accusamus,</p>
                 <div class="line-sep"></div>
                 <div class="botton-cont">
                
                    <div class="text-botton">
                       <div class="buy-now">
                       <h5 class="text-buy-now">buy now </h5>
                       </div>
                    </div>
                    </div>
                 </div>
              </div>
        </div>
        <div class="container-card" name="book">
           <div class="img-text-div1">
              <div class="img-book">
               <img src="images/Book8.jpg" alt="">

              </div>
              <div class="info-book">
                 <h1>Your money or your...</h1>
                 <h2  name="author">Mohamed BOUMLIK</h2>
                 <h3 name="price">210</h3>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus, esse aliquid autem atque accusamus,</p>
                 <div class="line-sep"></div>
                 <div class="botton-cont">
                    <div class="readers-cont">
                      
                    </div>
                    <div class="text-botton">
                       <div class="buy-now">
                       <h5 class="text-buy-now">buy now</h5>
                       </div>
                    </div>
                    </div>
                 </div>
              </div>
        </div>
        <div class="container-card" name="book">
            <div class="img-text-div1">
               <div class="img-book">
               <img src="images/Book9.jpg" alt="">

               </div>
               <div class="info-book">
                  <h1 >Mark Bettman</h1>
                  <h2 name="author">Achraf</h2>
                  <h3 name="price">110</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus, esse aliquid autem atque accusamus,</p>
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