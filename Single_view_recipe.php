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
    <!-- ------------------icon with title--------------------- -->
    <link rel="icon" type="image/x-icon" href="./Images/logotitle.png">
    <!-- ------------------googlefont--------------------- -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Cinzel+Decorative:wght@700&family=Mr+Dafoe&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <!-- ------------------external css--------------------- -->
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/home.css">
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
                                <li><a class="dropdown-item" href="user_register.php"><i class="fa fa-sign-up"></i> Register</a></li>
                                <li><a class="dropdown-item" href="user_login.php"><i class="fa fa-sign-in"></i> Login</a></li>
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
                            <a class="nav-link" href="Contact.php"><b>Contact</b></a>
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
    <!-- -------------------------content-------------------------------- -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
<div class="container">
<h1 class="display-3 mb-3  slideInDown">About Us</h1>
<nav aria-label="breadcrumb animated slideInDown">
<ol class="breadcrumb mb-0">
<li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
<li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
<li class="breadcrumb-item text-dark active" aria-current="page">Contact Us</li>
</ol>
</nav>
</div>
</div>

    <section class="recipedetail">
<div class="container">
<div class="row">
<div class="col-xs-12">                      
<div class="row">
<div class="col-xs-12 col-sm-9 col-lg-10">
<div class="row recipes">
<div class="col-xs-12 white">
<div class="row no-gutter">
<div class="col-xs-12 col-md-6 col-lg-6 CGBlogDetailImage noprint">
<a class="lightbox-link" href="https://ik.imagekit.io/webtactics/changs/tr:w-750,h-1000/cgblog/id364/Spicy-Grilled-Salmon-with-Herb-Noodles_HD-6.jpg" data-lightbox="Spicy grilled salmon with herb noodles" data-title="Spicy grilled salmon with herb noodles"><img class="lightbox-image" src="https://ik.imagekit.io/webtactics/changs/tr:w-750,h-1000/cgblog/id364/Spicy-Grilled-Salmon-with-Herb-Noodles_HD-6.jpg" alt="Spicy grilled salmon with herb noodles" title="Spicy grilled salmon with herb noodles"><span class="enlarge">Enlarge</span></a>
</div>
<div class="col-xs-12 col-md-6 col-lg-6">
<script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfHideImages = 0;var pfImageDisplayStyle = 'block';var pfDisablePDF = 0;var pfDisableEmail = 1;var pfDisablePrint = 0;var pfCustomCSS = '';var pfBtVersion='1';(function(){var js, pf;pf = document.createElement('script');pf.type = 'text/javascript';if ('https:' === document.location.protocol){js='https://pf-cdn.printfriendly.com/ssl/main.js'}else{js='http://cdn.printfriendly.com/printfriendly.js'}pf.src=js;document.getElementsByTagName('head')[0].appendChild(pf)})();</script>
<div class="pull-right printfriendlybox"><a href="http://www.printfriendly.com" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF"><img src="https://www.changs.com/uploads/images/assets/print.png" alt="Print" title="Print"></a>
</div>
<div class="recipesdetailcontentright">
<div class="recipedetailtitle">
<h2>Recipes</h2>
<h1>Spicy grilled salmon with herb noodles</h1>
</div>
<div class="row">
<div class="col-xs-12 col-lg-11">
<div class="patternheadlinerecipedetail"></div>
<div class="recipedetailserveprepdifficultbox">
  <div class="recipedetailserveprepdifficult">
      <span class="reddetail">Serves:</span>4  </div>
  <div class="CGBlogDetailSummary">
    <span class="reddetail">Preparation time:</span>15 minutes  </div>
  <div class="CGBlogDetailSummary">
    <span class="reddetail">Cooking time:</span>20 minutes  </div>
</div>
<div class="CGBlogDetailContent recipelist">
<h3>Ingredients:</h3>
<h4>For the herb noodles:</h4>
<ul>
<li>1 x <a title="Chang's Thai Style Rice Noodles" href="products/Changs-Thai-Style-Rice-Noodles/" target="_blank" rel="noopener">Chang's Thai Style Rice Noodles</a></li>
<li>100g of mint leaves</li>
<li>100g of coriander leaves</li>
<li>100g of herb parsley</li>
<li>6 garlic cloves, finely minced</li>
<li>1 tablespoon of lemon juice</li>
<li>Sesame seeds</li>
<li><a title="Chang's Pure Sesame Oil" href="products/Changs-Pure-Sesame-Oil/" target="_blank" rel="noopener">Chang's Pure Sesame Oil</a></li>
</ul>
<h4>For the grilled salmon:</h4>
<ul>
<li>600g salmon, cubed</li>
<li>Skewers, pre-soaked in water</li>
<li>2 tablespoons of crushed chilli/chilli jam</li>
<li>½ teaspoon white vinegar</li>
<li>3 tablespoons of <a title="Chang's Original Fish Sauce" href="products/Changs-Original-Fish-Sauce-280ml/" target="_blank" rel="noopener">Chang's Original Fish Sauce</a></li>
<li>3 tablespoons of <a title="Chang's Original Oyster Sauce" href="products/Changs-Original-Oyster-Sauce-150ml/" target="_blank" rel="noopener">Chang's Original Oyster Sauce</a></li>
<li>1 tablespoon of chilli flakes</li>
<li><a title="Chang's Pure Sesame Oil" href="products/Changs-Pure-Sesame-Oil/" target="_blank" rel="noopener">Chang's Pure Sesame Oil</a></li>
</ul></div>
</div>
</div>
</div>
  </div>
</div>

<div class="row">
<div class="col-xs-12 white">
<div class="CGBlogMethod">
<h3>Method:</h3>
<ol>
<li>Marinate the salmon pieces with the ingredients listed for the grilled salmon and set them aside to marinate. Make the marinade in excess as they will be used to make the sauce later.</li>
<li>Cook Chang’s Pad Thai rice noodles as per the packet’s instructions. Run under cold water and set aside to drain.</li>
<li>Roughly chop the coriander, mint and parsley and add them to a blender jar. Add 3 minced garlic cloves, and lemon juice and blend it into a smooth paste. Add a small amount of water if required.</li>
<li>Heat 2 tablespoons of sesame oil in a wok and fry off the remaining minced garlic, then add the herb paste and fry off until it is moisture-free. It will be quite thick in consistency but should not be too sticky because of the oil in the wok. Adjust the oil according to this.</li>
<li>Add the cooked and drained noodles and mix to coat the noodles completely. Finish off with another tablespoon of sesame oil and sprinkle with sesame seeds.</li>
<li>Skewer the marinated salmon pieces using pre-soaked skewers (to prevent them from burning). Lightly grease the grill pan with oil and grill the skewers on each side for 1 min max for juicy and just-cooked salmon. Brush the sides with the marinade to prevent them from drying out.</li>
<li>In the same pan, fry off the leftover marinade until it is thick in consistency to make the sauce.</li>
<li>Assemble the noodles, the skewers and the sauce and enjoy!</li>
</ol>
<p><em>The recipe can be adapted to be gluten-free.</em></p>
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
