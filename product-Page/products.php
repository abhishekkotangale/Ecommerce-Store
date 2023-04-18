<?php
  session_start();
  
  if(!isset($_SESSION['username'])){
    echo "you are logged out";
    header('location:../login_signup/login.php');
  }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="products.css">
</head>
<body>
    <header class="header">
        <nav class="container-fluid navbar navbar-expand-lg  ">
            <div class="container">
              <a class="navbar-brand"><i class="fas fa-crown"></i><span class="brand-name">Lifestyle Store</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="../setting_page/setting.html"><i class="fas fa-user-cog logo"></i>Setting</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-sign-out-alt logo"></i></i>Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
      
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Logout Successfully</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Please visit this site again
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-secondary" href="../login_signup/logout.php">OK</a>
            </div>
          </div>
        </div>
      </div>

      <main>
        <div class="container">
          <div class="jumbotron">
            <h1 class="display-3 text-center pb-3">
              Hello <?php echo $_SESSION['username']; ?>
              </br>
              Welcome to Our Lifestyle Store!
            </h1>
            <p class="text-center">We have the best cameras, watches and shirts for you. No need to hunt around, we
              have all in one place.”</p>
          </div>

          <div class="row text-center">
           
            <div class="border-start col-md-3 col-sm-6 mb-5">
              
                <img src="../img/1.jpg" alt="" class="img-thumbnail">
                  <div class="caption">
                    <h3>Canon EOS</h3>
                    <p>Price: Rs.36000.00</p>
                    <a class="btn btn-primary btn-block " href="success.html">Order Now</a>
                  </div>
              
            </div>

            <div class="border-start  col-md-3 col-sm-6 mb-5 ">
              <img src="../img/2.jpg" alt="" class="img-thumbnail">
              <div class="caption">
                <h3>Sony DSLR</h3>
                <p>Price: Rs.40000.00</p>
                <a class="btn btn-primary btn-block " href="success.html">Order Now</a>
              </div>
            </div>

            <div class="border-start col-md-3 col-sm-6 mb-5">
              <img src="../img/3.jpg" alt="" class="img-thumbnail">
              <div class="caption">
                <h3>Sony DSLR</h3>
                <p>Price: Rs.50000.00</p>
                <a class="btn btn-primary btn-block " href="success.html">Order Now</a>
              </div>
            </div>


            <div class="border-start  col-md-3 col-sm-6 mb-5">
              <img src="../img/4.jpg" alt="" class="img-thumbnail">
              <div class="caption">
                <h3>Olympus DSLR</h3>
                <p>Price: Rs.80000.00</p>
                <a class="btn btn-primary btn-block " href="success.html">Order Now</a>
              </div>
            </div>

            <div class="border-start  col-md-3 col-sm-6 mb-5">
              <img src="../img/5.jpg" alt="" class="img-thumbnail">
              <div class="caption">
                <h3>Nikon DSLR</h3>
                <p>Price: Rs.80000.00</p>
                <a class="btn btn-primary btn-block " href="success.html">Order Now</a>
              </div>
            </div>


           
              <div class="border-start  col-md-3 col-sm-6 mb-5">
                <img src="../img/6.jpg" alt="" class="img-thumbnail">
                <div class="caption">
                  <h3>Titan Modal #301</h3>
                  <p>Price: Rs.13000.00</p>
                  <a class="btn btn-primary btn-block " href="success.html">Order Now</a>
                </div>
              </div>
  
              <div class="border-start  col-md-3 col-sm-6 mb-5">
                <img src="../img/7.jpg" alt="" class="img-thumbnail">
                <div class="caption">
                  <h3>Titan Modal #201</h3>
                  <p>Price: Rs.3000.00</p>
                  <a class="btn btn-primary btn-block " href="success.html">Order Now</a>
                </div>
              </div>
  
              <div class=" border-start col-md-3 col-sm-6 mb-5">
                <img src="../img/8.jpg" alt="" class="img-thumbnail">
                <div class="caption">
                  <h3>CMT Milan</h3>
                  <p>Price: Rs.8000.00</p>
                  <a class="btn btn-primary btn-block " href="success.html">Order Now</a>
                </div>
              </div>
  
              <div class="border-start col-md-3 col-sm-6 mb-5">
                <img src="../img/9.jpg" alt="" class="img-thumbnail">
                <div class="caption">
                  <h3>Faber Luba #111</h3>
                  <p>Price: Rs.18000.00</p>
                  <a class="btn btn-primary btn-block " href="success.html">Order Now</a>
                </div>
              </div>
            

            <div class="border-start col-md-3 col-sm-6 mb-5">
              <img src="../img/10.jpg" alt="" class="img-thumbnail">
              <div class="caption">
                <h3>H&W</h3>
                <p>Price: Rs.800.00</p>
                <a class="btn btn-primary btn-block " href="success.html">Order Now</a>
              </div>
            </div>

            <div class="border-start col-md-3 col-sm-6 mb-5">
              <img src="../img/11.jpg" alt="" class="img-thumbnail">
              <div class="caption">
                <h3>Luis Phill</h3>
                <p>Price: Rs.1000.00</p>
                <a class="btn btn-primary btn-block " href="success.html">Order Now</a>
              </div>
            </div>

            <div class="border-start col-md-3 col-sm-6 mb-5">
              <img src="../img/12.jpg" alt="" class="img-thumbnail">
              <div class="caption">
                <h3>John Zok</h3>
                <p>Price: Rs.1500.00</p>
                <a class="btn btn-primary btn-block " href="success.html">Order Now</a>
              </div>
            </div>


            <div class="border-start col-md-3 col-sm-6 mb-5">
              <img src="../img/13.jpg" alt="" class="img-thumbnail">
              <div class="caption">
                <h3>Louis Phillipe</h3>
                <p>Price: Rs.1000.00</p>
                <a class="btn btn-primary btn-block " href="success.html">Order Now</a>
              </div>
            </div>

            <div class="border-start col-md-3 col-sm-6 mb-5">
              <img src="../img/14.jpg" alt="" class="img-thumbnail">
              <div class="caption">
                <h3>Peter England</h3>
                <p>Price: Rs.1500.00</p>
                <a class="btn btn-primary btn-block " href="success.html">Order Now</a>
              </div>
            </div>

          </div>
        </div>
      </main>



      <footer>
        <div class="footer-para text-center">
            <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
        </div>
    </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>