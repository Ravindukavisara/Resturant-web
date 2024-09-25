<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
</head>
<body>
<!-- header section starts  -->

<header>
    <a href="#" class="logo"><i class="fas-fa-untensils"></i>RK FOODS</a>

    <nav class ="navbar">
        <a class="active" href="#home">home</a>
        
        <a href="#dishes">Offers</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#review">review</a>
        <a href="#order">order</a>
    </nav>
    
    <div class="icons">
        <i class="fas fa-bars" id="bars"></i>
        <a href="login.php" class="fa fa-user" id="search-icon"></a>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>
    



</header>

<!-- header section end-->

<!-- search from-->
<!-- 
<from acton="" id="search-form">
    <input type="search" placeholder="search here... " name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fa fa-times" id="close"></i>

</from> -->


<!-- home section strats -->

<section class="home" id="home" >

    <div class="swiper home-slider">

        <div class=" swiper-wrapper wrapper">

             <div class="swiper-slide slide">
                 <div class="content">
                    <!--<span>WELCOME TO RK FOODS</span>-->
                    <h3>WELCOME TO RK FOODS</h3>
                    <p> For order foods Login our system </p>
                    <a href="login.php" class="btn">Login</a>

                 </div>
                 <div class="image">
                    <img src="images\cover.png" alt="">
                 </div>


             </div>
             <div class="swiper-slide slide">
                <div class="content">
                   <span>our spcial dish</span>
                   <h3> spicy pasta</h3>
                   <p> wdefwe efererg wdwgrer sfthey adsver </p>
                   <a href="login.php" class="btn">order now</a>

                </div>
                <div class="image">
                   <img src="images\pitza.jpg" alt="">
                </div>


            </div>

            <div class="swiper-slide slide">
                <div class="content">
                   <span>our spcial dish</span>
                   <h3> spicy pasta</h3>
                   <p> wdefwe efererg wdwgrer sfthey adsver </p>
                   <a href="login.php" class="btn">order now</a>

                </div>
                <div class="image">
                   <img src="images\buns.jpg" alt="">
                </div>


            </div>
            <div class="swiper-slide slide">
                <div class="content">
                   <span>our spcial dish</span>
                   <h3> spicy pasta</h3>
                   <p> wdefwe efererg wdwgrer sfthey adsver </p>
                   <a href="login.php" class="btn">order now</a>

                </div>
                <div class="image">
                   <img src="images\burger.jpg" alt="">
                </div>


            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>







<!-- home section end -->

<!--dishes section strats-->
<section class="dishes" id="dishes">
    <h3 class="sub-heading"></h3>
    <h1 class="heading">OFFERS</h1>

 <div  class="box-container">

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        
        <img src="images\gallery4.png" style="width: 250px; height:250px;"  alt="">
        <h3>25% Discount</h3>
        
        <span> Rs.800.00</span>
        <a href="login.php" class="btn">Add to cart</a>
    </div>

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        
        <img src="images\abc.png" style="width: 250px; height:250px;" alt="">
        <h3>30% Discount</h3>
        
        <span> Rs.600.00</span>
        <a href="login.php" class="btn">Add to cart</a>
    </div>

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        
        <img src="images\ava.jpg" style="width: 250px; height:250px;" alt="">
        <h3>10% Discount</h3>
        
        <span> Rs.950.00</span>
        <a href="login.php" class="btn">Add to cart</a>
    </div>

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
       
        <img src="images\Laksa.jpg"  style="width: 250px; height:250px;"alt="">
        <h3>15% Discount</h3>
       
        <span> Rs.500.00</span>
        <a href="login.php" class="btn">Add to cart</a>
    </div>
 </div>

    
        
    
  
    
</section>





<!--dishes section ends-->


<!-- about section strats-->

<section class="about" id="about">
     
    <h3 class="sub-heading">About us</h3>
    <h1 class="heading">Why choose Us</h1>

    <div class="row">
        <div class="image">
            <img src="images\sandwich.jpg" alt="">

        </div>

        <div class="content">
            <h3>Best food in the country</h3>
            <p> As a premier food delivery company, we are committed to bringing you a seamless and savory
                 dining experience from 
                the finest restaurants to the comfort of your home.</p>
            <p>Our mission is to redefine the way you enjoy meals by providing a
             hassle-free, efficient, and delightful food delivery service.</p>
             <div class="icon-container">
                <div class="icon">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Free delivery</span>
                </div>
                <div class="icon">
                    <i class="fas fa-rupees-sign"></i>
                    <span>Easy payment</span>
                </div>
                <div class="icon">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Service</span>
                </div>

             </div>
             <a href="#" class="btn">learn more</a>
        </div>
    </div>
</section>



<!-- about section ends-->

<!--menu section starts-->

<section class="menu" id="menu">
     
        <h3 class="sub-heading">Our menu</h3>
        
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images\Fries.jpg"  style= "height:250px;" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
            
                    </div>
                    <h3>Fries</h3>
                    
                    <a href="login.php" class="btn">add to cart</a>
                    <span class="price">Rs.600.00</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images\Laksa.jpg"  style="height:250px;" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
            
                    </div>
                    <h3>Laksa</h3>
                    
                    <a href="login.php" class="btn">add to cart</a>
                    <span class="price">Rs.600.00</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images\Tacos.jpg"  style=" height:250px;" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
            
                    </div>
                    <h3>Tacos</h3>
                    
                    <a href="login.php" class="btn">add to cart</a>
                    <span class="price">Rs.600.00</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images\burger.jpg"  style="height:250px;" alt="">
                    <a href="login.php" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
            
                    </div>
                    <h3>Burger</h3>
                    
                    <a href="login.php" class="btn">add to cart</a>
                    <span class="price">Rs.600.00</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images\Quinoa.jpg"  style="height:250px;" alt="">
                    <a href="login.php" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
            
                    </div>
                    <h3>Quinoa</h3>
                    
                    <a href="login.php" class="btn">add to cart</a>
                    <span class="price">Rs.600.00</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images\pasta.jpg"  style="height:250px;" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
            
                    </div>
                    <h3>Pasta</h3>
                   
                    <a href="login.php" class="btn">add to cart</a>
                    <span class="price">Rs.600.00</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images\CoconutWater.jpg"  style= "height:250px;" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
            
                    </div>
                    <h3>Coconut Water</h3>
                    
                    <a href="login.php" class="btn">add to cart</a>
                    <span class="price">Rs.600.00</span>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images\Smoothies.jpg"  style= "height:250px;" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
            
                    </div>
                    <h3>Smoothies</h3>
                   
                    <a href="login.php" class="btn">add to cart</a>
                    <span class="price">Rs.180.00</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images\MatchaLattes.jpg"  style="height:250px;" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
            
                    </div>
                    <h3>Matcha Lattes</h3>
                   
                    <a href="login.php" class="btn">add to cart</a>
                    <span class="price">Rs.200.00</span>
                </div>
            </div>


        </div>
        
</section>



<!--menu section ends-->

<!--review section starts-->

<section class="review" id="review">
    <h3 class="sub-heading">Customer's review</h3>
    <h3 class="heading">What they say</h3>

    <div class="swiper-container review-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images\per1.jpg" alt="">
                    <div class="user-info">
                         <h3>Gihan Botheju</h3>
                         <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                
                        </div>
                    </div>
                </div>
                <p> Best food order web site. 
                    food received on time and fresh dishes as well.
                </p>
            </div>
            
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images\per2.jpg" alt="">
                    <div class="user-info">
                         <h3>Jhone deo</h3>
                         <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                
                        </div>
                    </div>
                </div>
                <p>RK Foods 
                    is giving the best service.They are doing very well.
                </p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images\per3.png" alt="">
                    <div class="user-info">
                         <h3>Jhone deo</h3>
                         <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                
                        </div>
                    </div>
                </div>
                <p>vvxhhasxbkq wjdhcbsdhe dfjkjhdiufv djcjh bisdc sjdhbc
                    
                </p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images\per4.png" alt="">
                    <div class="user-info">
                         <h3>Jhone deo</h3>
                         <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                
                        </div>
                    </div>
                </div>
                <p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images\per5.jpg" alt="">
                    <div class="user-info">
                         <h3>Jhone deo</h3>
                         <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                
                        </div>
                    </div>
                </div>
                <p>
                </p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images\per6.jpg" alt="">
                    <div class="user-info">
                         <h3>Jhone deo</h3>
                         <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                
                        </div>
                    </div>
                </div>
                <p>Delivered on time, Avacado Toast and all food ordered were so tasty!
The Food on call service is good, innovative and fast.
                </p>
            </div>

        </div>
    </div>

</section>


<!--review section ends-->

<!--order section start-->

<section class="order" id="order">

    <h3 class="sub-heading">Order Now</h3>
    <h1 class="heading">Free and Fast delivery</h1>
     
    <form action="">
         
        <div class="inputBox">
            <div class="input">
                <span>Your name</span>
                <input type="text" placeholder="Enter your name">

            </div>
            <div class="input">
                <span>Your number</span>
                <input type="number" placeholder="Enter your number">
                
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Your order</span>
                <input type="text" placeholder="Enter food name">

            </div>
            <div class="input">
                <span>Yadditional food</span>
                <input type="text" placeholder="extra with food">
                
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>how much</span>
                <input type="number" placeholder="how many orders">

            </div>
            <div class="input">
                <span>date and time</span>
                <input type="datetime-local" >
                
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Your address</span>
                <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>

            </div>
            <div class="input">
                <span>Your message</span>
                <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>

            </div>
        </div>
        <input type="submit" value="order now" class="btn">
    </form>

</section>










<!--order section end-->





<!--Team-->

<div class="team">
    <h1>Our<span>Team</span></h1>

    <div class="team_box">
        <div class="profile">
            <img src="images\chef1.png">

            <div class="info">
                <h2 class="name">Chef</h2>
                <p class="bio">10 year experience in field</p>

                <div class="team_icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>

        </div>

        <div class="profile">
            <img src="images\chef2.png">

            <div class="info">
                <h2 class="name">Chef</h2>
                <p class="bio">Junior Chhef</p>

                <div class="team_icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>

        </div>

        <div class="profile">
            <img src="images\chef3.jpg">

            <div class="info">
                <h2 class="name">Chef</h2>
                <p class="bio"></p>

                <div class="team_icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>

        </div>

        <div class="profile">
            <img src="images\chef4.jpg">

            <div class="info">
                <h2 class="name">Chef</h2>
                <p class="bio"></p>

                <div class="team_icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>

            </div>

        </div>

    </div>

</div>


<!--Footer-->

<footer>
    <div class="footer_main">

        <div class="footer_tag">
            <h2>Location</h2>
            <p>Matara</p>
            <p>Galle</p>
            <p>Kandy</p>
            <p>Nugegoda</p>
            <p>Kiribathgoda</p>
        </div>

        <div class="footer_tag">
            <h2>Quick Link</h2>
            <p>Home</p>
            <p>About</p>
            <p>Menu</p>
            <p>Gallary</p>
            <p>Order</p>
        </div>

        <div class="footer_tag">
            <h2>Contact</h2>
            <p>+94 42 258 3656</p>
            <p>+94 85 025 369</p>
            <p>RK123@gmail.com</p>
            <p>foodshop23@gmail.com</p>
        </div>

        <div class="footer_tag">
            <h2>Our Service</h2>
            <p>Fast Delivery</p>
            <p>Easy Payments</p>
            <p>24 x 7 Service</p>
        </div>

        <div class="footer_tag">
            <h2>Follows</h2>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-linkedin-in"></i>
        </div>

    </div>

    <p class="end">Design by<span><i class="fa-solid fa-face-grin"></i> Kavisara LR</span></p>

</footer>


<!--new add from template-->











































<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="script.js"></script>

</body>
</html>