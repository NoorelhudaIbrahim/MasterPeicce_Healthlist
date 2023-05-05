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

<!-- -------------------------product-------------------------------- --> 
<div class="catg-section">
    <div class="category">
      <div class="pop">
        <h4>We found <span>29</span> items for you!</h4>
        <div class="all-features">
          <label for="show">
            <div class="feature">
              <i class="fa-solid fa-grip"></i>
              <span>Show: 50</span>
              <i class="fa-solid fa-angle-down"></i>
            </div>
          </label>
          <input type="checkbox" id="show">
          <ul class="drop-down1">
            <li><a class=" a1 active" href="#">50</a></li>
            <li><a class=" a1 " href="#">100</a></li>
            <li><a class=" a1 " href="#">150</a></li>
            <li><a class=" a1 " href="#">200</a></li>
            <li><a class=" a1 " href="#">All</a></li>
          </ul>
          <label for="sort">
            <div class="feature">
              <i class="fa-solid fa-arrow-down-wide-short"></i>
              <span>Sort by: Featured</span>
              <i class="fa-solid fa-angle-down"></i>
            </div>
          </label>
          <input type="checkbox" id="sort">
          <ul class="drop-down2">
            <li><a class=" a2 active" href="#">Featured</a></li>
            <li><a class=" a2 " href="#">Price:Low To High</a></li>
            <li><a class=" a2 " href="#">Price:high To Low</a></li>
            <li><a class=" a2 " href="#">Release Date</a></li>
            <li><a class=" a2 " href="#">Avg Rating</a></li>
          </ul>
        </div>
      </div>
      <div class="prod-container">
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <span class="up hot">Hot</span>
          <img src="images/pic-1.png" alt="">
          <div class="text">
            <span class="tag">snak</span>
            <h3>Seeds of Change Organic Quinoa, Brown, &amp; Red Rice</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(4.0)</span>
              <p class="by">By <span>NestFood</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$28.85 <del>$32.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <span class="up sale">Sale</span>
          <img src="images/pic-2.png" alt="">
          <div class="text">
            <span class="tag">Hodo Foods</span>
            <h3>All Natural Italian-Style Chicken Meatballs</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(3.5)</span>
              <p class="by">By <span>Stouffer</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$52.85 <del>$55.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <span class="up new">New</span>
          <img src="images/pic-3.png" alt="">
          <div class="text">
            <span class="tag">snak</span>
            <h3>Angie’s Boomchickapop Sweet &amp; Salty Kettle Corn</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(4.0)</span>
              <p class="by">By <span>StarKist</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$48.85 <del>$$52.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <img src="images/pic-4.png" alt="">
          <div class="text">
            <span class="tag">Vegetables</span>
            <h3>Foster Farms Takeout Crispy Buffalo Wings</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(4.0)</span>
              <p class="by">By <span>NestFood</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$17.85 <del>$19.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <span class="up discount">-14%</span>
          <img src="images/pic-5.png" alt="">
          <div class="text">
            <span class="tag">Pet Foods</span>
            <h3>Blue Diamond Almonds Lightly Salted Vegetables</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(4.0)</span>
              <p class="by">By <span>NestFood</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$23.85 <del>$25.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <img src="images/pic-6.png" alt="">
          <div class="text">
            <span class="tag">Hodo Foods</span>
            <h3>Chobani Complete Vanilla Greek Yogurt</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(4.0)</span>
              <p class="by">By <span>NestFood</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$54.85 <del>$55.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <span class="up discount">-25%</span>
          <img src="images/product-7-1.jpeg" alt="">
          <div class="text">
            <span class="tag">Meats</span>
            <h3>Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(4.0)</span>
              <p class="by">By <span>NestFood</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$28.85 <del>$32.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <span class="up sale">Sale</span>
          <img src="images/product-8-1.jpeg" alt="">
          <div class="text">
            <span class="tag">snak</span>
            <h3>Encore Seafoods Stuffed Alaskan Salmon</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(4.0)</span>
              <p class="by">By <span>NestFood</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$35.85 <del>$37.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <span class="up hot">Hot</span>
          <img src="images/product-9-1.jpeg" alt="">
          <div class="text">
            <span class="tag">Coffes</span>
            <h3>Gorton’s Beer Battered Fish Fillets with soft paper</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(4.0)</span>
              <p class="by">By <span>Old El Paso</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$23.85 <del>$25.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <span class="up new">New</span>
          <img src="images/product-10-1.jpeg" alt="">
          <div class="text">
            <span class="tag">Cream</span>
            <h3>Haagen-Dazs Caramel Cone Ice Cream Ketchup</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(4.0)</span>
              <p class="by">By <span>Tyson</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$28.85 <del>32.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <span class="up hot">Hot</span>
          <img src="images/product-7-1.jpeg" alt="">
          <div class="text">
            <span class="tag">snak</span>
            <h3>Seeds of Change Organic Quinoa, Brown, &amp; Red Rice</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(4.0)</span>
              <p class="by">By <span>NestFood</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$28.85 <del>$32.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <span class="up sale">Sale</span>
          <img src="images/product-16-6.jpeg" alt="">
          <div class="text">
            <span class="tag">Hodo Foods</span>
            <h3>All Natural Italian-Style Chicken Meatballs</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(3.5)</span>
              <p class="by">By <span>Stouffer</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$52.85 <del>$55.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <span class="up new">New</span>
          <img src="images/product-13-2.jpeg" alt="">
          <div class="text">
            <span class="tag">snak</span>
            <h3>Angie’s Boomchickapop Sweet &amp; Salty Kettle Corn</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(4.0)</span>
              <p class="by">By <span>StarKist</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$48.85 <del>$$52.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <img src="images/product-16-6.jpeg" alt="">
          <div class="text">
            <span class="tag">Vegetables</span>
            <h3>Foster Farms Takeout Crispy Buffalo Wings</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(4.0)</span>
              <p class="by">By <span>NestFood</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$17.85 <del>$19.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <span class="up discount">-14%</span>
          <img src="images/pic-2.png" alt="">
          <div class="text">
            <span class="tag">Pet Foods</span>
            <h3>Blue Diamond Almonds Lightly Salted Vegetables</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(4.0)</span>
              <p class="by">By <span>NestFood</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$23.85 <del>$25.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="wishlist">
            <a class="heart" href="#"><i class="fa-regular fa-heart"></i></a>
            <a class="shuffle" href="#"><i class="fa-solid fa-shuffle"></i></a>
            <a class="eye" href="#"><i class="fa-regular fa-eye"></i></a>
          </div>
          <img src="images/pic-3.png" alt="">
          <div class="text">
            <span class="tag">Hodo Foods</span>
            <h3>Chobani Complete Vanilla Greek Yogurt</h3>
            <div class="rate">
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-solid fa-star"></i>
              <i class=" filled fa-regular fa-star"></i>
              <span class="number">(4.0)</span>
              <p class="by">By <span>NestFood</span></p>
            </div>
          </div>
          <div class="price">
            <h4>$54.85 <del>$55.8</del></h4>
            <div class="add">
              <a href="#">Add</a>
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="pagination">
        <ul class="pag-wrapper">
          <li><a href="#"><i class="fa-solid fa-arrow-left wide-arrow"></i></a></li>
          <li><a href="#">1</a></li>
          <li><a class="active" href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">...</a></li>
          <li><a href="#">6</a></li>
          <li><a href="#"><i class="fa-solid fa-arrow-right wide-arrow"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="aside">
      <div class="cat1">
        <h2>Category</h2>
        <div class="products">
          <img src="images/category-1.svg" alt="">
          <span class="text">Milk &amp;<br>Dairies</span>
          <span class="number">30</span>
        </div>
        <div class="products">
          <img src="images/category-2.svg" alt="">
          <span class="text">Clothing</span>
          <span class="number">30</span>
        </div>
        <div class="products">
          <img src="images/category-3.svg" alt="">
          <span class="text">Pets Foods</span>
          <span class="number">10</span>
        </div>
        <div class="products">
          <img src="images/category-4.svg" alt="">
          <span class="text">Backing<br>material</span>
          <span class="number">8</span>
        </div>
        <div class="products">
          <img src="images/category-5.svg" alt="">
          <span class="text">Fresh Fruit</span>
          <span class="number">0</span>
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

