<?php
session_start();

// Check if the username is set in the session
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if the username is not set
    header("Location: login.php");
    exit();
}

// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurant_website";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the form submission for order
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_to_cart"])) {
    // Get the form data
    $item_id = $_POST['item_id'];
    $item_name = $_POST['item_name'];
    $unit_price = $_POST['unit_price'];
    $quantity = $_POST['quantity'];
    $total_price = $unit_price * $quantity;

    // Fetch user_id based on the username from the user table
    $username = $_SESSION['username'];
    $userQuery = "SELECT user_id FROM user WHERE first_name = '{$_SESSION['username']}'";
    $userResult = $conn->query($userQuery);

    if ($userResult->num_rows > 0) {
        $userData = $userResult->fetch_assoc();
        $user_id = $userData['user_id'];

        // Insert data into the cart table
        $insertQuery = "INSERT INTO cart (user_id, item_id, item_name, quantity, price) VALUES ('$user_id', '$item_id', '$item_name', '$quantity', '$unit_price')";

        if ($conn->query($insertQuery) === TRUE) {
            echo '<p>Item added to the cart successfully.</p>';
        } else {
            echo '<p>Error adding item to the cart: ' . $conn->error . '</p>';
        }
    } else {
        echo '<p>Error fetching user data.</p>';
    }
}
?>



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
        <a href="index.php" class="fas fa-sign-out-alt" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="cart.php" class="fas fa-shopping-cart"></a>
    </div>
    



</header>

<!-- header section end-->

<!-- search from-->

<from acton="" id="search-form">
    <input type="search" placeholder="search here... " name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fa fa-times" id="close"></i>

</from>


<!-- home section strats -->

<section class="home" id="home" >

    <div class="swiper home-slider">

        <div class=" swiper-wrapper wrapper">

             <div class="swiper-slide slide">
                 <div class="content">
                    <span>our special dish</span>
                    <h3> spicy pasta</h3>
                    <p> Free Delivery </p>
                    <a href="#" class="btn">order now</a>

                 </div>
                 <div class="image">
                    <img src="images\pasta.jpg" alt="">
                 </div>


             </div>
             <div class="swiper-slide slide">
                <div class="content">
                   <span>our special dish</span>
                   <h3> Quinoa</h3>
                   <p>15% offers  </p>
                   <a href="#" class="btn">order now</a>

                </div>
                <div class="image">
                   <img src="images\Quinoa.jpg" alt="">
                </div>


            </div>

            <div class="swiper-slide slide">
                <div class="content">
                   <span>our special dish</span>
                   <h3> Buns</h3>
                   <p> 10% offers </p>
                   <a href="#" class="btn">order now</a>

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
                   <a href="#" class="btn">order now</a>

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
    <h3 class="sub-heading">Special</h3>
    <h1 class="heading">Offers</h1>

 <div  class="box-container">

    <div class="box">
       
        <img src="images\gallery4.png" style="width: 250px; height:250px;"  alt="">
        <h3>30% Discount</h3>
        <!--<div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>-->
        <span> Rs.800.00</span>
        <a href="#" class="btn">Add to cart</a>
    </div>

    <div class="box">
        
        <img src="images\abc.png" style="width: 250px; height:250px;" alt="">
        <h3>20% Discount</h3>

        <span> Rs.600.00</span>
        <a href="#" class="btn">Add to cart</a>
    </div>

    <div class="box">
        
        <img src="images\ava.jpg" style="width: 250px; height:250px;" alt="">
        <h3>25% Discount</h3>
       
        <span> Rs.950.00</span>
        <a href="#" class="btn">Add to cart</a>
    </div>

    <div class="box">
        
        <img src="images\Laksa.jpg"  style="width: 250px; height:250px;"alt="">
        <h3>10% Discount</h3>
       
        <span> Rs.500.00</span>
        <a href="#" class="btn">Add to cart</a>
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
        <?php
// Assuming $conn is your database connection
$sql = "SELECT * FROM menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $imagePath = strtolower(str_replace(' ', '_', $row['item_name'])) . '.jpg';
?>
        <div class="box">
            <div class="image">
                <img src="images/<?php echo $imagePath; ?>" style="height: 250px;" alt="<?php echo $row['item_name']; ?>">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <!-- Add your star rating logic here -->
                </div>
                <h3><?php echo $row['item_name']; ?></h3>  <!-- change me if you need -->
                <div class="price" style = "font-size:20px">Rs.<?php echo $row['price']; ?></div>
                <form method="post" action="">
                    <input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>">
                    <input type="hidden" name="item_name" value="<?php echo $row['item_name']; ?>">
                    <input type="hidden" name="unit_price" value="<?php echo $row['price']; ?>">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                </form>
               
            </div>
        </div>
<?php
    }
} else {
    echo '<p>No food items available.</p>';
}

$conn->close();
?>


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
                <p>Best food order web site. 
                    food received on time and fresh dishes as well.
                </p>
            </div>
            
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images\per2.jpg" alt="">
                    <div class="user-info">
                         <h3>Shehan Silva</h3>
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
                         <h3>Kavindu </h3>
                         <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                
                        </div>
                    </div>
                </div>
                <p>I ordered Burger and an Pizza both are very satisfying compared to the price❤
Nice to eat,good service.food is fresh.when reach still hot.
Food taste good and acceptable.
                </p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images\per4.png" alt="">
                    <div class="user-info">
                         <h3>Lakshan Wijethunga</h3>
                         <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                
                        </div>
                    </div>
                </div>
                <p>Fast delivery. Delighted with purchase.Fantastic options to buy.
Brilliant variety of products and first class excellent quality and flavour.
                </p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images\per5.png" alt="">
                    <div class="user-info">
                         <h3>Shehani silva</h3>
                         <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                
                        </div>
                    </div>
                </div>
                <p>Fantastic options to buy.
Brilliant variety of products and first class excellent quality and flavour.
The lava cheese tart a MUST try!!!!
                </p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images\per6.jpg" alt="">
                    <div class="user-info">
                         <h3>Kasun Nimantha</h3>
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
     
    <form action="delivery.php" method = "post">
         
        <div class="inputBox">
            <div class="input">
                <span>Your name</span>
                <input type="text" placeholder="Enter your name" name="name">

            </div>
            <div class="input">
                <span>Your number</span>
                <input type="number" placeholder="Enter your number" >
                
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