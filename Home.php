<?php

include './Components/connect.php'; 

// Start the session
session_start();

// Check if the form has been submitted
if (isset($_POST['search'])) {
    // Prepare the search query
    $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE :name");

    // Bind the parameters
    $stmt->bindValue(':name', '%' . $_POST['search'] . '%', PDO::PARAM_STR);

    // Execute the query
    $stmt->execute();

    // Fetch the results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Redirect to 404 page if no results found
    if (count($results) === 0) {
        header("Location: 404Page.php");
        exit();
    }

    // Store the results in the session
    $_SESSION['results'] = $results;

    // Redirect to the search results page
    header("Location: Search_result.php");
    exit();
}

// Check if the user is logged in
$user = null;
if (isset($_SESSION['user_id'])) {
    // Fetch the user's information from the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Set the user_id value
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

// Initialize the cart session if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle adding products to the cart
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['addTOcart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['name'];
    $product_price = $_POST['price'];
    $product_image = $_POST['image'];
    $product_quantity = $_POST['quantity'];

    $check_product_id = $conn->prepare("SELECT product_id FROM `cart` WHERE user_id = ?");
    $check_product_id->execute([$user_id]);

    $flag = true;

    while ($fetch_product = $check_product_id->fetch(PDO::FETCH_ASSOC)) {
        if (in_array($product_id, $fetch_product)) {
            $flag = false;
            break;
        }
    }

    if ($flag) {
        if ($user_id > 0) {
            $send_to_cart = $conn->prepare("INSERT INTO `cart` (user_id, product_id, name, price, image, quantity)
                                          VALUES (?, ?, ?, ?, ?, ?)"); 
            $send_to_cart->execute([$user_id, $product_id, $product_name, $product_price, $product_image, $product_quantity]);
        } else {
            $array_cart = [$product_id, $product_name, $product_price, $product_image, $product_quantity];
            array_push($_SESSION['cart'], $array_cart);
        }
    }

    // Update the $check_cart_numbers query to use the $product_id value
    $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE product_id = ? AND user_id = ?");
    $check_cart_numbers->execute([$product_id, $user_id]);

    if ($check_cart_numbers->rowCount() > 0) {
        $message[] = 'Your Product <span style="color:red">Already</span> Added To Cart!';
    }
}


?>






<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta name="description" content="Noorelhuda_Ibrahim_portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ------------------bootstrap link(CDN)--------------------- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- ------------------fontawesome link(CDN)--------------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- ------------------icon with title--------------------- -->
    <link rel="icon" type="image/x-icon" href="./Images/logotitle.png">
    <!-- ------------------googlefont--------------------- -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Cinzel+Decorative:wght@700&family=Mr+Dafoe&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <!-- ------------------external css--------------------- -->
    <!-- <link rel="stylesheet" href="css/style2.css"> -->
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/product.css">


    <title>Healthlist</title>   



<style>

/*------------------------------------------------------ */
/* Start Feature Section                              */
/*------------------------------------------------------ */
.services-section {

padding-top: 80px;
padding-bottom: 20px;
}
.feature-section {

margin-top: -5rem;
padding-top: 100px;
}

.feature, .feature-2, .feature-3 {
padding-bottom: 20px;
}

.feature, .feature-3 {
text-align: center;
}
.feature h4,
.feature-3 h4 {
    font-size: 15px;
    color: #666;
    font-weight: 300;
    font-family: auto;
}


.feature-2 h4{
font-size: 15px;
color: #666;
padding-bottom: 10px;
font-weight: 300;
font-family: 'Oswald', sans-serif;
}

.feature p, 
.feature-2 p,
.feature-3 p {
color: #444;
font-size: 13px;
line-height: 20px;
font-weight: 300;
}

.feature i,
.feature-3 i {
font-size:2.5em;
width: 80px;
height: 80px;
padding:25px;
margin-bottom: 10px;
position: relative;
}

.feature i {
color:#189116;
box-shadow: 0 0 0 30px transparent;
-webkit-transform: translate3d(2, 2, 2);
-moz-transform: translate3d(2, 2, 2);
-o-transform: translate3d(2, 2, 2);
transform: translate3d(2, 2, 2);
-webkit-transition: box-shadow .6s ease-in-out;
-moz-transition: box-shadow .6s ease-in-out;
-o-transition: box-shadow .6s ease-in-out;
transition: box-shadow .6s ease-in-out;
}
.no-touch .feature:hover i,
.no-touch .feature:active i,
.no-touch .feature:focus i {		
    
    -webkit-transition: box-shadow .4s ease-in-out;
    -moz-transition: box-shadow .4s ease-in-out;
    -o-transition: box-shadow .4s ease-in-out;
    transition: box-shadow .4s ease-in-out;
}

.feature-3 i {
transition: all 0.3s;
-webkit-transition: all 0.3s;
-moz-transition: all 0.3s;
-o-transition: all 0.3s;
}

.feature-3:hover .border {
margin: 0 35%;
}

.feature-2 i {
font-size:2.5em;
color: #fff;
width: 70px;
height: 70px;
padding:20px;
position: relative;

}

.feature-2 .media-body {
margin-left: 25px !important;
}

.feature-2 .border {
margin-top: 20px;
margin-left: 49.999%;
margin-right: 49.999%;
border-color: #fff;
}

.feature-2:hover .border {
margin-left: 0%;
margin-right: 0%;
}
/* Add animation to the icon on hover */
.feature i:hover {
  animation: rotate 1s ease-in-out infinite;
}

@keyframes rotate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(270deg);
  }
}

/* Add box-shadow to the feature box */
.feature {
  border-radius:1rem;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}



/*------------------------------------------------------ */
/* Start Category Section                              */
/*------------------------------------------------------ */
/* Google Fonts - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
.category{
  min-height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
}
 .slide-container{
    /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
    max-width: 1120px;
    width: 100%;
    padding: 40px 0;
  }
  .slide-content{
    margin: 0 40px;
    overflow: hidden;
    border-radius: 25px;
  }
  .card{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 25px;
    /* background-color: #FFF; */
  }
  .image-content,
  .card-content{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px 14px;
  }
  .image-content{
    position: relative;
    row-gap: 5px;
    padding: 25px 0;
  }
  .overlay{
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-color: #94cb8a;
    border-radius: 25px 25px 0 25px;
  }
  .overlay::before,
  .overlay::after{
    content: '';
    position: absolute;
    right: 0;
    bottom: -40px;
    height: 40px;
    width: 40px;
    background-color: #94cb8a
  }
  .overlay::after{
    border-radius: 0 25px 0 0;
    background-color: #FFF;
  }
  .card-image{
    position: relative;
    height: 150px;
    width: 150px;
    border-radius: 50%;
    background: #FFF;
    padding: 3px;
  }
  .card-image .card-img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #189116;
  }
  .name{
    font-family:auto;
    font-size: 18px;
    font-weight: 300;
    color: #666;
  }
  .description{
    font-size: 14px;
    color: #707070;
    text-align: center;
  }

  .card .button{
  width: 100%;
  display: flex;
  justify-content: space-around;
  margin-top: 20px;
}

.card .button button{
  background:  #189116;
  outline: none;
  border: none;
  color: #fff;
  padding:7px 25px;
  border-radius: 6px;
  font-size: 14px;
  transition: all 0.3s ease;
  cursor: pointer;
}

.button button:hover{
  background: #94cb8a;
}



  .swiper-navBtn{
    color: #189116;
    transition: color 0.3s ease;
  }
  .swiper-navBtn:hover{
    color:gray;
  }
  .swiper-navBtn::before,
  .swiper-navBtn::after{
    font-size: 35px;
  }
  .swiper-button-next{
    right: 0;
  }
  .swiper-button-prev{
    left: 0;
  }
  .swiper-pagination-bullet{
    background-color: gray;
    opacity: 1;
  }
  .swiper-pagination-bullet-active{
    background-color:#189116 ;
  }
  
  @media screen and (max-width: 768px) {
    .slide-content{
      margin: 0 10px;
    }
    .swiper-navBtn{
      display: none;
    }
  }

/*------------------------------------------------------ */
/* Start Sales Product                             */
/*------------------------------------------------------ */
   /* Animation for card hover */
.card {
    transition: transform 0.3s ease;
}

.card:hover {
    transform: scale(1.05);
}

/* Additional styling */
.category {
   
    padding: 20px;
}

.slide-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.card {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Default styling */
.card-wrapper .card {
    margin-right: 20px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .card-wrapper .card {
        margin-right: 10px;
    }
}

@media (max-width: 576px) {
    .card-wrapper .card {
        margin-right: 0;
        margin-bottom: 20px;
    }
}

.sale-badge {
    background-color: #ff5252;
    color: #fff;
    padding: 5px 10px;
    border-radius: 15px 0 20px 0;;
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 20;
}

.product-thumbnail {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.product-thumbnail img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.product-thumbnail:hover img {
    transform: scale(1.1);
}

.wishlist,
.product-overly-btn {
    position: absolute;
    top: 10px;
    left: 10px;
    color: #fff;
    font-size: 18px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.product-thumbnail:hover .wishlist,
.product-thumbnail:hover .product-overly-btn {
    opacity: 1;
}

.add-to-cart {
    display: block;
    background-color:  #189116;
    font-size: 14px;
    color: #fff;
    padding: 8px 16px;
    text-align: center;
    border-radius: 4px;
    margin-top: 10px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.add-to-cart:hover {
    background-color: #94cb8a;
}

.product-content h4 {
    margin-top: 10px;
    font-size: 18px;
}

.pricing {
    margin-top: 10px;
    font-size: 16px;
}

.pricing span {
    font-weight: 600;   
}

    </style>
  
</head>


<!-- -------------------------logo bar-------------------------------- -->
<div class="main-navbar shadow-sm sticky-top">
        <div class="top-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block ml-">
                        <a href="Home.php"><img src="./Images/logo1.png" width="160rem" height="50rem"></a>
                    </div>
                    <div class="col-md-5 my-auto mx-auto">
                    <form role="search" method="POST">
                        <div class="input-group">
                            <input type="search" placeholder="Search your product" class="form-control" name="search"/>
                            <button class="btn bg-white" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                    <div class="col-md-5 my-auto">
                    <?php
                        if(isset($_SESSION['user_id'])) {
                            $user_id = $_SESSION['user_id'];

                            // Retrieve the number of items in the cart
                            $stmt = $conn->prepare("SELECT COUNT(*) FROM cart WHERE user_id = :user_id");
                            $stmt->bindParam(':user_id', $user_id);
                            $stmt->execute();
                            $cart_count = $stmt->fetchColumn();

                            // Retrieve the number of items in the wishlist
                            $stmt = $conn->prepare("SELECT COUNT(*) FROM favorite WHERE user_id = :user_id");
                            $stmt->bindParam(':user_id', $user_id);
                            $stmt->execute();
                            $wishlist_count = $stmt->fetchColumn();
                        } else {
                            $cart_count = 0;
                            $wishlist_count = 0;
                        }
                        ?>
                        <ul class="nav justify-content-end "style="font-family:auto">
                            
                        <li class="nav-item">
                            <a class="nav-link" href="Cart.php">
                                <i class="fa fa-shopping-cart"></i> Cart (<?php echo $cart_count; ?>)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Wishlist.php">
                                <i class="fa fa-heart"></i> Wishlist (<?php echo $wishlist_count; ?>)
                            </a>
                        </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i> <?php echo isset($user) ? $user['name'] : 'Username'; ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php if(isset($user)): ?>
                                    <li><a class="dropdown-item" href="user_profile.php" style="color:#189116"><i class="fa fa-user"></i> Profile</a></li>
                                    <?php else: ?>
                                    <li><a class="dropdown-item" href="user_register.php"style="color:#189116"><i class="fa fa-user-plus"></i> Register</a></li>
                                    <li><a class="dropdown-item" href="user_login.php"style="color:#189116"><i class="fa fa-sign-in"></i> Login</a></li>
                                    <?php endif; ?>
                                    <?php if(isset($user)): ?>
                                    <li><a class="dropdown-item" href="./components/user_logout.php"style="color:#189116" onclick="return confirm('logout from the website?');"><i class="fa fa-sign-out"></i> Logout</a></li>
                                    <?php endif; ?>
                                </ul>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<!-- -------------------------navbar-------------------------------- --> 
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none text-light" href="Home.php">
                    Healthlist
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav me-20 mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" style="background-color:#94cb8a" href="Home.php"><b>Home</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About.php"><b>About Us</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Product.php"><b>Products</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Brand_product.php"><b>Brands</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Recipes.php"><b>Recipes</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contact.php"><b>Contact</b></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
<!-- -------------------------slider-------------------------------- -->

<header>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://th.bing.com/th/id/R.a4db4fd842ba6c25267f5ef590506ae3?rik=Kpz14mnorivl3Q&pid=ImgRaw&r=0" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">
                    <div class="custom-carousel-content">
                        <h1>
                            <span>Welcome TO Healthlist ;A Platform Offers Various Healthy Food Products</span>
                            
                        </h1>
                        <p>
                        We offer various healthy food products within various healthy food styles categories ,in addition to sale up to 20%
                        </p>
                        <div>
                            <a href="Product.php" class="btn btn-slider btn-success">
                            <i class="fa-solid fa-cart-shopping"></i>
                            Discover Our Products & Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./Images/slide2.jpg" class="d-block w-100" alt="..." height=":100%">
                <div class="carousel-caption  d-md-block">
                    <div class="custom-carousel-content">
                        <h1>
                            <span>Healthlist Offers Various Brands Of Healthy Food Products</span>
                            
                        </h1>
                        <p>
                        We offer various healthy food products within various of popular healthy food brands 
                        </p>
                        <div>
                                <a href="Brand_product.php" class="btn btn-slider btn-success">
                        <i class="fa-solid fa-award"></i>

                                Discover The Most Popular Brands 
								</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./Images/slide3.jpg" class="d-block w-100" alt="..." height=":100%">
                <div class="carousel-caption  d-md-block">
                    <div class="custom-carousel-content">
                        <h1>
                            <span>Healthlist Shares Many Healthy Recipes Made with love</span>
                           
                        </h1>
                        <p>
                        We offer various healthy food recipes within various healthy food styles categories
                        </p>
                        <div>
                        <a href="Recipes.php" class="btn btn-slider btn-success">
                        <i class="fa-solid fa-utensils"></i>
                                Discover Your Favorite Recipes
                        </a>
							</div>
						</div>
					</div>
				</div>
			</div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
	  </header> 
                       
<!-- --------------------------Features---------------------------------------- -->

<section id="feature" class="feature-section">
            <div class="container mt-20">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                        <i class="fa-solid fa-truck"></i>
                            <div class="feature-content">
                                <h4>Free Shipping</h4>
                                <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p> -->
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-gift"></i>
                            <div class="feature-content">
                                <h4>Best Prices & Offers</h4>
                                <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p> -->
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                        <i class="fa-solid fa-cube"></i>
                            <div class="feature-content">
                                <h4>Wide Choices</h4>
                                <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p> -->
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                        <i class="fa-solid fa-shield-halved"></i>
                                <div class="feature-content">
                                <h4>Secure Payment</h4>
                                <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p> -->
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            
            </div><!-- /.container -->
        </section>


        
<!-- -------------------------shop by category-------------------------------- -->
<section id="category" class="category">
    <div class="slide-container swiper">
        <h2 class="text-center pb-5" style="color: #666 ;font-family: 'Oswald', sans-serif;">Shop By Category</h2>
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <?php
                // Connect to database
                include './Components/connect.php';                
                // Fetch categories
                $stmt = $conn->query('SELECT * FROM category');
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                // Loop through categories
                foreach ($results as $category) {
                    // Fetch products for category
                    $stmt = $conn->prepare('SELECT * FROM products WHERE category_id = :category_id');
                    $stmt->execute(['category_id' => $category['category_id']]);
                    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    // Fetch recipes for category
                    $stmt = $conn->prepare('SELECT * FROM recipes WHERE category_id = :category_id');
                    $stmt->execute(['category_id' => $category['category_id']]);
                    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    // Display category card
                    ?>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="./admin/uploaded_img/<?php echo $category['image_01']; ?>" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name"><?php echo $category['category_name']; ?></h2>
                            <p class="description"><?php echo $category['description']; ?></p>
                            <div class="button">
                                <form action="Category.php" method="get">
                                    <input type="hidden" name="category_id" value="<?php echo $category['category_id']; ?>">
                                    <button type="submit"><i class="fa fa-shopping-cart p-1"></i>Products</button>
                                </form>
                                <form action="Category_recipe.php" method="get">
                                    <input type="hidden" name="category_id" value="<?php echo $category['category_id']; ?>">
                                    <button type="submit"><i class="fa-solid fa-utensils p-1" style="color: #ffffff;"></i>Recipes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>


<!-- -------------------------Sales Products-------------------------------- -->
<section id="category" class="category">
    <div class="slide-container swiper">
        <h2 class="text-center pb-5" style="color: #666; font-family: 'Oswald', sans-serif;">Sales Products</h2>
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">

                <?php
                // Step 1: Connect to the database using PDO
                include './Components/connect.php';

                // Step 2: Prepare and execute a query to retrieve sales products
                $stmt = $conn->prepare('SELECT * FROM products WHERE is_sale = 1');
                $stmt->execute();

                // Step 3: Loop through the results and output the product information
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    ?>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                        <div class="card">
                            <div class="sale-badge"><span>Sale</span></div>
                            <!-- Thumbnail -->
                            <div class="product-thumbnail">
                                <div class="img">
                                    <a href="Single_view_product.php">
                                        <img src="./admin/uploaded_img/<?php echo $row['image']; ?>"
                                            alt="<?php echo $row['name']; ?>">
                                    </a>
                                </div>
                                <a class="wishlist" href="Wishlist.php"><i class="far fa-heart"></i></a>
                                <div class="product-overly-btn">
                                    <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
                                            class="far fa-eye text-success"></i></a>
                                    <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
                                            class="far fa-heart text-success"></i></a>
                                </div>
                                <form action="Cart.php" method="POST">
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                                    <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                                    <input type="hidden" name="price" value="<?php echo $row['price_discount']; ?>">
                                    <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit" class="add-to-cart" name="addTOcart">Add To Cart</button>
                                </form>
                            </div>
                            <div class="product-content">
                                <h4><a href="Single_view_product.php"
                                        style="color:#253d4e; font-family:auto"><?php echo $row['name']; ?></a></h4>
                                <div class="pricing">
                                    <span><?php echo $row['price_discount']; ?> JOD <del><?php echo $row['price']; ?>
                                            JOD </del></span>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- ---------------------------brands-------------------------------- -->
<section id="category" class="category">
    <div class="slide-container swiper">
        <h2 class="text-center pb-5" style="color: #666 ;font-family: 'Oswald', sans-serif;">Shop By Brands</h2>
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                <?php
                // Connect to database
                include './Components/connect.php';                
                // Fetch categories
                $stmt = $conn->query('SELECT * FROM brands');
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                // Loop through brands
                foreach ($results as $brand) {
                    // Fetch products for brands
                    $stmt = $conn->prepare('SELECT * FROM products WHERE brand_id = :brand_id');
                    $stmt->execute(['brand_id' => $brand['brand_id']]);
                    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  
                    
                    // Display brand card
                    ?>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image" style="border-radius:0">
                                <img src="./admin/uploaded_img/<?php echo $brand['image_01']; ?>" alt="" class="card-img"style="border-radius:0">
                            </div>
                        </div>
                        <div class="card-content">
                           
                            <div class="button">
                                <form action="Category brand.php" method="get">
                                    <input type="hidden" name="brand_id" value="<?php echo $brand['brand_id']; ?>">
                                    <button type="submit"><i class="fa fa-shopping-cart p-1"></i>Products</button>
                                </form>
                               
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>


<!-- -------------------------footer-------------------------------- -->
<div>
	<div class="footer-area mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4 class="footer-heading">Healthlist E-Commerce</h4>
					<div class="footer-underline"></div>
					<p>
                    Healthlist was created to provide specialty products for those with specific health-food needs in various options and varieties.
					</p>
				</div>
				<div class="col-md-3">
					<h4 class="footer-heading">Quick Links</h4>
					<div class="footer-underline"></div>
					<div class="mb-2"><a href="Home.php" class="text-white">Home</a></div>
					<div class="mb-2"><a href="About" class="text-white">About Us</a></div>
					<div class="mb-2"><a href="Contact" class="text-white">Contact Us</a></div>
					<!-- <div class="mb-2"><a href="" class="text-white">Blogs</a></div>
					<div class="mb-2"><a href="" class="text-white">Sitemaps</a></div> -->
				</div>
				<div class="col-md-3">
					<h4 class="footer-heading">Extra Links</h4>
					<div class="footer-underline"></div>
					<div class="mb-2"><a href="user_login.php" class="text-white">Login</a></div>
					<div class="mb-2"><a href="user_register.php" class="text-white">Register</a></div>
					<div class="mb-2"><a href="Cart.php" class="text-white">Cart</a></div>
					<!-- <div class="mb-2"><a href="" class="text-white">orders</a></div> -->
				</div>
				<div class="col-md-3">
					<h4 class="footer-heading">Reach Us</h4>
					<div class="footer-underline"></div>
					<div class="mb-2">
						<p>
							<i class="fa fa-map-marker"></i>Happy Street, Aqaba, Jordan
						</p>
					</div>
					<div class="mb-2">
						<a href="" class="text-white">
							<i class="fa fa-phone"></i> +962 345 67890
						</a>
					</div>
					<div class="mb-2">
						<a href="" class="text-white">
							<i class="fa fa-envelope"></i> Healthlist@gmail.com
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright-area " >
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<p class=""> &copy; 2023 Healthlist. Powered by Healthlist.</p>
				</div>
				<div class="col-md-4">
					<div class="social-media">
						Get Connected:
						<a href=""><i class="fab fa-facebook"></i></a>
						<a href=""><i class="fab fa-twitter"></i></a>
						<a href=""><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


</body>
<!-- ------------------------------------------------------------------------------------- -->
  <!-- Swiper JS -->
  <script src="./js/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
 
<script>
         
         var swiper = new Swiper(".slide-content", {
             slidesPerView: 3,
             spaceBetween: 25,
             loop: true,
             centerSlide: 'true',
             fade: 'true',
             grabCursor: 'true',
             autoplay: {
                delay: 1500, // in milliseconds
                },
             pagination: {
               el: ".swiper-pagination",
               clickable: true,
               dynamicBullets: true,
             },
             navigation: {
               nextEl: ".swiper-button-next",
               prevEl: ".swiper-button-prev",
             },
         
             breakpoints:{
                 0: {
                     slidesPerView: 1,
                 },
                 520: {
                     slidesPerView: 2,
                 },
                 950: {
                     slidesPerView: 3,
                 },
             },
           });
         
    </script>
    
</html>
