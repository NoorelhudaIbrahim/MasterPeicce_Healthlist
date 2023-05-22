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



// Check if the cart exists in the session
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Check if a product was added to the cart
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $button_name = $_POST['addTOcart_'.$product_id];
    
    // Retrieve the product details from the form data
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $quantity = $_POST['quantity'];
    
    // Add the product to the cart
    $_SESSION['cart'][$product_id] = array(
        'product_id' => $product_id,
        'name' => $name,
        'price' => $price,
        'image' => $image,
        'quantity' => $quantity
    );
    
    // Redirect the user back to the "Sales Products" page or show a success message
    header("Location: Cart.php"); // Replace "SalesProducts.php" with the actual page URL
    
    // Make sure to exit the script after redirecting
    exit();
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
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/home.css">
    <title>Healthlist</title>   
</head>
<style>
  
  table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    img {
        max-width: 50px;
        max-height: 50px;
    }

    input[type="number"] {
        width: 50px;
        text-align: center;
    }

    .actions button {
        margin-left: 5px;
    }

</style>
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
                        <a class="nav-link"  href="Home.php"><b>Home</b></a>
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
<h1 class="display-3 mb-3  slideInDown text-center text-success" >My Cart</h1>
<nav aria-label="breadcrumb animated slideInDown">
<ol class="breadcrumb mb-0 ">
<li class="breadcrumb-item text-decoration-underline"><a class="text-body" href="Home.php">Home</a></li>
<li class="breadcrumb-item text-decoration-underline text-dark active" aria-current="page">My Cart</li>
</ol>
</nav>
</div>
</div>

<!-- -------------------------cart-------------------------------- --> 
<?php
// Step 1: Connect to the database using PDO
include './Components/connect.php';

// Step 2: Check if the 'cart' session variable is set and user is logged in
if (isset($_SESSION['cart']) && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Loop through the cart items and insert them into the database
    foreach ($_SESSION['cart'] as $product) {
        $product_id = $product['product_id'];
        $name = $product['name'];
        $price = $product['price'];
        $image = $product['image'];
        $quantity = $product['quantity'];

        // Step 3: Prepare and execute a query to insert the product into the cart table
        $stmt = $conn->prepare('INSERT INTO cart (user_id, product_id, name, price, image, quantity) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$user_id, $product_id, $name, $price, $image, $quantity]);
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    // Step 1: Connect to the database using PDO
    include './Components/connect.php';

    // Step 2: Check if the 'cart' session variable is set and user is logged in
    if (isset($_SESSION['cart']) && isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $product_id = $_POST['product_id'];
        $quantity = $_POST['quantity'];

        // Step 3: Prepare and execute a query to update the quantity in the cart table
        $stmt = $conn->prepare('UPDATE cart SET quantity = ? WHERE user_id = ? AND product_id = ?');
        $stmt->execute([$quantity, $user_id, $product_id]);
    }
}



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove'])) {
    // Step 1: Connect to the database using PDO
    include './Components/connect.php';

    // Step 2: Check if the 'cart' session variable is set and user is logged in
    if (isset($_SESSION['cart']) && isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $product_id = $_POST['product_id'];

        // Step 3: Prepare and execute a query to remove the item from the cart table
        $stmt = $conn->prepare('DELETE FROM cart WHERE user_id = ? AND product_id = ?');
        $stmt->execute([$user_id, $product_id]);
    }
}




// Step 4: Display the cart table
?>
<table>
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Remove</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Step 5: Retrieve cart items from the database
        $stmt = $conn->prepare('SELECT * FROM cart');
        $stmt->execute();

        $total = 0;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $subtotal = $row['price'] * $row['quantity'];
            $total += $subtotal;
            ?>
            <tr>
                <td>
                    <img src="./admin/uploaded_img/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" width="50">
                    <?php echo $row['name']; ?>
                </td>
                <td><?php echo $row['price']; ?> JOD</td>
                <td>
                    <form  method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                        <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" min="1">
                        <button type="submit" name="update">Update</button>
                    </form>
                </td>
                <td><?php echo $subtotal; ?> JOD</td>
                <td>
                    <form  method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                        <button type="submit" name="remove">Remove</button>
                    </form>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">Total</td>
            <td><?php echo $total; ?> JOD</td>
            <td></td>
        </tr>
    </tfoot>
</table>

<div class="cart-buttons">
    <a href="Products.php" class="btn btn-outline-secondary">Continue Shopping</a>
    <a href="Checkout.php" class="btn btn-primary">Proceed to Checkout</a>
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




