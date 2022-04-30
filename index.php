<?php
require("connection.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-e</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- light-slider-css -->
    <link rel="stylesheet" type="text/css" href="css/lightslider.css">

    <!-- jQuery ------------->
    <script src="js/Jquery.js"></script>

    <!-- light-slider-js --------------->
    <script src="js/lightslider.js"></script>



    <!-- fav-icon -->
    <link rel="shortcut icon" href="images/fav-icon.png">
    <!-- Font Awesome Link -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- navigation bar -->
    <nav>
       
 
        <!-- menue bar -->
        <div class="navigation">
           

      


            <!-- logo -->
            <a href="#" class="logo">
                <img src="images/logo6.png" alt="">
            </a>

            <!-- menue-icon---------------------------------------------- -->
            <div class="toggle"></div>




            <!-- menue -->
            <ul class="menue">
                <li><a href="#">Home</a></li>
                <li><a href="#">Men</a>
                    <span class="sale-lable">Sale</span>
                </li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Kids</a></li>
            
            </ul>

            <ul class="menu">
                <li><a href="#">your order</a></li>
                <?php
                if(!isset($_SESSION['cid'])){  
                    ?>
                <li class="user"><a href="#" >sell with shop</a>
                </li>
                   <?php
                }else{
                     
              ?>
                     <li><a href="req_shop.php" >sell with shop</a>

            <?php
                }

                ?>
                <li><a href="#">rewards</a></li>
                <li><a href="logout.php">log out</a></li>
            
            </ul>


    









            <a href="#" class="more" >
                  <p  >More <i class="fas fa-chevron-circle-down"></i></p>
                </a>
            <!-- right menue -->
            <div class="right-menue">
                <!-- Shop -->
                
                    <span class="sale-lable">Sale</span>
                </li>
                </a>
                <!-- search -->
                <a href="#" class="search">
                    <i class="fas fa-search"></i>
                </a>
                <!-- user -->
                <?php
                if(!isset($_SESSION['cid'])){   
                    ?>

             
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                </a>


                <?php
            }
            // echo $_SESSION['cid'];
            ?>
                <!-- cart-icon -->
                <a href="#">
                    <i class="fas fa-shopping-cart">
                        <!-- number of products in cart -->
                        <span class="num-cart-product">0</span>
                    </i>
                </a>
            </div>
        </div>

    </nav>

    <!-- search bar -->
    <div class="search-bar">
        <!-- search input -->
        <div class="search-input">
            <!-- input -->
            <input type="text" placeholder="Search For Product">
            <!-- cancel-btn -->
            <a href="#" class="search-cancel">
                <i class="fas fa-times"></i>
            </a>
        </div>
    </div>

    <!-- login and signup form -->
    <div class="form">
        <!-- login -->
        <div class="login-form">
            <!-- cancel-btn -->
            <a href="#" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>


            <!-- heading -->
            <strong>Log In</strong>
            <!-- inputs -->
            <form method="post" action="login.php">
               
                <input type="email" placeholder="Example@gmail.com" name="email" required>
            
              
                <input type="password" placeholder="Enter Password" name="password" required>
                <!-- submit button -->
                <input type="submit" value="Log In">
            </form>

            <!-- forget and sign up btn -->
            <div class="form-btns">
                <a href="#" class="forget">Forget Your Password?</a>
                <a href="#" class="sign-up-btn">Create Account</a>
            </div>

        </div>



        <!-- Sign-Up -->
        <div class="sign-up-form">
            <!-- cancel-btn -->
            <a href="#" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>


            <!-- heading -->
            <strong>Sign Up</strong>
            <!-- inputs -->
            <form method="post" action="res.php">
                <!-- <input type="text" placeholder="Full Name" name="fullname" required> -->
                <input type="email" placeholder="Example@gmail.com" name="email" required>
                <input type="text" placeholder="OTP " name="otp" >
                <input type="password" placeholder="Enter Password" name="password" required>
                <!-- submit button -->
                <input type="submit" value="Sign Up">
            </form>

            <!-- forget and sign up btn -->
            <div class="form-btns">
                <a href="#" class="already-account">Already Have an Account?</a>

            </div>

        </div>






    </div>


    <!-- Full slider------------------------------>

    <ul id="adaptive" class="cs-hidden">
        <!-- box-1-------------------- -->
        <li class="item-a">
            <!-- box----------------- -->
            <div class="full-slider-box f-slider-1">
                <!-- slider-text-container -->
                <div class="slider-text-container">
                    <div class="f-slider-text">
                        <span>Limited offer</span>
                        <strong>30% off <br> with <font>promo code</font></strong>
                        <a href="#" class="f-slider-btn">Shop Now</a>
                    </div>

                </div>
            </div>

        </li>



        <!-- box-2-------------------- -->
        <li class="item-a">
            <!-- box----------------- -->
            <div class="full-slider-box f-slider-2">
                <!-- slider-text-container -->
                <div class="slider-text-container">
                    <div class="f-slider-text">
                        <span>Limited offer</span>
                        <strong>30% off <br> with <font>promo code</font></strong>
                        <a href="#" class="f-slider-btn">Shop Now</a>
                    </div>

                </div>
            </div>

        </li>



        <!-- box-3-------------------- -->
        <li class="item-a">
            <!-- box----------------- -->
            <div class="full-slider-box f-slider-3">
                <!-- slider-text-container -->
                <div class="slider-text-container">
                    <div class="f-slider-text">
                        <span>Limited offer</span>
                        <strong>30% off <br> with <font>promo code</font></strong>
                        <a href="#" class="f-slider-btn">Shop Now</a>
                    </div>
                </div>
            </div>

        </li>

    </ul>


    <!-- Featured-Categories------------------------>
    <div class="feature-heading">
        <h2>Featured Categories</h2>
    </div>



    <ul id="autoWidth" class="cs-hidden">
        <!-- 1------------------------------------ -->
        <li class="item">

            <!-- feature box----------------------------- -->
            <div class="feature-box">
                <a href="#">
                    <img src="images/feature_1.jpg" alt="">
                </a>
            </div>

            <!-- text----------------------------- -->
            <span>T-Shirt</span>

        </li>


        <!-- 2------------------------------------ -->
        <li class="item">

            <!-- feature box----------------------------- -->
            <div class="feature-box">
                <a href="#">
                    <img src="images/feature_2.jpg" alt="">
                </a>
            </div>

            <!-- text----------------------------- -->
            <span>T-Shirt</span>

        </li>



        <!-- 3------------------------------------ -->
        <li class="item">

            <!-- feature box----------------------------- -->
            <div class="feature-box">
                <a href="#">
                    <img src="images/feature_3.jpg" alt="">
                </a>
            </div>

            <!-- text----------------------------- -->
            <span>T-Shirt</span>

        </li>




        <!-- 4------------------------------------ -->
        <li class="item">

            <!-- feature box----------------------------- -->
            <div class="feature-box">
                <a href="#">
                    <img src="images/feature_4.jpg" alt="">
                </a>
            </div>

            <!-- text----------------------------- -->
            <span>T-Shirt</span>

        </li>


        <!-- 5------------------------------------ -->
        <li class="item">

            <!-- feature box----------------------------- -->
            <div class="feature-box">
                <a href="#">
                    <img src="images/feature_5.jpg" alt="">
                </a>
            </div>

            <!-- text----------------------------- -->
            <span>T-Shirt</span>

        </li>




        <!-- 6------------------------------------ -->
        <li class="item">

            <!-- feature box----------------------------- -->
            <div class="feature-box">
                <a href="#">
                    <img src="images/feature_6.jpg" alt="">
                </a>
            </div>

            <!-- text----------------------------- -->
            <span>T-Shirt</span>

        </li>


    </ul>




    <!-- New arrival -----------------------------------------------   -->
    <section class="new-arrival">


        <!-- heading ------------------------->
        <div class="arrival-heading">
            <strong>New Arrival</strong>
            <p>We Provide You New Design Fashion Clothes</p>
        </div>
        <!-- product container -->




        <div class="product-container">
            <!-- product-box-1 -->
            <?php
 $sql=mysqli_query($con,"SELECT * FROM product LIMIT 10");
 while($row=mysqli_fetch_assoc($sql)){

?>

            <div class="product-box">


                <!-- immg -->
                <div class="product-img">
                    <!-- add cart ------------>
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>


                <a href="ProductView.php?pid=<?php echo $row['pid'] ?>"><img src="shopNewAdmin/productImage/<?php echo $row['pimg'] ?>" alt="img"></a> 
                </div>



                <!-- details -->
                <div class="product-details">
                    <a href="#" class="p-name"><?php echo $row['pname'] ?></a>
                    <span class="p-price"><?php echo 'RS '.$row['price'] ?></span>
                </div>
            </div>

<?php
 }
?>
          

        </div>


    </section>



    <!-- sale ------------------------------------- -->
    <section class="sale">
        <!-- sale-box-1 -------------------------->
        <div class="sale-box">
            <!-- img------------- -->
            <img src="images/sale-1.jpg" alt="">
            <!-- text--------------------- -->
            <a href="#">
                <div class="sale-text">
                    <strong>Bag With Rose Pattern</strong>
                    <span>Sale off 25%</span>
                </div>
            </a>
        </div>


        <!-- sale-box-2 -------------------------->
        <div class="sale-box">
            <!-- img------------- -->
            <img src="images/sale-2.jpg" alt="">
            <!-- text--------------------- -->
            <a href="#">
                <div class="sale-text">
                    <strong>Bag With Rose Pattern</strong>
                    <span>Sale off 25%</span>
                </div>
            </a>
        </div>



        <!-- sale-box-3 -------------------------->
        <div class="sale-box">
            <!-- img------------- -->
            <img src="images/sale-3.jpg" alt="">
            <!-- text--------------------- -->
            <a href="#">
                <div class="sale-text">
                    <strong>Bag With Rose Pattern</strong>
                    <span>Sale off 25%</span>
                </div>
            </a>
        </div>
    </section>




<!---------------->




    <!-- New arrival -----------------------------------------------   -->
    <section class="new-arrival">


        <!-- heading ------------------------->
        <div class="arrival-heading">
            <strong>Feature items</strong>
            <p>We Provide You New Design Fashion Clothes</p>
        </div>
        <!-- product container -->
        <div class="product-container">
            <!-- product-box-1 -->
            <div class="product-box">


                <!-- immg -->
                <div class="product-img">
                    <!-- add cart ------------>
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>


                    <img src="images/p-1.png" alt="">
                </div>



                <!-- details -->
                <div class="product-details">
                    <a href="#" class="p-name">Drawstring T-Shirts</a>
                    <span class="p-price">$22.00</span>
                </div>
            </div>


            <!-- product-box-2 -->
            <div class="product-box">


                <!-- immg -->
                <div class="product-img">
                    <!-- add cart ------------>
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>


                    <img src="images/p-2.png" alt="">
                </div>



                <!-- details -->
                <div class="product-details">
                    <a href="#" class="p-name">Drawstring T-Shirts</a>
                    <span class="p-price">$22.00</span>
                </div>
            </div>




            <!-- product-box-3 -->
            <div class="product-box">


                <!-- immg -->
                <div class="product-img">
                    <!-- add cart ------------>
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>


                    <img src="images/p-3.png" alt="">
                </div>



                <!-- details -->
                <div class="product-details">
                    <a href="#" class="p-name">Drawstring T-Shirts</a>
                    <span class="p-price">$22.00</span>
                </div>
            </div>




            <!-- product-box-4 -->
            <div class="product-box">


                <!-- immg -->
                <div class="product-img">
                    <!-- add cart ------------>
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>


                    <img src="images/p-4.png" alt="">
                </div>



                <!-- details -->
                <div class="product-details">
                    <a href="#" class="p-name">Drawstring T-Shirts</a>
                    <span class="p-price">$22.00</span>
                </div>
            </div>



        </div>
    </section>


    <!-- banner -------------------------------------------->

    <!-- box----------------- -->
    <div class="banner-box f-slider-3">
        <!-- slider-text-container -->
        <div class="banner-text-container">
            <div class="banner-text">
                <span>Limited offer</span>
                <strong>30% off <br> with <font>promo code</font></strong>
                <a href="#" class="banner-btn">Shop Now</a>
            </div>

        </div>
    </div>



    <!-- services------------------------------------------- -->
    <section class="services">
        <!-- services-box-1-------------- -->
        <div class="services-box">
            <i class="fas fa-shipping-fast"></i>
            <span>Free Shipping</span>
            <p>Free Shipping For all indian Orders</p>
        </div>
        <!-- services-box-2-------------- -->
        <div class="services-box">
            <i class="fas fa-headphones-alt"></i>
            <span>Support 24/7</span>
            <p>We supports 24hr a day</p>
        </div>
        <!-- services-box-3-------------- -->
        <div class="services-box">
            <i class="fas fa-sync"></i>
            <span>100% Money Back</span>
            <p>You have 30 days to Return</p>
        </div>

    </section>





<?php
include('script.php');
?>
</body>

</html>