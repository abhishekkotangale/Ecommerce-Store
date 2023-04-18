

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
<?php
    include 'header-ad.php';
  ?>




      
      <!-- Modal -->
      <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
      </div> -->

      <main>
        <div class="container">
          <div class="jumbotron">
            <h1 class="display-3 text-center pb-3">
              Hello <?php
                    if(isset( $_SESSION['username'])){
                       echo $_SESSION['username'];
                    }else{
                      echo $_SESSION['username_u'];
                    }
              ?>
              </br>
              Welcome to Our Lifestyle Store!
            </h1>
            <p class="text-center">We have the best cameras, watches and shirts for you. No need to hunt around, we
              have all in one place.”</p>
          </div>

          <div class="row text-center">
           <?php
                include '../assets/connection.php';
                $sql = "select * from product";
                $query = mysqli_query($con,$sql);
                while($result = mysqli_fetch_array($query)){
            ?>
            <div class="border-start col-md-3 col-sm-6 mb-5">
                <img src="<?php echo $result['pic'];?>" alt="" class="img-thumbnail">
                  <div class="caption">
                    <h3><?php echo $result['product_name'];?></h3>
                    <h5><?php echo $result['product_desc'];?></h5>
                    <p><?php echo $result['cost'];?></p>
                    <a class="btn btn-primary btn-block" href="cart-add.php?item_id=<?php echo $result['id']; ?>">Add To cart</a>
                     <?php
                    // if(isset( $_SESSION['username_u'])){
                      // echo '
                      
                      // ';
                      // }
                   ?>
                  </div>  
            </div>
            <?php
            }
            
            ?>
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