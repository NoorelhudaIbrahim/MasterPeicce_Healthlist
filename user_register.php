<?php

include './Components/connect.php'; 

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = htmlspecialchars($name, ENT_QUOTES);
   $email = $_POST['email'];
   $email = htmlspecialchars($email, ENT_QUOTES);
   $pass = sha1($_POST['pass']);
   $pass =htmlspecialchars($pass, ENT_QUOTES);
   $cpass = sha1($_POST['cpass']);
   $cpass = htmlspecialchars($cpass, ENT_QUOTES);
  

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select_user->execute([$email,]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $message[] = 'Email <span style="color:red">Already</span> Exists!';
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm Password <span style="color:red">Not Matched</span>!';
      }else{
         $insert_user = $conn->prepare("INSERT INTO `users`(name, email, password) VALUES(?,?,?)");
         $insert_user->execute([$name, $email, $cpass]);
         $message[] = 'Registered <span style="color:green">Successfully</span>, Login Now Please!';
      }
   }

//    $select_user_for_cart = $conn->prepare("SELECT * FROM `users` ORDER BY user_id DESC LIMIT 1");
//    $select_user_for_cart->execute();
//    if($select_user_for_cart->rowCount()>0){
//       while($fetch_select_user_for_cart = $select_user_for_cart->fetch(PDO::FETCH_ASSOC)){
//          $user_id = $fetch_select_user_for_cart['user_id'];
//          $cart_array = $_SESSION['cart'];
//          for( $i = 0 ; $i < count($cart_array) ; $i++){
//             $sql = $conn->prepare("INSERT INTO cart (user_id , product_id , name , price , image , quantity)
//                                     VALUES (?,?,?,?,?,?)");
//             $sql->execute([$user_id , $cart_array[$i][0],$cart_array[$i][1],$cart_array[$i][2],$cart_array[$i][3],$cart_array[$i][4]]);
//          }
//          $fav_array = $_SESSION['cart'];
//          for( $i = 0 ; $i < count($fav_array) ; $i++){
//             $stm = $conn->prepare("INSERT INTO favorite (user_id , product_id)
//                                     VALUES (?,?)");
//             $stm->execute([$user_id , $fav_array[$i][0]]);
//          }
//       }
//    }

//    $_SESSION['cart']=[];
//    $_SESSION['fav']=[];

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
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/register.css">
    <title>Healthlist</title>
   
</head>

<body>
<!-- -------------------------logo bar-------------------------------- -->
<div class="main-navbar shadow-sm sticky-top">
        <div class="top-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block ml-">
                        <img src="./Images/logo1.png" width="160rem" height="50rem">
                    </div>
                    <div class="col-md-5 my-auto mx-auto" >
                        <form role="search">
                            <div class="input-group">
                                <input type="search" placeholder="Search your product" class="form-control" />
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
                                <a class="nav-link dropdown-toggle" href="user_profile.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i> Username 
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="user_profile.php"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a class="dropdown-item" href="Orders.php"><i class="fa fa-list"></i> My Orders</a></li>
                                <!-- <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> My Wishlist</a></li> -->
                                <!-- <li><a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> My Cart</a></li> -->
                                <li><a class="dropdown-item" href="user_register.php"><i class="fa fa-user-plus"></i> Register</a></li>
                                <li><a class="dropdown-item" href="user_login.php"><i class="fa fa-sign-in"></i> Login</a></li>
                                <li><a class="dropdown-item" href="./components/user_logout.php" onclick="return confirm('logout from the website?');"><i class="fa fa-sign-out"></i> Logout</a></li>
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
                        <a class="nav-link" href="Home.php"><b>Home</b></a>
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
                            <a class="nav-link"  href="Contact.php"><b>Contact</b></a>
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
<!-- -------------------------Sign Up Form-------------------------------- -->
<div class="signup-form">
    <form action="" method="post">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-user"></span>
					</span>                    
				</div>
				<input type="text" class="form-control" name="name" required placeholder="enter your username" maxlength="20">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-paper-plane"></i>
					</span>                    
				</div>
				<input type="email" class="form-control" name="email" required placeholder="enter your email" maxlength="50"  oninput="this.value = this.value.replace(/\s/g, '')">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-lock"></i>
					</span>                    
				</div>
				<input type="password" class="form-control" name="pass" required placeholder="enter your password" maxlength="20"  oninput="this.value = this.value.replace(/\s/g, '')">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-lock"></i>
						<i class="fa fa-check"></i>
					</span>                    
				</div>
				<input type="password" class="form-control" name="cpass" required placeholder="confirm your password" maxlength="20"  oninput="this.value = this.value.replace(/\s/g, '')">
			</div>
        </div>
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" value="register now"  name="submit">Sign Up</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="user_login.php">Login here</a></div>
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
                                <i class="fa fa-envelope"></i> healthlist@gmail.com
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
