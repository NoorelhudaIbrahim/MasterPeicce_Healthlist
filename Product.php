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
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/shop.css">
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
                                <a class="nav-link" href="cart.html">
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
<!-- -------------------------product-------------------------------- --> 
<!-- <div class="row">
    <div class="col-lg-3 mb-lg-0 mb-2">
        <p>
            <a class="btn btn-primary w-100 d-flex align-items-center justify-content-between"
                data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                aria-controls="collapseExample">
                <span class="fas fa-bars"><span class="ps-3">All department</span></span>
                <span class="fas fa-chevron-down"></span>
            </a>
        </p>
        <div class="collapse show border" id="collapseExample">
            <ul class="list-unstyled">
                <li><a class="dropdown-item" href="#">Top products</a></li>
                <li><a class="dropdown-item" href="#">Flour</a></li>
                <li><a class="dropdown-item" href="#">Bread</a></li>
                <li><a class="dropdown-item" href="#">Chocolate & candies</a></li>
                <li><a class="dropdown-item" href="#">Diary free</a></li>
                <li><a class="dropdown-item" href="#">Gluten free</a></li>
                <li><a class="dropdown-item" href="#">Vegan</a></li>
                <li><a class="dropdown-item" href="#">Organic</a></li>
                <li><a class="dropdown-item" href="#">Frozen food</a></li>

            </ul>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="d-lg-flex">
            <div class="d-lg-flex align-items-center border">
                <div class="dropdown w-100 my-lg-0 my-2">
                    <button class="btn btn-secondary d-flex justify-content-between align-items-center"
                        type="button" id="dropdownMenu" data-bs-toggle="dropdown" aria-expanded="true">
                        <span class=" w-100 d-flex align-items-center">
                            <span class=" fw-lighter pe-2">ALL</span><span class="fw-lighter pe-3">
                                Categories</span>
                            <span class="fas fa-chevron-down ms-auto"></span>
                        </span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                        <li><a class="dropdown-item" href="#">Gluten free</a></li>
                        <li><a class="dropdown-item" href="#">Organic</a></li>
                        <li><a class="dropdown-item" href="#">Diary free</a></li>
                        <li><a class="dropdown-item" href="#">Desert</a></li>
                    </ul>
                </div>
                <div class="d-flex align-items-center w-100 h-100 ps-lg-0 ps-sm-3">
                    <input class=" ps-md-0 ps-3" type="text" placeholder="what do you need?">
                    <div class="btn btn-primary d-flex align-items-center justify-content-center"> SEARCH</div>
                </div>
            </div>
           
        </div> -->
        <!-- <div class=" d-lg-flex flex-lg-row d-flex flex-column-reverse bg-light mt-5">
            <div class="p-5" id="2">
                <p class="p-green">FRUIT FRESH</p>
                <P class="fs-4 fw-bold">Vegetable</P>
                <p class="fs-4 fw-bold">100% Organic</p>
                <p class="text-muted mb-4">Free Pickup and Delivery Available</p>
                <div class="btn btn-success px-4">SHOP NOW</div>
            </div>
            <div id="1">
                <img src="https://www.freepnglogos.com/uploads/vegetables-png/vegetables-about-our-philosophy-super-healthy-kids-23.png"
                    class="w-75 h-75" alt="">
            </div>
        </div> -->
    <!-- </div>
</div>
</div> -->
<div class="container-xxl py-5">
<div class="container">
<div class="row g-0 gx-5 align-items-end">
<div class="col-lg-6">
<div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<h1 class="display-5 mb-3">Our Products</h1>
<p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
</div>
</div>
<div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInRight;">
<ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
<li class="nav-item me-2">
<a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Vegetable</a>
</li>
<li class="nav-item me-2">
<a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Fruits </a>
</li>
<li class="nav-item me-0">
<a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Fresh</a>
</li>
</ul>
</div>
</div>
<div class="tab-content">
<div id="tab-1" class="tab-pane fade show p-0 active">
<div class="row g-4">
<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
 <small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-2.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-3.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-4.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-5.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-6.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
 </small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-7.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-8.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
</div>
</div>
</div>
<div id="tab-2" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-2.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-3.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-4.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-5.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-6.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
 <div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-7.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-8.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
 </div>
</div>
</div>
<div class="col-12 text-center">
<a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
</div>
</div>
</div>
<div id="tab-3" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-2.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-3.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-4.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-5.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
 </div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-6.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-7.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="product-item">
<div class="position-relative bg-light overflow-hidden">
<img class="img-fluid w-100" src="img/product-8.jpg" alt="">
<div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
</div>
<div class="text-center p-4">
<a class="d-block h5 mb-2" href="">Fresh Tomato</a>
<span class="text-primary me-1">$19.00</span>
<span class="text-body text-decoration-line-through">$29.00</span>
</div>
<div class="d-flex border-top">
<small class="w-50 text-center border-end py-2">
<a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
</small>
<small class="w-50 text-center py-2">
<a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
</small>
</div>
</div>
</div>
<div class="col-12 text-center">
<a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
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
