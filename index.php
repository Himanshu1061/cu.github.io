<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head><!-- 
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css"> -->


        <meta charset="UTF-8">
        <title>cuFooDies</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon-1.PNG" type="image/x-icon">


<link rel="stylesheet" type="text/css"  href="css2/style.css">
<link rel="stylesheet" type="text/css" href="css2/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css2/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">



</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">cuFooDies</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="#top">WELCOME</a></li>
                            <li><a class="color_animation" href="#story">ABOUT</a></li>
                            <li><a class="color_animation" href='C:/Users/Himanshu/Desktop/Project/home/index.html'">MENU</a></li>
                            <li><a class="color_animation" href="#beer">DRINKS</a></li>
                            <li><a class="color_animation" href="#bread">BREAD</a></li>
                            <li><a class="color_animation" href="#featured">FEATURED</a></li>
                            <li><a class="color_animation" href="#reservation">RESERVATION</a></li>
                            <li><a class="color_animation" href="#contact">CONTACT</a></li>
							<li><a class="color_animation" href="index.php?logout='1'">LOGOUT</a></li>

                            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
         
        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title"> cuFooDies</h2>
                    <marquee scrollamount="15"><h2 class="white second-title">" Grab Your Meal, Any Time, Any Where "</h2></marquee>
                    <hr>
                </div>
            </div>
        </div>

        <!-- ============ About Us ============= -->

        <section id="story" class="description_content">
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>About us</h1>
                    <div class="fa fa-cutlery fa-2x"></div>
                    <p class="desc-text">cuFooDies is a place for simplicity. Good food, good drinks, and good service. Simple is the name of the game, and we’re good at finding it in all the right places, even in your dining experience. We’re a small group from CU, All the shops who make simple food possible. Come join us and see what simplicity tastes like.</p>
                </div>
                <div class="col-md-6">
                    <div class="img-section">
                       <img src="images/kabob.jpg" width="250" height="220">
                       <img src="images/limes.jpg" width="250" height="220">
                       <div class="img-section-space"></div>
                       <img src="images/radish.jpg"  width="250" height="220">
                       <img src="images/corn.jpg"  width="250" height="220">
                   </div>
                </div>
            </div>
        </section>


       <!-- ============ Pricing  ============= -->


        <section id ="pricing" class="description_content">
             <div class="pricing background_content">
                <h1><span>Affordable</span> pricing</h1>
             </div>
			
			<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Menu</h2>
      <hr>
      <p>Eat what you want, where you want!</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Breakfast & Starters</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> Parathe </div>
            <div class="menu-item-price"> Rs. 80 </div>
            <div class="menu-item-description">   </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Chole Bhature </div>
            <div class="menu-item-price"> Rs. 100 </div>
            <div class="menu-item-description">   </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Aalo puri </div>
            <div class="menu-item-price"> Rs. 40 </div>
            <div class="menu-item-description">   </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Dalia </div>
            <div class="menu-item-price"> Rs. 20 </div>
            <div class="menu-item-description">   </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Main Course</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> Matar Paneer </div>
            <div class="menu-item-price"> Rs. 320 </div>
            <div class="menu-item-description">   </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Chicken </div>
            <div class="menu-item-price"> Rs. 460 </div>
            <div class="menu-item-description">   </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Briyani </div>
            <div class="menu-item-price"> Rs. 100 </div>
            <div class="menu-item-description">   </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Dahi Bhalle </div>
            <div class="menu-item-price"> Rs. 80 </div>
            <div class="menu-item-description">   </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Dinner</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> Dal Makhani </div>
            <div class="menu-item-price"> Rs. 150 </div>
            <div class="menu-item-description">   </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Fried Rice </div>
            <div class="menu-item-price"> Rs. 50 </div>
            <div class="menu-item-description">   </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Mix Veg </div>
            <div class="menu-item-price"> Rs. 120 </div>
            <div class="menu-item-description">   </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Dahi </div>
            <div class="menu-item-price"> Rs. 30 </div>
            <div class="menu-item-description">   </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Coffee & Drinks</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> Coffe </div>
            <div class="menu-item-price"> Rs. 35 </div>
            <div class="menu-item-description">   </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Cappuccino </div>
            <div class="menu-item-price"> Rs. 50 </div>
            <div class="menu-item-description">   </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Beer </div>
            <div class="menu-item-price"> Rs. 180 </div>
            <div class="menu-item-description">   </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Cold Drinks </div>
            <div class="menu-item-price"> Rs. 30 </div>
            <div class="menu-item-description">   </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

      <!--       <div class="text-content container"> 
                <div class="container">
                    <div class="row">
                        <div id="w">
       -->                      <!-- @end #filter-list    
<!--                             <ul id="portfolio">
                                <li class="item breakfast"><img src="images/food_icon01.jpg" alt="Food" >
                                    <input class="buy" type="button" value="Rs. 200"  onclick="window.location.href='C:/Users/Himanshu/Desktop/Project/payment/index.html'">
                                </li>

                                <li class="item dinner special"><img src="images/food_icon02.jpg" alt="Food" >
                                    <input class="buy" type="button" value="Rs. 100"  onclick="window.location.href='C:/Users/Himanshu/Desktop/Project/payment/index.html'">
                                </li>
                                <li class="item dinner breakfast"><img src="images/food_icon03.jpg" alt="Food" >
                                   <input class="buy" type="button" value="Rs. 120"  onclick="window.location.href='C:/Users/Himanshu/Desktop/Project/payment/index.html'">
                                </li>
                                <li class="item special"><img src="images/food_icon04.jpg" alt="Food" >
                                    <input class="buy" type="button" value="Rs. 140"  onclick="window.location.href='C:/Users/Himanshu/Desktop/Project/payment/index.html'">
  
                            </ul><!-- @end #portfolio -->
                        <!-- </div>@end #w -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div>   -->
        <!-- </section> --> -->

 -->

        <!-- ============ Our Beer  ============= -->


        <section id ="beer" class="description_content">
            <div  class="beer background_content">
                <h1>Great <span>Place</span> to enjoy</h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-5">
                   <div class="img-section">
                       <img src="images/beer_spec.jpg" width="100%">
                   </div>
                </div>
                <br>
                <div class="col-md-6 col-md-offset-1">
                    <h1>OUR Drinks</h1>
                    <div class="icon-beer fa-2x"></div>
                    <p class="desc-text">Here at cuFooDies we’re all about the love of Drinks. New and bold flavors enter our doors every week, and we can’t help but show them off. While we enjoy the classics, we’re always passionate about discovering something new, so stop by and experience our craft at its best.</p>
                </div>
            </div>
        </section>


       <!-- ============ Our Bread  ============= -->


        <section id="bread" class=" description_content">
            <div  class="bread background_content">
                <h1>Our Breakfast <span>Menu</span></h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>OUR BREAD</h1>
                    <div class="icon-bread fa-2x"></div>
                    <p class="desc-text">We love the smell of fresh baked bread. Each loaf is handmade at the crack of dawn, using only the simplest of ingredients to bring out smells and flavors that beckon the whole block. Stop by anytime and experience simplicity at its finest.</p>
                </div>
                <div class="col-md-6">
                    <img src="images/bread1.jpg" width="260" alt="Bread">
                    <img src="images/bread1.jpg" width="260" alt="Bread">
                </div>
            </div>
        </section>


        
        <!-- ============ Featured Dish  ============= -->

        <section id="featured" class="description_content">
            <div  class="featured background_content">
                <h1>Our Featured Dishes <span>Menu</span></h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>Have a look to our dishes!</h1>
                    <div class="icon-hotdog fa-2x"></div>
                    <p class="desc-text">Each food is handmade at the crack of dawn, using only the simplest of ingredients to bring out smells and flavors that beckon the whole block. Stop by anytime and experience simplicity at its finest.</p>
                </div>
                <div class="col-md-6">
                    <ul class="image_box_story2">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="images/slider1.jpg"  alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/slider2.jpg" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/slider3.JPG" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ============ Reservation  ============= -->

        <section  id="reservation"  class="description_content">
            <div class="featured background_content">
                <h1>Reserve a Table!</h1>
            </div>
            <div class="text-content container"> 
                <div class="inner contact">
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Form -->
                        <form id="contact-us" method="post" action="reserve.php">
                            <!-- Left Inputs -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <!-- Name -->
                                                <input type="text" name="first_name" id="first_name" required="required" class="form" placeholder="First Name" />
                                                <input type="text" name="last_name" id="last_name" required="required" class="form" placeholder="Last Name" />
                                                <input type="text" name="state" id="state" required="required" class="form" placeholder="State" />
                                                <input type="text" name="datepicker" id="datepicker" required="required" class="form" placeholder="Reservation Date" />
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <!-- Name -->
                                                <input type="text" name="phone" id="phone" required="required" class="form" placeholder="Phone" />
                                                <input type="text" name="guest" id="guest" required="required" class="form" placeholder="Guest Number" />
                                                <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                                            </div>

                                            <div class="col-xs-6 ">
                                                <!-- Send Button -->
                                                <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Reserve</button> 
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-6 col-xs-12">
                                        <!-- Message -->
                                        <div class="right-text">
                                            <h2>Hours</h2><hr>
                                            <p>Monday to Friday: 7:30 AM - 11:30 AM</p>
                                            <p>Saturday & Sunday: 8:00 AM - 9:00 AM</p>
                                            <p>Monday to Friday: 12:00 PM - 5:00 PM</p>
                                            <p>Monday to Saturday: 6:00 PM - 1:00 AM</p>
                                            <p>Sunday to Monday: 5:30 PM - 12:00 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Clear -->
                            <div class="clear"></div>
                        </form>
                    </div><!-- End Contact Form Area -->
                </div><!-- End Inner -->
            </div>
        </section>

        <!-- ============== Team Section ============== -->
              
        
        <!-- ============ Social Section  ============= -->
      
        <section class="social_connect">
            <div class="text-content container"> 
                <div class="col-md-6">
                    <span class="social_heading">FOLLOW</span>
                    <ul class="social_icons">
                        <li><a class="icon-twitter color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-github color_animation" href="https://github.com/Himanshu1061" target="_blank"></a></li>
                        <li><a class="icon-linkedin color_animation" href="http://www.linkedin.com/in/himanshu-pokhriyal-360b04130/" target="_blank"></a></li>
                        <li><a class="icon-mail color_animation" href="mailto:himanshu.pokhriyal1@gmail.com"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="social_heading">OR DIAL</span>
                    <span class="social_info"><a class="color_animation" href="tel:883-335-6524">+91 987-(287)-2440</a></span>
                </div>
            </div>
        </section>

        <!-- ============ Contact Section  ============= -->

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner contact">
                            <!-- Form Area -->
                            <div class="contact-form">
                                <!-- Form -->
                                <form id="contact-us" method="post" action="contact.php">
                                    <!-- Left Inputs -->
                                    <div class="col-md-6 ">
                                        <!-- Name -->
                                        <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                                        <!-- Email -->
                                        <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                        <!-- Subject -->
                                        <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                                    </div>
                                    <!-- Right Inputs -->
                                    <div class="col-md-6">
                                        <!-- Message -->
                                        <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                                    </div>
                                    <!-- Bottom Submit -->
                                    <div class="relative fullwidth col-xs-12">
                                        <!-- Send Button -->
                                        <button type="submit" id="submit" name="submit" class="form-btn">Send Message</button> 
                                    </div>
                                    <!-- Clear -->
                                    <div class="clear"></div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   

        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">&copy; cuFooDies 2018 </p></div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Made In Love With <a href="http://www.cuchd.in" target="_blank">CU</a></p></div>
            </div>
        </footer>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>





<!-- 	<div class="header">
		<h2>Home Page</h2>
	</div>
 -->	
		
</body>
</html>