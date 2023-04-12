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
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/contact.css">

    <title>About</title>   
</head>

<body>
<!-- -------------------------Header-------------------------------- -->
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

<!-- -------------------------About-------------------------------- -->
<!-- <section>
    <div class="about" >
        <div class="row">
            <div class="content">
                <h2>Who we are?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vero voluptatem deleniti reprehenderit, et, numquam accusamus totam recusandae dicta cupiditate cum facere minima commodi. Qui voluptates delectus quia, consequatur sed necessitatibus dolorum eligendi possimus magnam aliquam dolores sit ipsa esse hic ratione nihil ut soluta natus doloribus voluptatem ipsum? Molestias!</p>
                <a href="#" class="btn">learn more</a>
            </div>
            <div class="image">
                <img src="#" alt="">
            </div>
        </div>
        <div class="row">
          <div class="image">
            <img src="#" alt="">
        </div>
          <div class="content" id="our-vision">
              <h2>Our vision</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vero voluptatem deleniti reprehenderit, et, numquam accusamus totam recusandae dicta cupiditate cum facere minima commodi. Qui voluptates delectus quia, consequatur sed necessitatibus dolorum eligendi possimus magnam aliquam dolores sit ipsa esse hic ratione nihil ut soluta natus doloribus voluptatem ipsum? Molestias!</p>
              <a href="#" class="btn">learn more</a>
          </div>
          
      </div>
    </div>
</section> -->
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
        
<section>
    <div class="about" >
        <div class="row">
            <div class="content">
                <h2>Who we are?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vero voluptatem deleniti reprehenderit, et, numquam accusamus totam recusandae dicta cupiditate cum facere minima commodi. Qui voluptates delectus quia, consequatur sed necessitatibus dolorum eligendi possimus magnam aliquam dolores sit ipsa esse hic ratione nihil ut soluta natus doloribus voluptatem ipsum? Molestias!</p>
                <a href="#" class="btn">learn more</a>
            </div>
            <div class="image">
                <img src="#" alt="">
            </div>
        </div>
        <div class="row">
          <div class="image">
            <img src="#" alt="">
        </div>
          <div class="content" id="our-vision">
              <h2>Our vision</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vero voluptatem deleniti reprehenderit, et, numquam accusamus totam recusandae dicta cupiditate cum facere minima commodi. Qui voluptates delectus quia, consequatur sed necessitatibus dolorum eligendi possimus magnam aliquam dolores sit ipsa esse hic ratione nihil ut soluta natus doloribus voluptatem ipsum? Molestias!</p>
              <a href="#" class="btn">learn more</a>
          </div>
          
      </div>
    </div>
</section>

<div class="container-fluid bg-light bg-icon py-6">
<div class="container">
<div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<h1 class="display-5 mb-3">Our Features</h1>
<p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
</div>
<div class="row g-4">
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
<div class="bg-white text-center h-100 p-4 p-xl-5">
<img class="img-fluid mb-4" src="./Images/icon-1.png" alt="">
<h4 class="mb-3">Natural Process</h4>
<p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
<a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
</div>
</div>
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
<div class="bg-white text-center h-100 p-4 p-xl-5">
<img class="img-fluid mb-4" src="./Images/icon-2.png" alt="">
<h4 class="mb-3">Organic Products</h4>
<p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
<a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
</div>
</div>
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
<div class="bg-white text-center h-100 p-4 p-xl-5">
<img class="img-fluid mb-4" src="./Images/icon-3.png" alt="">
<h4 class="mb-3">Biologically Safe</h4>
<p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero dolor duo.</p>
<a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
</div>
</div>
</div>
</div>
</div>
<!-- -------------------------Services-------------------------------- -->

<!-- <div class="services pd">
    <div class="container">
      <h3 class="title">Services</h3>
      <div class="row text-center">
        <div class="col-md-3">
          <div class="square"><i class="fas fa-code"></i></div>
          <div class="serv">
            <h5>Clean Code</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="serv">
            <div class="square"><i class="fas fa-cogs"></i></div>
            <h5>Problem Solving</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="square"><i class="fas fa-globe"></i></div>
          <div class="serv">
            <h5>Best Domain</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="square"><i class="fas fa-user-shield"></i></div>
          <div class="serv">
            <h5>Secure Website</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- <section>
    <div class="row">
      <h2 class="section-heading">Our Services</h2>
    </div>
    <div class="row">
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <i class="fas fa-hammer"></i>
          </div>
          <h3>Service Heading</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
            consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <i class="fas fa-brush"></i>
          </div>
          <h3>Service Heading</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
            consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
      
      <div class="column">
        <div class="card">
          <div class="icon-wrapper">
            <i class="fas fa-plug"></i>
          </div>
          <h3>Service Heading</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
            consequatur necessitatibus eaque.
          </p>
        </div>
      </div>
    </div>
  </section> -->

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