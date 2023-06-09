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
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/recipe.css">

    <title>Healthlist</title>   
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
                        <ul class="nav justify-content-end "style="font-family:auto">
                            
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
                                    <li><a class="dropdown-item" href="user_profile.php" style="color:#189116"><i class="fa fa-user"></i> Profile</a></li>
                                    <!-- <li><a class="dropdown-item" href="Orders.php"><i class="fa fa-list"></i> My Orders</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> My Wishlist</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> My Cart</a></li> -->
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
                        <a class="nav-link"  href="Home.php"><b>Home</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "  href="About.php"><b>About Us</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="Product.php"><b>Products</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Brand_product.php"><b>Brands</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="background-color:#94cb8a" href="Recipes.php"><b>Recipes</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contact.php"><b>Contact</b></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $("#mainNavbar");
                $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
            });
        });
    </script>

<!-- -------------------------header-------------------------------- -->

<div class="container-fluid page-header wow fadeIn " data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn; back; background-image: url(https://t4.ftcdn.net/jpg/01/76/36/95/240_F_176369556_9ctY3plObjG6okZForkT9vkQl2CxES7E.jpg);background-size: cover;"><div class="container">
<h1 class="display-3 mb-3  slideInDown text-center text-success" >Recipes</h1>
<nav aria-label="breadcrumb animated slideInDown">
<ol class="breadcrumb mb-0 ">
<li class="breadcrumb-item text-decoration-underline"><a class="text-body" href="Home.php">Home</a></li>
<li class="breadcrumb-item text-decoration-underline text-dark active" aria-current="page">Recipes</li>
</ol>
</nav>
</div>
</div>

<!-- -------------------------recipe-------------------------------- --> 
<div class="blogs-section">
<div class="aside">
          <div class="cat1 ">
            <h2 style="color: #666;font-family: 'Oswald', sans-serif;">Category</h2>
            <?php
              // Connect to the database
              include './Components/connect.php'; 

              // Retrieve the category data
              $stmt = $conn->query("SELECT c.category_id, c.category_name, COUNT(r.recipe_id) as recipe_count
              FROM category c
              LEFT JOIN recipes r ON c.category_id = r.category_id
              GROUP BY c.category_id
              ");
              $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

              // Display the category data with links to each category page
              foreach ($categories as $category) {
                echo '<div class="products">';
                echo '<a href="Category_recipe.php?category_id=' . $category['category_id'] . '">';
                echo '<span class="text" style="color:#189116;font-family:auto;font-size:1.25rem;">' . $category['category_name'] . '</span>';
                // echo '<span class="number mt-auto">' . $category['product_count'] . '</span>';
                echo '</a>';
                echo '</div>';
              }
            ?>
          </div>
        </div>
  <div class="category">
    <div class="pop">
      <?php
      // Connect to the database
      include './Components/connect.php';

      // Retrieve the category ID from the URL parameter
      $category_id = filter_input(INPUT_GET, 'category_id', FILTER_SANITIZE_NUMBER_INT);

      // Retrieve the category name
      $stmt = $conn->prepare("SELECT category_name FROM category WHERE category_id = :category_id");
      $stmt->bindValue(':category_id', $category_id, PDO::PARAM_INT);
      $stmt->execute();
      $category = $stmt->fetch(PDO::FETCH_ASSOC);

      // Display the category name
      echo '<h2 style="color: #666;font-family: Oswald, sans-serif;">Category: ' . htmlspecialchars($category['category_name'], ENT_QUOTES) . '</h2>';
      ?>
      <!-- <div class="all-features">
        <label for="sort">
          <div class="feature">
            <i class="fa-solid fa-arrow-down-wide-short"></i>
            <span>Sort by: Menu </span>
            <i class="fa-solid fa-angle-down"></i>
          </div>
        </label>
        <input type="checkbox" id="sort">
        <ul class="drop-down2">
          <li><a class="a2 active" href="#">Menu</a></li>
          <li><a class="a2" href="#">Main</a></li>
          <li><a class="a2" href="#">Salads</a></li>
          <li><a class="a2" href="#">Dessert</a></li>
          <li><a class="a2" href="#">Side Dishes</a></li>
        </ul>
      </div> -->
    </div>
    <div class="prod-container">
      <?php
      // Connect to the database
      include './Components/connect.php';


       // Retrieve the category ID from the URL parameter
       $category_id = filter_input(INPUT_GET, 'category_id', FILTER_SANITIZE_NUMBER_INT);

       // Retrieve the category name
       $stmt = $conn->prepare("SELECT category_name FROM category WHERE category_id = :category_id");
       $stmt->bindValue(':category_id', $category_id, PDO::PARAM_INT);
       $stmt->execute();
       $category = $stmt->fetch(PDO::FETCH_ASSOC);

        // Retrieve the recipes based on the selected category
        $stmt = $conn->prepare("SELECT * FROM recipes WHERE category_id = ?");
        $stmt->execute([$category_id]);
        $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

      // Display all the recipes for the selected category
      foreach ($recipes as $recipe) {
        echo '<div class="card">';
        echo '<img src="./admin/uploaded_img/' . $recipe['image'] . '" alt="">';
        echo '<div class="text">';
        echo '<span class="tag">' . htmlspecialchars($category['category_name'], ENT_QUOTES) . '</span>';
        echo '<h3>' . htmlspecialchars($recipe['name'], ENT_QUOTES) . '</h3>';
        echo '<span class="tag">' . htmlspecialchars($recipe['rcategory'], ENT_QUOTES) . '</span>';
        echo '<p>Author: ' . htmlspecialchars($recipe['author'], ENT_QUOTES) . '</p>';
        echo '</div>';
        echo '<a href="Single_view_recipe.php" class="text-center text-white bg-success">Explore...</a>';
        echo '</div>';

      }
      ?>
    </div>

      <!-- <div class="pagination">
        <ul class="pag-wrapper">
          <li><a href="#"><i class="fa-solid fa-arrow-left wide-arrow"></i></a></li>
          <li><a href="#">1</a></li>
          <li><a class="active" href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">...</a></li>
          <li><a href="#">6</a></li>
          <li><a href="#"><i class="fa-solid fa-arrow-right wide-arrow"></i></a></li>
        </ul>
      </div> -->
    </div>
    
            </div>
     
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
<script src="./js/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</html>



