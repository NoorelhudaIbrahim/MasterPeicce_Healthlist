<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Healthlist">
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
    <title>Healthlist</title>
  
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700&display=swap');

:root {
    --accent-color: #0aad0a;
    --bg-color: #f0f0f0;
    --box-shadow-color: #f0f0f0;
    --light-bg-color: #f5f5f5;
    --text-color: #e0e0e0;
  }
  
  * {
    background: var(--bg-color) !important;
    font-family: 'Nunito', sans-serif !important;
  }
  
  .clearfix:before,
  .clearfix:after {
    content: ' ';
    display: table;
  }
  
  .clearfix:after {
    clear: both;
  }
  
  .page-404 .outer {
    display: table;
    height: 100%;
    position: relative;
    top: 263px;
    width: 100%;
  }
  
  .page-404 .outer .middle .inner {
    margin-left: auto;
    margin-right: auto;
    width: 300px;
  }
  
  .page-404 .outer .middle .inner .inner-circle {
    background-color: #ffffff;
    border-radius: 50%;
    height: 300px;
  }
  
  .page-404 .outer .middle .inner .inner-circle:hover i {
    background-color: var(--light-bg-color);
    box-shadow: 0 0 0 15px var(--accent-color);
    color: var(--accent-color) !important;
  }
  
  .page-404 .outer .middle .inner .inner-circle:hover span {
    color: var(--accent-color);
  }
  
  .page-404 .outer .middle .inner .inner-circle i {
    background-color: var(--accent-color);
    border-radius: 50%;
    box-shadow: 0 0 0 15px var(--box-shadow-color);
    color: var(--text-color) !important;
    float: right;
    font-size: 5em;
    height: 1.6em;
    line-height: 1em;
    margin-right: -.5em;
    margin-top: -.7em;
    padding: 20px;
    text-align: center;
    width: 1.6em;
    -webkit-transition: all .4s;
    transition: all .4s;
  }
  
  .page-404 .outer .middle .inner .inner-circle span {
    color: var(--text-color);
    display: block;
    font-size: 11em;
    font-weight: 700;
    line-height: 1.2em;
    -webkit-transition: all .4s;
    transition: all .4s;
    text-align: center;
  }
  
  .page-404 .outer .middle .inner .inner-detail {
    color: #999999;
    display: block;
    line-height: 1.4em;
    margin-bottom: 10px;
    text-align: center;
  }
  
  .page-404 .outer .middle .inner .inner-status {
    color: var(--accent-color);
    display: block;
    font-size: 20px;
    margin-bottom: 5px;
    margin-top: 20px;
    text-align: center;
  }
</style>

<body>

<!-- -------------------------404page not found-------------------------------- --> 
<section>
    <div class="container d-flex flex-column">
      <!-- row -->
      <div class="row min-vh-100 justify-content-center align-items-center">
        <!-- col -->
        <div class="offset-lg-1 col-lg-10  py-8 py-xl-0">
          <div class=" mb-10 mb-xxl-0">
            <!-- img -->
            <a href="./Home.php"> <img src="./Images/logo1.png" style=" width:14rem" alt=""></a>
          </div>
          <div class="row justify-content-center align-items-center">
            <!-- content -->
            <div class="col-md-6">
              <div class=" mb-6 mb-lg-0">
                <h1>Something’s wrong here...</h1>
                <p class="mb-8">We’re sorry, the page you have looked for does not exist in our website!<br>
                Maybe go to our home page or try to use a search?</p>
  
                 <!-- btn -->
                <a href="./Home.php" class="btn btn-success ms-2" style="background-color: #0aad0a !important;">Back to home</a>
              </div>

            </div>
            <div class="col-md-6">
              <div>
                 <!-- img -->
                <img src="./Images/error_img.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- -------------------------404page not found-------------------------------- --> 

</body>
</html>
