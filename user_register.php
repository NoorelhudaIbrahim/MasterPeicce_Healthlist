




<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Noorelhuda_Ibrahim_portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ------------------bootstrap link(CDN)--------------------- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ------------------fontawesome link(CDN)--------------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ------------------icon with title--------------------- -->
    <link rel="icon" href="Images/logo2.png" type="image/icon type">
    <!-- ------------------googlefont--------------------- -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Cinzel+Decorative:wght@700&family=Mr+Dafoe&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <!-- ------------------external css--------------------- -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/register.css">
    <title>Sign Up</title>   
</head>

<body>
<!-- -------------------------Header-------------------------------- -->
<!-- -------------------------logo bar-------------------------------- -->
    <div class="main-navbar shadow-sm sticky-top">
        <div class="top-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block ml-">
                        <img src="./Images/logo.png" width="160rem" height="50rem">
                    </div>
                    <div class="col-md-5 my-auto" style="position: relative;left:12rem;">
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
                                <a class="nav-link" href="#">
                                    <i class="fa fa-shopping-cart"></i> Cart (0)
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-heart"></i> Wishlist (0)
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user"></i> Username 
								</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a></li>
                                <!-- <li><a class="dropdown-item" href="#"><i class="fa fa-list"></i> My Orders</a></li> -->
                                <!-- <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> My Wishlist</a></li> -->
                                <!-- <li><a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> My Cart</a></li> -->
                                <li><a class="dropdown-item" href="register.html"><i class="fa fa-sign-up"></i> Register</a></li>
                                <li><a class="dropdown-item" href="login.html"><i class="fa fa-sign-in"></i> Login</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
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
                <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#">
                    Funda Ecom
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav me-20 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html"><b>Home</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html"><b>About Us</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html"><b>Products</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="brands.html"><b>Brands</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recipe.html"><b>Recipe</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html"><b>Contact</b></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Accessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Appliances</a>
                        </li> -->
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
    <form action="/examples/actions/confirmation.php" method="post">
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
				<input type="text" class="form-control" name="username" placeholder="Username" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-paper-plane"></i>
					</span>                    
				</div>
				<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-lock"></i>
					</span>                    
				</div>
				<input type="text" class="form-control" name="password" placeholder="Password" required="required">
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
				<input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
			</div>
        </div>
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="login.html">Login here</a></div>
</div>

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
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<!-- -------------------------------------------------------------------------------------------------------------------- -->
<?php

include 'components/connect.php';

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
   $mobile = $_POST['mobile'];

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select_user->execute([$email,]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $message[] = 'Email <span style="color:red">Already</span> Exists!';
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm Password <span style="color:red">Not Matched</span>!';
      }else{
         $insert_user = $conn->prepare("INSERT INTO `users`(name, email, password, mobile) VALUES(?,?,?,?)");
         $insert_user->execute([$name, $email, $cpass, $mobile]);
         $message[] = 'Registered <span style="color:green">Successfully</span>, Login Now Please!';
      }
   }

   $select_user_for_cart = $conn->prepare("SELECT * FROM `users` ORDER BY user_id DESC LIMIT 1");
   $select_user_for_cart->execute();
   if($select_user_for_cart->rowCount()>0){
      while($fetch_select_user_for_cart = $select_user_for_cart->fetch(PDO::FETCH_ASSOC)){
         $user_id = $fetch_select_user_for_cart['user_id'];
         $cart_array = $_SESSION['cart'];
         for( $i = 0 ; $i < count($cart_array) ; $i++){
            $sql = $conn->prepare("INSERT INTO cart (user_id , product_id , name , price , image , quantity)
                                    VALUES (?,?,?,?,?,?)");
            $sql->execute([$user_id , $cart_array[$i][0],$cart_array[$i][1],$cart_array[$i][2],$cart_array[$i][3],$cart_array[$i][4]]);
         }
         $fav_array = $_SESSION['cart'];
         for( $i = 0 ; $i < count($fav_array) ; $i++){
            $stm = $conn->prepare("INSERT INTO favorite (user_id , product_id)
                                    VALUES (?,?)");
            $stm->execute([$user_id , $fav_array[$i][0]]);
         }
      }
   }

   $_SESSION['cart']=[];
   $_SESSION['fav']=[];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="icon" type="image/x-icon" href="./images/logo.png">

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="css/style.css"> -->
   <style>
   <?php 
include("css/style.css");

?>
</style>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="name" required placeholder="enter your username" maxlength="20"  class="box">
      <input type="email" name="email" required placeholder="enter your email" maxlength="50"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" required placeholder="enter your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="cpass" required placeholder="confirm your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="number" name="mobile" required placeholder="enter your number" maxlength="20"  class="box">
      <input type="submit" value="register now" class="btn" name="submit">
      <p>already have an account?</p>
      <a href="user_login.php" class="option-btn">login now</a>
   </form>

</section>













<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>