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
    <link rel="stylesheet" href="CSS/cart.css">
    <title>Sign In</title>   
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


<!-- -------------------------cart-------------------------------- --> 


<div class="py-3 py-md-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="shopping-cart">

                    <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Products</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Price</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Quantity</h4>
                            </div>
                            <div class="col-md-2">
                                <h4>Remove</h4>
                            </div>
                        </div>
                    </div>

                    <div class="cart-item">
                        <div class="row">
                            <div class="col-md-6 my-auto">
                                <a href="">
                                    <label class="product-name ">
                                        <img src="#" style="width: 50px; height: 50px" alt="">
                                        product1
                                    </label>
                                </a>
                            </div>
                            <div class="col-md-2 my-auto">
                                <label class="price">$ </label>
                            </div>
                            <div class="col-md-2 col-7 my-auto">
                                <div class="quantity">
                                    <div class="input-group">
                                        <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                        <input type="text" value="1" class="input-quantity" />
                                        <span class="btn btn1"><i class="fa fa-plus"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-5 my-auto">
                                <div class="remove">
                                    <a href="" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Remove
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="row">
                            <div class="col-md-6 my-auto">
                                <a href="">
                                    <label class="product-name">
                                        <img src="#" style="width: 50px; height: 50px" alt="">
                                        product2
                                    </label>
                                </a>
                            </div>
                            <div class="col-md-2 my-auto">
                                <label class="price">$ </label>
                            </div>
                            <div class="col-md-2 col-7 my-auto">
                                <div class="quantity">
                                    <div class="input-group">
                                        <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                        <input type="text" value="1" class="input-quantity" />
                                        <span class="btn btn1"><i class="fa fa-plus"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-5 my-auto">
                                <div class="remove">
                                    <a href="" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Remove
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="row">
                            <div class="col-md-6 my-auto">
                                <a href="">
                                    <label class="product-name">
                                        <img src="#" style="width: 50px; height: 50px" alt="">
                                        product3
                                    </label>
                                </a>
                            </div>
                            <div class="col-md-2 my-auto">
                                <label class="price">$ </label>
                            </div>
                            <div class="col-md-2 col-7 my-auto">
                                <div class="quantity">
                                    <div class="input-group">
                                        <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                        <input type="text" value="1" class="input-quantity" />
                                        <span class="btn btn1"><i class="fa fa-plus"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-5 my-auto">
                                <div class="remove">
                                    <a href="" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> Remove
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                </div>
            </div>
        </div>

    </div>
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



<!-- ------------------------------------------------------------------------------------------------------------------------------ -->



<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:user_login.php');
};

if(isset($_POST['delete'])){
   $cart_id = $_POST['cart_id'];
   $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE id = ?");
   $delete_cart_item->execute([$cart_id]);
}

if(isset($_GET['delete_all'])){
   $delete_cart_item = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
   $delete_cart_item->execute([$user_id]);
   header('location:cart.php');
}

if(isset($_POST['update_qty'])){
   $cart_id = $_POST['cart_id'];
   $qty = $_POST['quantity'];
   $update_qty = $conn->prepare("UPDATE `cart` SET quantity = ? WHERE id = ?");
   $update_qty->execute([$qty, $cart_id]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="icon" type="image/x-icon" href="./images/logo.png">
   <!-- <link rel="stylesheet" href="css/style.css"> -->
   <style>
   <?php 
include("css/style.css");

?>
</style>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="products shopping-cart">

<h3 class="heading">shopping cart</h3>

<div class="box-container">

<?php
   $total_price = 0;
   $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
   $select_cart->execute([$user_id]);
   if($select_cart->rowCount() > 0){
      while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
?>
<form action="" method="post" class="box">
   <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">

   <a href="quick_view.php?pid=<?= $fetch_cart['product_id']; ?>" class="fas fa-eye"></a>
   <img src="uploaded_img/<?= $fetch_cart['image']; ?>" alt="">
   <div class="name"><?= $fetch_cart['name']; ?></div>

   
   <div class="flex">
      <?php
      $product_cart_id = $fetch_cart['product_id'];
      $select_product = $conn->prepare("SELECT * FROM `products` WHERE product_id = $product_cart_id");
      $select_product->execute();
      if($select_product->rowCount() > 0){

         while($fetch_product = $select_product->fetch(PDO::FETCH_ASSOC)){
            $x = 0;
         
         if ($fetch_product['is_sale'] == 1){ ?>

         <div class="price"><span><del style="text-decoration:line-through; color:silver">$<?= $fetch_product['price']; ?></del><ins style="color:rgb(0, 0, 69) !important;"> $<?=$fetch_product['price_discount'];?></ins> </span></div>

         <?php $x = $fetch_product['price_discount']; } else { ?>

         <div class="name" style="color:rgb(0, 0, 69) !important; padding:20px 0px">$<?= $fetch_product['price']; ?></div> <?php  $x = $fetch_product['price']; } ?>

         <?php if ($fetch_product['category_id'] != '9'){?>

         <input type="number" name="quantity" class="qty" min="1" max="<?= $fetch_product['store']-$fetch_product['sold'];?>" value="<?=$fetch_cart['quantity'];?>">
         <button type="submit" class="fas fa-edit" name="update_qty"></button>
         <?php } else { ?>
         <input type="hidden" name="quantity" value="1">
         <?php } } } ?> 
   </div>
   <div class="sub-total"> Sub Total : <span>$<?= $sub_total = ($x * $fetch_cart['quantity']); ?></span> </div>
   <input type="submit" value="delete item" onclick="return confirm('delete this from cart?');" class="delete-btn" name="delete">
</form>
<?php
$total_price += $sub_total;
   }
}else{
   echo '<p class="empty">your cart is empty</p>';
}
?>
</div>

<div class="cart-total">
   <p>Total Price : <span>$<?= $total_price; ?></span></p>
   <a href="shop.php" class="option-btn">continue shopping</a>
   <a href="cart.php?delete_all" class="delete-btn <?= ($total_price > 1)?'':'disabled'; ?>" onclick="return confirm('delete all from cart?');">delete all item</a>
   <a href="checkout.php" class="btn <?= ($total_price > 1)?'':'disabled'; ?>">proceed to checkout</a>
</div>

</section>













<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>



