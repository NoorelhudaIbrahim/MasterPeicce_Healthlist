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
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/product.css">

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
                            <a class="nav-link active" style="background-color:#94cb8a" href="Product.php"><b>Products</b></a>
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
<h1 class="display-3 mb-3  slideInDown text-center text-success" >Products</h1>
<nav aria-label="breadcrumb animated slideInDown">
<ol class="breadcrumb mb-0 ">
<li class="breadcrumb-item text-decoration-underline"><a class="text-body" href="Home.php">Home</a></li>
<li class="breadcrumb-item text-decoration-underline text-dark active" aria-current="page">Products</li>
</ol>
</nav>
</div>
</div>

<!-- --------------------------------------------------------------- -->
<div class="catg-section">
  <div class="category">
   
      <div class="prod-container">
        <?php
        // check if the search results are available in the session
        if (isset($_SESSION['results'])) {
            $results = $_SESSION['results'];

            // Display all the products
            foreach ($results as $result) {
                // Retrieve the category name for the current product
                $stmt = $conn->prepare("SELECT category_name FROM category WHERE category_id = :category_id");
                $stmt->bindValue(':category_id', $result['category_id'], PDO::PARAM_INT);
                $stmt->execute();
                $category = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <div class="card">
                    <div class="wishlist">
                        <a class="heart" href="Wishlist.php"><i class="fa-regular fa-heart"></i></a>
                        <a class="eye" href="Single_view_product.php"><i class="fa-regular fa-eye"></i></a>
                    </div>
                    <?php
                    if ($result['discount'] > 0) {
                        echo '<span class="up discount">-' . $result['discount'] . '%</span>';
                    }
                    ?>
                    <img src="./admin/uploaded_img/<?php echo $result['image']; ?>" alt="">
                    <div class="text">
                        <span class="tag"><?php echo htmlspecialchars($category['category_name'], ENT_QUOTES); ?></span>
                        <h3><?php echo htmlspecialchars($result['name'], ENT_QUOTES); ?></h3>
                        <p><?php echo htmlspecialchars($result['description'], ENT_QUOTES); ?></p>
                    </div>
                    <div class="price">
                        <?php
                        if (isset($result['discount']) && is_numeric($result['discount']) && $result['discount'] > 0 && $result['discount'] <= 100) {
                            $price_discount = $result['price'] - ($result['price'] * $result['discount'] / 100);
                            echo '<h4>JOD' . number_format($price_discount, 2) . ' <del>JOD' . number_format($result['price'], 2) . '</del></h4>';
                        } else {
                            echo '<h4>JOD' . number_format($result['price'], 2) . '</h4>';
                        }
                        ?>
                        <div class="add">
                            <a href="Cart.php">Add</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </div>
                <?php
            }

            // Clear the search results from the session
            unset($_SESSION['results']);
        } else {
            echo '<p>No results found.</p>';
        }
        ?>
      </div>
    </div>
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



