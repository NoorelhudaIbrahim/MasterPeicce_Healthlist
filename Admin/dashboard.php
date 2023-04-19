<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}




if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_admins = $conn->prepare("DELETE FROM `admins` WHERE id = ?");
   $delete_admins->execute([$delete_id]);
   header('location:dashboard.php');
}




if(isset($_POST['new-admin']) && isset($_POST['password-newadmin'])){

    $name = $_POST['new-admin'];
    $name = htmlspecialchars($name, ENT_QUOTES);
    $pass = sha1($_POST['password-newadmin']);
    $pass = htmlspecialchars($pass, ENT_QUOTES);
    $cpass = sha1($_POST['co-password-newadmin']);
    $cpass = htmlspecialchars($cpass, ENT_QUOTES);
 
    $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE name = ?");
    $select_admin->execute([$name]);
     
    if($select_admin->rowCount() > 0){
        $message[] = 'username already exist!';
    }else{
        if($pass != $cpass){
            $message[] = 'confirm password not matched!';
        }else{
            $insert_admin = $conn->prepare("INSERT INTO `admins`(name, password) VALUES(?,?)");
            $insert_admin->execute([$name, $cpass]);
            $message[] = 'new admin registered successfully!';
        }
    }
 
 }



 if(isset($_POST['name']) && isset($_POST['old_pass']) && isset($_POST['new_pass']) && isset($_POST['confirm_pass']) ){

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
 
    $update_profile_name = $conn->prepare("UPDATE `admins` SET name = ? WHERE id = ?");
    $update_profile_name->execute([$name, $admin_id]);
 
    $empty_pass = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
    $prev_pass = $_POST['prev_pass'];
    $old_pass = sha1($_POST['old_pass']);
    $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING);
    $new_pass = sha1($_POST['new_pass']);
    $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
    $confirm_pass = sha1($_POST['confirm_pass']);
    $confirm_pass = filter_var($confirm_pass, FILTER_SANITIZE_STRING);
 
    if($old_pass == $empty_pass){
       $message[] = 'please enter old password!';
    }elseif($old_pass != $prev_pass){
       $message[] = 'old password not matched!';
    }elseif($new_pass != $confirm_pass){
       $message[] = 'confirm password not matched!';
    }else{
       if($new_pass != $empty_pass){
          $update_admin_pass = $conn->prepare("UPDATE `admins` SET password = ? WHERE id = ?");
          $update_admin_pass->execute([$confirm_pass, $admin_id]);
          $message[] = 'password updated successfully!';
       }else{
          $message[] = 'please enter a new password!';
       }
    }
    
 }

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Healthlist</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../Images/logotitle.png">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/dashboardstyle.css" rel="stylesheet">

    <style>
        <?php include("../css/dashboardstyle.css") ?>

        .fa-bars:before {
            content: "\f0c9";
        }
        .btn-primary {
            background-color: #189116;
            border-color: rgb(0, 0, 69);
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            height: 100vh;
            overflow-y: auto;
            transition: 0.5s;
            z-index: 999;        }
        input {
            background-color: #fff !important;
        }
        .bg-secondary {
            background-color: #189116 !important;
        }
        .bg-success{
            background-color:#189116!important;
        }
    </style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark" style="height: 100%;">
                <a href="index.html" class="navbar-brand mx-4 mb-3" style="color:black !important">
                <img src="../Images/logo0.png"  width="150px" height="55px" alt="0">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="ms-3">
                        <h4 class="mb-0 text-decoration-underline ms-4">
                        <?php $select_accounts = $conn->prepare("SELECT * FROM `admins` WHERE id = '$admin_id'");
                                $select_accounts->execute();
                                $admin_name = $select_accounts->fetch();
                                echo strtoupper($admin_name['name']);
                        ?>
                        </h4>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="products.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Products</a>
                    <a href="Recipe.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Recipes</a>
                    <a href="Brands.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Brands</a>
                    <a href="sold.php" class="nav-item nav-link"><i class="fa-sharp fa-solid fa-store-slash me-2"></i>Sold</a>
                    <a href="sales.php" class="nav-item nav-link"><i class="fa-brands fa-adversal me-2"></i>Sales</a>
                    <a href="category.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Category</a>
                    <a href="orders.php" class="nav-item nav-link"><i class="fa-solid fa-truck me-2"></i>Orders</a>
                    <a href="admin.php" class="nav-item nav-link"><i class="fa-sharp fa-solid fa-user-tie me-2"></i>Admins</a>
                    <a href="users.php" class="nav-item nav-link"><i class="fa-solid fa-user me-2"></i>Users</a>
                    <a href="../components/admin_logout.php" class="nav-item nav-link"><i class="fa-sharp fa-solid fa-right-from-bracket me-2"></i>Logout</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">

            <div class="container-fluid px-4">
                <h3 class="mt-5  text-center fw-normal" style="color: rgb(92, 92, 92);">Admin Panel-Overview</h3>
            <div class="row mt-7">
                   <div class="col-xl-3 col-md-6 ">

                     <div class="card bg-success text-white mb-4 shadow-lg">
                        <div class="card-body text-white">Total Categories
                        <?php $select_category = $conn->prepare("SELECT COUNT(*) FROM `category`");
                                $select_category->execute();
                                $result = $select_category->fetchColumn();
                                echo '<h4 class="mb-0">'. $result.'</h4>';
                        ?>
                           
                        </div> 

                        <div class="card-footer d-flex align-items-center justify-content-between">
                             <a class="small text-white stretched-link" href="category.php">View Details</a>
                             <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                        </div>
                        </div>
                    </div>

                   


                <div class="col-xl-3 col-md-6">

                    <div class="card bg-success text-white mb-4 shadow-lg">
                    <div class="card-body text-white">Total Products
                    <?php $select_product = $conn->prepare("SELECT COUNT(*) FROM `products`");
                            $select_product->execute();
                            $result = $select_product->fetchColumn();
                            echo '<h4 class="mb-0">'. $result.'</h4>';
                        ?>
                    </div> 
                    <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="products.php">View Details</a>
                            <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                    </div>
                    </div>
                    </div>

                    <div class="col-xl-3 col-md-6">

                    <div class="card bg-success text-white mb-4 shadow-lg">
                    <div class="card-body text-white">Total Brands
                    <?php $select_brand = $conn->prepare("SELECT COUNT(*) FROM `brands`");
                            $select_brand->execute();
                            $result = $select_brand->fetchColumn();
                            echo '<h4 class="mb-0">'. $result.'</h4>';
                        ?>   
                        </div> 
                    <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="Brands.php">View Details</a>
                            <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                    </div>
                    </div>
                    </div>

                    <div class="col-xl-3 col-md-6">

                    <div class="card bg-success text-white mb-4 shadow-lg">
                    <div class="card-body text-white">Total Recipes
                    <?php $select_recipe = $conn->prepare("SELECT COUNT(*) FROM `recipes`");
                            $select_recipe->execute();
                            $result = $select_recipe->fetchColumn();
                            echo '<h4 class="mb-0">'. $result.'</h4>';
                        ?>      </div> 
                    <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="Recipe.php">View Details</a>
                            <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                    </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-md-6 ">

                     <div class="card bg-success text-white mb-4 shadow-lg">
                        <div class="card-body text-white">Total Users
                        <?php $select_user = $conn->prepare("SELECT COUNT(*) FROM `users`");
                                $select_user->execute();
                                $result = $select_user->fetchColumn();
                                echo '<h4 class="mb-0">'. $result.'</h4>';
                            ?>
                        </div> 
                        <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="products.php">View Details</a>
                                <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                        </div>
                        </div>
                </div>          
        

                <div class="col-xl-3 col-md-6 ">

                    <div class="card bg-success text-white mb-4 shadow-lg">
                    <div class="card-body text-white">Total Orders
                    <?php $select_order = $conn->prepare("SELECT COUNT(*) FROM `orders`");
                            $select_order->execute();
                            $result = $select_order->fetchColumn();
                            echo '<h4 class="mb-0">'. $result.'</h4>';
                        ?>
                    </div> 
                    <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="products.php">View Details</a>
                            <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                    </div>
                    </div>
                    </div>          
                    </div>
                    


            
            <!-- Top Sales Products -->
            <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4" style="background-color: #fff !important; ">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h5 class="mb-0" style="color: rgb(92, 92, 92);">Top Sales Products</h5>
            </div>
            <div class="table-responsive">
                <?php
                $sql = "SELECT product_id, SUM(quantity) AS total_sales FROM order_details GROUP BY product_id ORDER BY total_sales DESC LIMIT 10";

                // Execute the query and fetch the results
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // Store the product details in an array
                $product_details = array();
                foreach ($products as $product) {
                    $product_id = $product['product_id'];
                    $total_sales = $product['total_sales'];
                    $sql = "SELECT * FROM products WHERE id = :product_id";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':product_id', $product_id);
                    $stmt->execute();
                    $product_details[] = array_merge($stmt->fetch(PDO::FETCH_ASSOC), array('total_sales' => $total_sales));
                }

                // Display the top-selling products in a table
                echo '<table class="table">';
                echo "<tr><th>Product ID</th><th>Product Name</th><th>Price</th><th>Total Sales</th></tr>";
                foreach ($product_details as $product) {
                    echo "<tr>";
                    echo "<td>" . $product['id'] . "</td>";
                    echo "<td>" . $product['name'] . "</td>";
                    echo "<td>" . $product['price'] . "</td>";
                    echo "<td>" . $product['total_sales'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>
        </div>
    </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>