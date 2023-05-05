<?php

include './Components/connect.php'; 

// start the session
session_start();

// check if the form has been submitted
if(isset($_POST['search'])) {

    // prepare the search query
    $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE :name");

    // bind the parameters
    $stmt->bindValue(':name', '%' . $_POST['search'] . '%', PDO::PARAM_STR);

    // execute the query
    $stmt->execute();

    // fetch the results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // redirect to 404 page if no results found
    if (count($results) === 0) {
        header("Location: 404Page.php");
        exit();
    }

    // store the results in the session
    $_SESSION['results'] = $results;

    // redirect to the search results page
    header("Location: Search_result.php");
    exit();
}

// Check if the user is logged in
if(isset($_SESSION['user_id'])) {
    // Fetch the user's information from the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
  }

?>





<!DOCTYPE html>
<head>
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

    <!-- ------------------icon with title--------------------- -->
    <link rel="icon" type="image/x-icon" href="./Images/logotitle.png">
    <!-- ------------------googlefont--------------------- -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Cinzel+Decorative:wght@700&family=Mr+Dafoe&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <!-- ------------------external css--------------------- -->
    <!-- <link rel="stylesheet" href="./css/style2.css"> -->
    <link rel="stylesheet" href="./css/home.css">
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
  background-color: white;
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
    background-color: #FFF;
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
  padding:13px 37px;
  border-radius: 20px;
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
   
    </style>
  
</head>




<body>
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
                        <ul class="nav justify-content-end">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="Cart.php">
                                    <i class="fa fa-shopping-cart"></i> Cart (0)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Wishlist.php">
                                    <i class="fa fa-heart"></i> Wishlist (0)
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i> <?php echo isset($user) ? $user['name'] : 'Username'; ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php if(isset($user)): ?>
                                    <li><a class="dropdown-item" href="user_profile.php"><i class="fa fa-user"></i> Profile</a></li>
                                    <!-- <li><a class="dropdown-item" href="Orders.php"><i class="fa fa-list"></i> My Orders</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> My Wishlist</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> My Cart</a></li> -->
                                    <?php else: ?>
                                    <li><a class="dropdown-item" href="user_register.php"><i class="fa fa-user-plus"></i> Register</a></li>
                                    <li><a class="dropdown-item" href="user_login.php"><i class="fa fa-sign-in"></i> Login</a></li>
                                    <?php endif; ?>
                                    <?php if(isset($user)): ?>
                                    <li><a class="dropdown-item" href="./components/user_logout.php" onclick="return confirm('logout from the website?');"><i class="fa fa-sign-out"></i> Logout</a></li>
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
                <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="Home.php">
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
                <div class="carousel-caption d-none d-md-block">
                    <div class="custom-carousel-content">
                        <h1>
                            <span>Best Ecommerce Solutions 1 </span>
                            to Boost your Brand Name &amp; Sales
                        </h1>
                        <p>
                            We offer an industry-driven and successful digital marketing strategy that helps our clients
                            in achieving a strong online presence and maximum company profit.
                        </p>
                        <div>
                            <a href="#" class="btn btn-slider">
                                Get Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.sporter.com/media/catalog/category/healthy_food-en.jpg" class="d-block w-100" alt="..." height=":100%">
                <div class="carousel-caption d-none d-md-block">
                    <div class="custom-carousel-content">
                        <h1>
                            <span>Best Ecommerce Solutions 2 </span>
                            to Boost your Brand Name &amp; Sales
                        </h1>
                        <p>
                            We offer an industry-driven and successful digital marketing strategy that helps our clients
                            in achieving a strong online presence and maximum company profit.
                        </p>
                        <div>
                            <a href="#" class="btn btn-slider">
                                Get Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2016/11/21/11/57/bowl-1844894_960_720.jpg" class="d-block w-100" alt="..." height=":100%">
                <div class="carousel-caption d-none d-md-block">
                    <div class="custom-carousel-content">
                        <h1>
                            <span>Best Ecommerce Solutions 3 </span>
                            to Boost your Brand Name &amp; Sales
                        </h1>
                        <p>
                            We offer an industry-driven and successful digital marketing strategy that helps our clients
                            in achieving a strong online presence and maximum company profit.
                        </p>
                        <div>
								<a href="#" class="btn btn-slider">
									Get Now
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
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
	  </header> 
                       
	  <!-- <script>
       
        $(document).ready(function(){
        $('.carousel').carousel({
            interval: 1000 // time in milliseconds
        });
        });
    
    </script> -->
<!-- --------------------------Features---------------------------------------- -->

<section id="feature" class="feature-section">
            <div class="container mt-20">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-magic"></i>
                            <div class="feature-content">
                                <h4>Web Design</h4>
                                <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p> -->
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-gift"></i>
                            <div class="feature-content">
                                <h4>Graphics Design</h4>
                                <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p> -->
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-wordpress"></i>
                            <div class="feature-content">
                                <h4>Wordpress Theme</h4>
                                <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p> -->
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-plug"></i>
                            <div class="feature-content">
                                <h4>Wordpress Plugin</h4>
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
                                <form action="Product.php" method="get">
                                    <input type="hidden" name="category_id" value="<?php echo $category['category_id']; ?>">
                                    <button type="submit"><i class="fa fa-shopping-cart p-1"></i>Products</button>
                                </form>
                                <form action="Recipes.php" method="get">
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


<!-- -------------------------Features Products-------------------------------- -->
<section id="category" class="category">
<div class="slide-container swiper">
<h2 class="text-center pb-5" style="color: #666 ;font-family: 'Oswald', sans-serif;">Features Products</h2>

            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile1.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                        
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile2.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile3.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile4.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="images/profile5.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    
                    
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        </section> 


<!-- -------------------------footer-------------------------------- -->
      <div>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="footer-heading">Healthlist E-Commerce</h4>
                        <div class="footer-underline"></div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Quick Links</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2"><a href="" class="text-white">Home</a></div>
                        <div class="mb-2"><a href="" class="text-white">About Us</a></div>
                        <div class="mb-2"><a href="" class="text-white">Contact Us</a></div>
                        <!-- <div class="mb-2"><a href="" class="text-white">Blogs</a></div>
                        <div class="mb-2"><a href="" class="text-white">Sitemaps</a></div> -->
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Extra Links</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2"><a href="" class="text-white">Login</a></div>
                        <div class="mb-2"><a href="" class="text-white">Register</a></div>
                        <div class="mb-2"><a href="" class="text-white">Cart</a></div>
                        <div class="mb-2"><a href="" class="text-white">orders</a></div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Reach Us</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2">
                            <p>
                                <i class="fa fa-map-marker"></i> #444, some main road, some area, some street, bangalore, india - 560077
                            </p>
                        </div>
                        <div class="mb-2">
                            <a href="" class="text-white">
                                <i class="fa fa-phone"></i> +91 888-XXX-XXXX
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="" class="text-white">
                                <i class="fa fa-envelope"></i>Healthlist@gmail.com
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
                        <p class=""> &copy; 2022 Healthlist. Powered by Healthlist.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="social-media">
                            Get Connected:
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
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
